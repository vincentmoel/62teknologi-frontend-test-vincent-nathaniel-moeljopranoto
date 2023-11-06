<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Client\RequestException;
use Illuminate\Session\TokenMismatchException;
use Illuminate\Validation\ValidationException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    // Custom Error Handle
    public function render($request, Throwable $exception)
    {
        if ($exception instanceof TokenMismatchException) {
            return redirect()->back()->with([
                "error" => [
                    "code"      => 419,
                    "message"   => $exception->getMessage()
                ]
            ]);
        }

        // Handle Error From API RESPONSE
        if ($exception instanceof RequestException) {

            // When validation error (code = 422 Unprocessable Content) 
            if($exception->getCode() == 422)
            {
                return redirect()
                    ->back()
                    ->withErrors($exception->response->json('errors'))
                    ->withInput();
            }


            return redirect()->back()->with([
                "error" => [
                    "code"      => $exception->getCode(),
                    "message"   => $exception->response->json('message')
                ]
            ]);
        }

        

        

        return parent::render($request, $exception);
    }

}
