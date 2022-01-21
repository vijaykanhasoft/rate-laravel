<?php

namespace App\Http\Middleware;

use Session;
use Closure;
use Log;

class MinimumAppVersion
{

    /**
     * @var array
     */
    protected $except = [
        'v1/auth/*',
    ];

    /**
     * @param $request
     * @param  Closure  $next
     * @param  null  $guard
     * @return array|mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if(empty($request->header("X-App-Version"))) {
            return global_api_response(config("tally.errors.minimum-app-version"), [
                "title" => "Update available",
                "message" => "This version of the app is no longer supported. Update to the latest version in the app store.",
                "imageType" => "INFORMATION",
                "hideReportAnIssueButton" => true,
            ], 422);
        }

        if(version_compare($request->header("X-App-Version"), config("tally.app.minimum-version"), "<")) {
            return global_api_response(config("tally.errors.minimum-app-version"), [
                "title" => "Update available",
                "message" => "This version of the app is no longer supported. Update to the latest version in the app store.",
                "imageType" => "INFORMATION",
                "hideReportAnIssueButton" => true,
            ], 422);
        }

        return $next($request);
    }
}
