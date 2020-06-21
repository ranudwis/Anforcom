<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use App\Anforcom\Notification\Message\ErrorMessage;
use App\Anforcom\Notification\Notifier\DiscordLog;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        'Illuminate\Validation\ValidationException',
        'Illuminate\Auth\AuthenticationException',
        'Symfony\Component\HttpKernel\Exception\NotFoundHttpException',
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     *
     * @throws \Exception
     */
    public function report(Exception $exception)
    {
        parent::report($exception);

        if (env('APP_ENV') === 'production') {
            if (
                in_array(
                    get_class($exception),
                    $this->dontReport
                )
            ) {
                return;
            }

            $message = new ErrorMessage($exception);
            $discordLogNotifier = new DiscordLog();

            $discordLogNotifier->send($message);
        }
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Exception
     */
    public function render($request, Exception $exception)
    {
        return parent::render($request, $exception);
    }
}
