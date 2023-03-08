<?php

namespace App\Exceptions;

use ErrorException;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Exceptions\ThrottleRequestsException;
use Illuminate\Http\Response;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
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
        // $this->reportable(function (Throwable $e) {
        //     //
        // });
        $this->renderable(function (Exception $exception, $request) {

            if ($request->wantsJson() || $request->is('api/*')) {

                switch (true) {

                    case ($exception instanceof ErrorException || $exception instanceof ModelNotFoundException):

                        return response()->json([
                            'status' => false,
                            'message' => 'model not found',
                        ], Response::HTTP_NOT_FOUND);

                        break;

                    case ($exception instanceof NotFoundHttpException):

                        return response()->json([
                            'status' => false,
                            'message' => 'incorrect url try again',
                        ], Response::HTTP_BAD_REQUEST);

                        break;

                    case ($exception instanceof AccessDeniedHttpException):

                        return response()->json([
                            'status' => false,
                            'message' => 'access prohibited for this API',
                        ], Response::HTTP_FORBIDDEN);

                        break;

                    case ($exception instanceof ThrottleRequestsException):

                        return response()->json([
                            'status' => false,
                            'message' => 'too Many Attempts for request',
                        ], Response::HTTP_TOO_MANY_REQUESTS);

                        break;

                }

            }

        });

        
    }
}
