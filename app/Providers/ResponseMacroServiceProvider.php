<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Response;

class ResponseMacroServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        Response::macro('success', function ($data, $status = 200, $code = null) {
            $code = is_null($code) ? $status : $code;

            return Response::json([
                'success'  => true,
                'code' => $code,
                'data' => $data
            ], $status);
        });

        Response::macro('error', function ($errors, $status = 400, $code = null) {
            $errors = is_array($errors) ? $errors : ['message' => $errors];

            $code = is_null($code) ? $status : $code;

            return Response::json([
                'success'  => false,
                'code' => $code,
                'errors' => $errors
            ], $status);
        });

        Response::macro('message', function ($message, $status = 200, $code = null) {

            $code = is_null($code) ? $status : $code;

            return response()->json([
                'success'  => $status == 200 ? true : false,
                'code' => $code,
                'message' => $message
            ], $status);
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
