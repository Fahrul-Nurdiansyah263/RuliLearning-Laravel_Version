<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfExcept extends Middleware
{
    protected $except = [
        '/midtrans/webhook',
    ];
}
