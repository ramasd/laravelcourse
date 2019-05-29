<?php

namespace App\Http\Middleware;

use Closure;

class EvenYear
{

  /**
  * Handle an incoming request.
  *
  * @param \Illuminate\Http\Request $request
  * @param \Closure $next
  * @return mixed
  */
  public function handle($request, Closure $next)
  {
    if (date('Y') % 2 == 0) {
      return redirect('/')->with('year', 'This year is even!');
    }

    return $next($request);
    }
}