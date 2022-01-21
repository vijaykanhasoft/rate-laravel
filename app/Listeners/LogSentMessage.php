<?php

namespace App\Listeners;

use Illuminate\Http\Request;
use Illuminate\Mail\Events\MessageSent;
use Segment;
use Session;

class LogSentMessage
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  MessageSent  $event
     * @return void
     */
    public function handle(MessageSent $event)
    {
        foreach ((array) $event->message->getHeaders()->get('to') as $key => $value) {
            $mail = key($value);
            break;
        }
        $sessionEventName = session()->get('segment_event');
        if (isset($sessionEventName) && $sessionEventName != 'forgot_mobile_number_entered') {
            Segment::track([
                "anonymousId" => Session::get('segment_event_anonymous_id') ?? "join-" . md5($mail),
                "event" => Session::get('segment_event') ?? config("segment.success.newMobEmailSent"),
                "properties" => [
                    "mailgunEmailId" => $event->message->getHeaders()->get('x-mailgun-message-id')->getValue(0),
                ],
            ]);
        }
    }
}
