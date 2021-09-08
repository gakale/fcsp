<?php

namespace App\Http\Controllers;

use App\Http\Requests\JoueuRequest;
use App\Joueur;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JoueursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $joueur = DB::table('joueurs')->orderBy('created_at','DESC')->paginate(10);


        return view('admin\joueurs',compact('joueur'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin\joueurscreate');    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JoueuRequest $request)
    {
        $validated = $request->validated();
      
        
       

        $joueur =new Joueur();

        
        $joueur->nom = $validated['nom'];
        $joueur->prenom = $validated['prenom'];
        $joueur->datenais = $validated['datenais'];
        $joueur->lieunais = $validated['lieunais'];
        $joueur->taille = $validated['taille'];
        $joueur->poids = $validated['poids'];
        $joueur->numero_maillot = $validated['numero_maillot'];
        $joueur->position_terrain = $validated['position_terrain'];
        $joueur->details_joueurs = $validated['details_joueurs'];
        
        $filename = time().'.'.$request->photo_joueurs->extension();

      $path =  $request->file('photo_joueurs')->storeAs(
                'uploads',
                $filename,
                'public'

        );

        $joueur->photo_joueurs= $path;

        // $file=$joueur->photo_joueurs = $validated['photo_joueurs'];

        // $name = time().'.'.$file-> getClientOriginalName();
        // $files= $file->move('/uploads',$name);
      
        $joueur->video_joueurs = $validated['video_joueurs'];

        $joueur->save();
  
            
        return redirect()->route('joueurs.create')->with('status', 'Creation avec  success ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $joueur = Joueur::where('id',$id)->first();
        return view('admin\joueurshow',[
            'joueur'=> $joueur
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $joueur = Joueur::where('id',$id)->first();
        $joueur -> delete();
        return redirect()->route('joueurs.index');
    }
}