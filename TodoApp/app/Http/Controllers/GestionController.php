<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tache;
class GestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $datas = Tache::paginate(10);
        return view('taches.index', compact('datas'));
    }

    /**
     * Fonction pour la recuperation des taches terminés
     */

    public function accomplie()
    {
        $datas = Tache::where('accomplie', 1)->paginate(10);
        return view('taches.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('taches.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nouvelletache = new Tache();
        $nouvelletache->titre = $request->titre;
        $nouvelletache->expiration = $request->date;
        $nouvelletache->description = $request->description;
        $nouvelletache->save(); 

        return redirect()->route('taches.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Tache  $tachemodify
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tachemodify = Tache::findOrFail($id);
        return view('taches.modifier',compact('tachemodify'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $tacheupdate = Tache::findOrFail($id);
        $tacheupdate->titre = $request->titre;
        $tacheupdate->expiration = $request->date;
        $tacheupdate->description = $request->description;
        $tacheupdate->accomplie = $request->acp;
        $tacheupdate->update();
        return redirect()->route('taches.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tache::where('id', $id)->delete();
        return back();
    }

    public function faireaccomplie($id){
        $tache = Tache::findOrFail($id);
        if($tache) {
          $tache->accomplie = 1;
          $tache->save();
          return back();
        }
    }

    public function fairenonaccomplie($id){
        $tache = Tache::findOrFail($id);
        if($tache){
            $tache->accomplie = 0;
            $tache->save();
            return back();
        }
        
    }
}
