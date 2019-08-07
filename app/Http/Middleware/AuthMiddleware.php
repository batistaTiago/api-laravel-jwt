<?php

namespace App\Http\Middleware;

use Closure;
use App\Http\Controllers\ResponseController;
use App\User;

class AuthMiddleware
{
    /**
     * Verifica se há um token na requisição e se há um usuário com o token fornecido. Em caso de falha, retorna 401 (não-autorizado).
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {

        $authorization = $request->header('Authorization');
        $splits = explode(' ', $authorization); 
        if (count($splits) == 2 && strtolower($splits[0]) == 'bearer') {
            $token = $splits[1];
            $user = User::where('token', $token)->first();
            if (isset($user)) {
                return $next($request);  
            }
        }

        return ResponseController::unauthorized();
    }
}
