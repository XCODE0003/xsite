<?php

namespace App\Http\Middleware;

use App\Models\Category;
use App\Models\Setting;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CategoryMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $categories = Category::query()->get()->toArray();
        $settings = Setting::query()->first();
        view()->share('settings', $settings);
        view()->share('categories', $categories);
        return $next($request);
    }
}
