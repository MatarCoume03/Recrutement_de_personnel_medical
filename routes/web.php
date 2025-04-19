<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

Route::prefix('/RecrutementMedical')->name('RecruitementMedical')->group(function(){
    //Les routes pour les utilisateurs
    Route::get('/utilisateurs', function(){
        $utilisateur = \App\Models\Utilisateur::create([
            'nom' => 'Fall',
            'prenom' => 'Ousmane',
            'email' => 'fallndiagayaram@hotmail.com',
            'mot_de_passe' => 'Fall1234',
            'genre_id' => 1
        ]);
        return $utilisateur;
    });
    //Les routes pour les administrateurs
    Route::get('/administrateurs', function(){
       
        $admin = \App\Models\Administrateur::find(1);
        return $admin;
    });
    //Les routes pour les recruteurs
    Route::get('/recruteurs', function(){
       $recruteur = \App\Models\Recruteur::create([
        'id' => 2
       ]);
        return \App\Models\Recruteur::all();
    });
    //les routes pour les candidats
    Route::get('/candidats', function(){
       $candidat = \App\Models\Candidat::create([
        'id' => 5
       ]);
        return App\Models\Candidat::all();
    });
    //Les routes pour les messages
    Route::get('/messages', function(){
       $message = \App\Models\Message::create([
        'recruteur_id' => 2,
        'candidat_id' => 4,
        'contenu' => 'Merci Beaucoup madame Ndiaye pour le recrutement, je vous suis extremement reconnaissant',
        'date_envoi' => Now()
       ]);
        return \App\Models\Message::all();
    });
    //Les routes pour les candidatures
    Route::get('/candidatures', function(){
        $candidature = \App\Models\Candidature::create([
            'candidat_id' => 4,
            'offre_emploi_id' => 2,
            'statut' => 'accepte',
            'date_depot' => Now()
        ]);
        return  \App\Models\Candidature::all();
    });
    //Les routes pour les offres d'emploi
    Route::get('/offre_emplois', function(){
       $offre = \App\Models\Offre_emploi::create([
        'recruteur_id' => 2,
        'titre' => 'Recherche Sage-Femme (CDD 6 mois)',
        'description' => 'Pas assez d\'inpiration pour la description pff',
        'statut' => 'En cours',
        'date_publication' => Now()
       ]);
        return \App\Models\Offre_emploi::all();
    });
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
