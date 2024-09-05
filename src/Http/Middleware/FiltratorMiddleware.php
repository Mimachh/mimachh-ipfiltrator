<?php 

namespace Mimachh\IpFiltrator\Http\Middleware;

use Closure;

class FiltratorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $currentIP = $request->ip();
        
        $whitelist = config('ipfiltrator.whitelist');
        $enabled = config('ipfiltrator.enable');
        if(!$enabled) {
            return $next($request);
        }
        if($enabled && in_array($currentIP, $whitelist)) {
            return $next($request);
        }
        return response('Unauthorized.', 403);
    }
}
