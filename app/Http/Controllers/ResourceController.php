<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\AuthMiddleware;

class ResourceController extends Controller
{

    public function __construct()
    {
        $this->middleware(AuthMiddleware::class);
    }

    public function protectedResource() {
        return response()->json([
            'payload' => 'alguma informação muito importante'
        ]);
    }
}
