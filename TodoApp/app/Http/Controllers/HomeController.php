<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tache;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
         $datas = Tache::paginate(10);
         return redirect()->route('taches.index');
        /* return view('taches.index', compact('datas'));*/
    }
}
