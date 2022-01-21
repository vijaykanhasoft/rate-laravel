<?php

namespace App\Http\Controllers;

use App\Affiliate;
use App\Repositories\RailsbankRespository;
use App\User;
use App\UserInvite;
use App\UserLink;
use Illuminate\Http\Request;
use Propaganistas\LaravelPhone\PhoneNumber;
use Segment;

/**
 * Class ClickController
 *
 * @package App\Http\Controllers
 */
class ClickController extends ApiController
{

    /**
     * ClickController constructor.
     *
     * @param  RailsbankRespository  $railsbankRespository
     */
    public function __construct(RailsbankRespository $railsbankRespository)
    {
        parent::__construct($railsbankRespository);
    }

    /**
     * @param  Request  $request
     * @return mixed
     */
    public function sendSms(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'phone' => 'required',
                'name' => 'required',
                'linkId' => 'required',
            ]);

            $click = UserLink::where("link_id", $validatedData['linkId'])->firstOrFail();
            $phoneNumber = PhoneNumber::make($validatedData['phone'])->ofCountry("GB")->formatE164();

            $alreadyExists = false;
            $isInvitedUserTest = User::where("mobile_phone", $phoneNumber)->first();
            if (!empty($isInvitedUserTest)) {
                $alreadyExists = true;
            }

            $inviteTest = UserInvite::where("invited_phone_number", $phoneNumber)->get();
            if ($inviteTest->count() > 0) {
                // Already invited
                // @TODO Ask Damon what to do.
            } else {
                if (!$alreadyExists) {
                    UserInvite::create([
                        "user_id" => $click->inviter->id,
                        "invited_email" => "",
                        "invited_phone_number" => $phoneNumber,
                        "invited_name" => $validatedData['name'],
                        "inviter_amount" => config("tally.invite.inviter_amount"),
                        "signup_amount" => config("tally.invite.signup_amount"),
                    ]);

                    $nameBits = split_name($validatedData['name']);

                    Segment::identify([
                        "anonymousId" => "join-" . md5($phoneNumber),
                        "traits" => [
                            "status" => "invited",
                            "phone" => $phoneNumber,
                            "email" => ltrim($phoneNumber, "+") . "@tallymoney.com",
                            "first_name" => $nameBits['first_name'],
                            "last_name" => $nameBits['last_name'],
                            "inviter_first_name" => $click->inviter->first_name,
                            "inviter_last_name" => $click->inviter->last_name,
                            "inviter_phone" => $click->inviter->mobile_phone,
                            "inviter_email" => $click->inviter->email,
                        ],
                    ]);

                    $message = "Thanks for joining Tally, you can download the app here. https://tallymoney.com/get";
                    sendSms("twilio", $phoneNumber, $message);
                }
            }

            return $this->_api_response(config("tally.success.invite-user"),
                ["success" => true, "phone" => $phoneNumber]);
        } catch (\Exception $e) {
            return $this->_error_api_response(config("tally.errors.invite-user"), [
                "message" => "Looks like something has gone wrong.",
            ], $e);
        }
    }
    /**
     * [sendInviteSms description]
     *
     * @param   Request  $request  [$request description]
     *
     * @return  [type]             [return array]
     */
    public function sendInviteSms(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'phone' => 'required',
            ]);
            $phoneNumber = PhoneNumber::make($validatedData['phone'])->ofCountry("GB")->formatE164();
            Segment::identify([
                "anonymousId" => "join-" . md5($phoneNumber),
                "traits" => [
                    "status" => "invited-without-link",
                    "phone" => $phoneNumber,
                    "email" => ltrim($phoneNumber, "+") . "@tallymoney.com",
                ],
            ]);
            $message = "Thanks for joining Tally, you can download the app here. https://tallymoney.com/get";
            sendSms("twilio", $phoneNumber, $message);
            return $this->_api_response(config("tally.success.invite-user"),
                ["success" => true, "phone" => $phoneNumber]);
        } catch (\Exception $e) {
            return $this->_error_api_response(config("tally.errors.invite-user"), [
                "message" => "Looks like something has gone wrong.",
            ], $e);
        }
    }
    /**
     * @param  Request  $request
     * @return mixed
     */
    public function sendAffiliateSms(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'phone' => 'required',
                'email' => 'required',
                'name' => 'required',
                'linkId' => 'required',
                "meta" => "nullable|string",
            ]);

            $click = Affiliate::where("link_id", $validatedData['linkId'])->firstOrFail();
            $phoneNumber = PhoneNumber::make($validatedData['phone'])->ofCountry("GB")->formatE164();

            $alreadyExists = false;
            $isInvitedUserTest = User::where("mobile_phone", $phoneNumber)->first();
            if (!empty($isInvitedUserTest)) {
                $alreadyExists = true;
            }

            $inviteTest = UserInvite::where("invited_phone_number", $phoneNumber)->get();
            if ($inviteTest->count() > 0) {
                // Already invited
                // @TODO Ask Damon what to do.
            } else {
                if (!$alreadyExists) {
                    UserInvite::create([
                        "user_id" => 0,
                        "affiliate_id" => $click->id,
                        "meta" => json_encode($validatedData['meta']),
                        "invited_email" => $validatedData['email'],
                        "invited_phone_number" => $phoneNumber,
                        "invited_name" => $validatedData['name'],
                        "inviter_amount" => config("tally.invite.inviter_amount"),
                        "signup_amount" => config("tally.invite.signup_amount"),
                    ]);

                    $nameBits = split_name($validatedData['name']);

                    Segment::identify([
                        "anonymousId" => "join-" . md5($phoneNumber),
                        "traits" => [
                            "status" => "affiliate-invite",
                            "email" => $validatedData['email'],
                            "phone" => $phoneNumber,
                            "first_name" => $nameBits['first_name'],
                            "last_name" => $nameBits['last_name'],
                            "affiliate" => $click->name,
                        ],
                    ]);

                    $message = "Thanks for joining Tally, you can download the app here. https://tallymoney.com/get";
                    sendSms("twilio", $phoneNumber, $message);
                }
            }

            return $this->_api_response(config("tally.success.invite-user"),
                ["success" => true, "phone" => $phoneNumber]);
        } catch (\Exception $e) {
            return $this->_error_api_response(config("tally.errors.invite-user"), [
                "message" => "Looks like something has gone wrong.",
            ], $e);
        }
    }

    /**
     * @param  Request  $request
     */
    public function main(Request $request)
    {
        $data = [];
        return view("www.invite.welcome")->with($data);
    }

    /**
     * @param  Request  $request
     * @param  string  $linkId
     * @return mixed
     */
    public function track(Request $request, $linkId = "")
    {
        try {
            $click = UserLink::where("link_id", $linkId)->firstOrFail();
            $data = [
                "user" => $click->inviter,
                "linkId" => $linkId,
            ];
            return view("www.invite.main")->with($data);
        } catch (\Exception $e) {
            // No one to attribute to
            return redirect(route("landing-main"));
        }
    }

    /**
     * @param  Request  $request
     * @param  string  $linkId
     * @return mixed
     */
    public function trackAffiliate(Request $request, $linkId = "")
    {
        try {

            $validatedData = $request->validate([
                "slicetrans_id" => "nullable|string",
            ]);

            $click = Affiliate::where("link_id", $linkId)->firstOrFail();
            $data = [
                "affiliate" => $click,
                "linkId" => $linkId,
                "affMeta" => $validatedData['slicetrans_id'],
                "email" => $request->input("email"),
                "phone" => $request->input("phone"),
                "name" => $request->input("name"),
            ];

            if (strlen($data['phone']) > 3) {
                $data['phone'] = substr($data['phone'], 2);
            }
            return view("www.affiliate.main")->with($data);
        } catch (\Exception $e) {
            // No one to attribute to
            return redirect(route("landing-main"));
        }
    }

}
