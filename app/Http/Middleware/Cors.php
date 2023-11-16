<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
class Cors
{
    public function handle(Request $request, Closure $next)
    {
        // $response=$next($request);
        // header("Access-Control-Allow-Origin", "localhost:4200");
        // header("Access-Control-Allow-Origin: *");
        // header("Access-Control-Allow-Credentials: true");
        // header("Access-Control-Max-Age: 1000");
        // header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding");
        // header("Access-Control-Allow-Methods: PUT, POST, GET, OPTIONS, DELETE");
        // return $next($request);
        $response = $next($request);
        $response->headers->set('Access-Control-Allow-Origin', '*');
        $response->headers->set('Access-Control-Allow-Methods', 'POST, GET, OPTIONS, PUT, DELETE');
        $response->headers->set('Access-Control-Allow-Headers', 'Content-Type, Accept, Authorization, X-Requested-With, Application');
        return $response;
    }
}
