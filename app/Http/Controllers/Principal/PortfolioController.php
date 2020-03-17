<?php

namespace App\Http\Controllers\Principal;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\Process\Process;

class PortfolioController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $images = Portfolio::paginate();
        $title =  Portfolio::paginate();
        return view('principal.portfolio', compact('images', 'title'));
    }
}





