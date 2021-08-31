<?php

namespace App\Http\Middleware;

use App\Models\Movie;
use Closure;
use Illuminate\Http\Request;

class CheckForDuplicates
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $already_exists = Movie::where('title', $request->get('title', ''))
            ->where('release_date', $request->get('release_date', ''))
            ->exists();
        if ($already_exists) {
            return response()->json([
                'message' => 'Movie with the same title and release_date already exists'
            ], 400);
        }
        return $next($request);
    }
}
