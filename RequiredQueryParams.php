<?php

namespace App\Http\Middleware;

use Closure;

class RequiredQueryParams
{
    /**
     * A list of accepted query params your app accepts
     * @var array
     */
    protected  $accepts  = [
        
    ];

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $queryParams = $request->query();

        if (count($queryParams)){
            foreach ($queryParams as $param => $value){
                if (!in_array($param, $this->accepts))
                    return response()->json([
                        'status' => 'error',
                        'result' => "unknown query param `{$param}`"
                    ], 400);
            }
        }

        return $next($request);
    }
}

