<?php

namespace App\Http\Controllers;

use App\Formulaire;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class FormulaireController extends Controller
{
    public function index(){
        $Formulaires = Formulaire::all();
        return view('backsite/backform', compact('Formulaires'));
    }
    // public function show($id){
    //     $Formulaires = Formulaire::all()->where('id_user',$id);
    //     $user = User::find($id);
    //     return view('backsite/showFormulaire',compact('Formulaires','user'));

    //}
    public function create(){
        $Formulaires = new Formulaire();
        return view('create/creformu', compact('Formulaires'));
    }
    
    public function store(Request $request){

             $request->validate([
            'pseudo' => 'required|min:4',
            'email' => 'required|email:rfc,dns',
            'motdepasse' => 'required|max:15',
             'img' => 'image'
            ]);
            Storage::put('public',$request->file('img'));
        $Formulaire = new Formulaire();
        $Formulaire->pseudo = $request->input('pseudo');
        $Formulaire->email = $request->input('email');
        $Formulaire->motdepasse = $request->input('motdepasse');
        $Formulaire->img = $request->file('img');
        $Formulaire->save();

        return redirect()->route('intro');
    }
    public function edit($id){  
        $Formulaire = Formulaire::find($id);
        return view('edit/editformu', compact('Formulaire'));
    }
    public function update(Request $request, $id){
        $Formulaire = Formulaire::find($id);
        $Formulaire->pseudo = $request->input('pseudo');
        $Formulaire->email = $request->input('email');
        $Formulaire->motdepasse = $request->input('motdepasse');

        $Formulaire->save();

        return redirect()->route('intro');
    }
    public function destroy($id){
        $Formulaire = Formulaire::find($id);
        $Formulaire->delete();
        return redirect()->route('intro');
    }
}
