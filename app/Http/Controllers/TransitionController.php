<?php
namespace App\Http\Controllers;

use App\Models\Comptecotisa;
use App\Models\Declaration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;

class TransitionController extends Controller
{

    public function ajouterutilisateur(Request $request)
    {
        $request->validate([
            'role' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'matricule' => ['required', 'string', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'role' => $request->role,
            'name' => $request->name,
            'email' => $request->email,
            'matricule' => $request->matricule,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->back()->with('success', 'Utilisateur enregistré avec succès');
    }

    public function transition()
    {
        return view('pagecotisa.pagetransition');
    }

    public function inscription()
    {
        return view('pagecotisa.superadmin.pageajouterutilisateur');
    }


    public function espacepension()
    {
        return view('pagecotisa.retraite.page2retraite');
    }
    
    
    public function compte(Request $request)
    {
        $contact = new Comptecotisa;
        $contact->username = $request->input('username');
        $contact->email = $request->input('email');
        $contact->password = $request->input('password');
        $contact->matricule = $request->input('matricule');
        $contact->role = $request->input('role');
        $contact->save();

        return redirect()->back()->with('success', 'Utilisateur enregistré avec succès');
    }

    public function identification()
    {
        return view('pagecotisa.pageidentification');
    }

    public function declaration()
    {
        return view('pagecotisa.employeur.page2employeur');
    }
    public function declarer(Request $request)
    {
        $request->validate([
            'id_entreprise' => ['string', 'max:255'],
            'entreprise' => ['required', 'string', 'max:255'],
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'date_de_naissance' => ['required', 'string','max:255'],
            'genre' => ['required', 'string', 'max:255'],
            'profession' => ['required'],
            'validation' => ['required'],
        ]);

        $user = Declaration::create([
            'id_entreprise' => $request->id_entreprise,
            'entreprise' => $request->entreprise,
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'date_de_naissance' => $request->date_de_naissance,
            'genre' => $request->genre,
            'profession' =>$request->profession,
            'validation' =>$request->validation,
        ]);

         return redirect()->route('declaration')->with('success', 'Declaration reussie'); 
    }

    public function liste_des_declares()
    {
        $declarations=Declaration::All();
        $mesemployes=Declaration::where('id_entreprise', Auth::user()->id)->get();
        return view('pagecotisa.employeur.liste_des_declares',compact('declarations', 'mesemployes'));
    }

    public function validation($userId, Request $request){
        $request->validate([
            'validation' => 'string|max:255',
           
        ]);
        // Récupérez l'utilisateur à mettre à jour
        $userid = Declaration::findOrFail($userId);
        if ($userid){
            // Mettez à jour les champs du modèle avec les données du formulaire
            $userid->validation = $request->input('validation');
            // Enregistrez les modifications
            $userid->save();
            // Redirigez l'administrateur vers la liste des utilisateurs ou toute autre page que vous souhaitez.
            return redirect()->route('liste_des_declares')->with('success', 'Utilisateur mis à jour avec succès');
        }
        
        

        

        
    }



    public function cotisation()
    {
        return view('pagecotisa.employe.page2employe');
    }

    public function index()
    {
        return view('accueil');
    }

    public function presentation()
    {
        return view('pagecotisa.politiquecotisa');
    }

    public function index2()
    {
        $declarations=Declaration::All();
        return view('pagecotisa.cnss.liste', [
            'declarations' => $declarations,
        ]);
    }



    public function delete($id)
    {
        $users = User::find($id);

        if (!$users) {
            return redirect()->route('liste_utilisateurs')->with('error', 'Utilisateur non trouvé.');
        }

        $users->delete();
        return redirect()->route('liste_utilisateurs')->with('success', 'Suppression réussie.');
    }

   





   
    public function edit($id)
    {
        $mesemployes = Declaration::find($id);

        return view('pagecotisa.employeur.modifier', compact('mesemployes'));
    }

    public function modifier_traitement(Request $request)
{  
    $request->validate([
        'id' => 'required',
        'id_entreprise' => 'required',
        'entreprise' => 'required',
        'nom' => 'required',
        'prenom' => 'required',
        'date_de_naissance' => 'required',
        'genre' => 'required',
        'profession' => 'required',
        'validation' => 'required',
    ]);

    $mesemploye = Declaration::find($request->id);
    $mesemploye->update([
        'id' => $request->id,
        'id_entreprise' => $request->id_entreprise,
        'entreprise' => $request->entreprise,
        'nom' => $request->nom,
        'prenom' => $request->prenom,
        'date_de_naissance' => $request->date_de_naissance,
        'genre' => $request->genre,
        'profession' => $request->profession,
        'validation' => $request->validation,
    ]);

    $declarations=Declaration::All();
    $mesemployes=Declaration::where('id_entreprise', Auth::user()->id)->get();
    return view('pagecotisa.employeur.liste_des_declares', compact('declarations', 'mesemployes'))->with('status', 'Modification réussie');

}
    public function show($id)
    {
        $contacts = Comptecotisa::find($id);

        if ($contacts) {
            return view('detail', compact('contacts'));
        } else {
            return "Aucun étudiant trouvé avec cet ID.";
        }
    }

    public function store(Request $request)
    {
        $contact = new Comptecotisa;
        $contact->username = $request->input('username');
        $contact->email = $request->input('email');
        $contact->password = $request->input('password');
        $contact->maticule = $request->input('matricule');
        $contact->role = $request->input('role');
        $contact->save();

        return redirect()->back()->with('success', 'Utilisateur enregistré avec succès');
    }
}
