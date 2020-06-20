<?php

namespace App\Anforcom\Notification\Message;

use Exception;
use Route;

class ErrorMessage implements Message
{
    private $exception;
    private $methods;
    private $uri;

    public function __construct(Exception $exception)
    {
        $this->exception = $exception;

        $route = Route::current();

        if ($route) {
            $this->methods = implode(', ', $route->methods);
            $this->uri = $route->uri;
        }

        $user = request()->user();
        if ($user) {
            $this->user = $user->name . ' ' . $user->email . ' ' . $user->id;
        }
    }

    public function getMessage()
    {
        return <<<MESSAGE
        User: {$this->user}
        [{$this->methods}] {$this->uri}

        {$this->exception->getMessage()}
        MESSAGE;
    }
}
