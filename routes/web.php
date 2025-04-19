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
        /*$utilisateur = new \App\Models\Utilisateur();
        $utilisateur->nom = "Gueye";
        $utilisateur->prenom = "Salymata";
        $utilisateur->email = "saly03@outlook.com";
        $utilisateur->mot_de_passe = "fleur0535";
        $utilisateur->genre_id = 2;
        $utilisateur->save();
        return $utilisateur;*/
        return \App\Models\Utilisateur::all(['nom', 'prenom', 'email',]);
    });
    //Les routes pour les administrateurs
    Route::get('/administrateurs', function(){
        /*$admin = new \App\Models\Administrateur();
        $admin->id = 2;
        $admin->niveau_acces = "Offer_admin";
        $admin->save();
        return $admin;*/
        return \App\Models\Administrateur::all();
    });
    //Les routes pour les recruteurs
    Route::get('/recruteurs', function(){
        /*$recruteur = new \App\Models\Recruteur();
        $recruteur->id = 3;
        $recruteur->save();
        return $recruteur;*/
        return \App\Models\Recruteur::all();
    });
    //les routes pour les candidats
    Route::get('/candidats', function(){
        /*$candidat = new \App\Models\Candidat();
        $candidat->id = 4;
        $candidat->save();
        return $candidat;*/
        return App\Models\Candidat::all();
    });
    //Les routes pour les messages
    Route::get('/messages', function(){
        /*$message = new \App\Models\Message();
        $message->recruteur_id = 3;
        $message->candidat_id = 4;
        $message->contenu = "Bonsoir Monsieur Sene, je suis bien interessee par votre offre d'emploi";
        $message->date_envoi = Now();
        $message->save();
        return $message;*/
        return \App\Models\Message::all();
    });
    //Les routes pour les candidatures
    Route::get('/candidatures', function(){
        /*$candidature = new \App\Models\Candidature();
        $candidature->candidat_id = 4;
        $candidature->offre_emploi_id = 1;
        $candidature->statut = "En cours de traitement";
        $candidature->date_depot = Now();
        $candidature->save();
        return $candidature;*/
        return  \App\Models\Candidature::all();
    });
    //Les routes pour les offres d'emploi
    Route::get('/offre_emplois', function(){
        /*$offre = new \App\Models\Offre_emploi();
        $offre->recruteur_id = 3;
        $offre->titre = "Masseur-Kinésithérapeute D.E. – CDI – Cabinet de Rééducation";
        $offre->description = "Recherche kinésithérapeute spécialisé en rééducation post-opératoire pour rejoindre notre équipe. Temps plein avec possibilité de gestion autonome de dossier. Matériel de pointe (KinTech, ultrasons).";
        $offre->statut = "En cours";
        $offre->date_publication = Now();
        $offre->save();
        return $offre;*/
        return \App\Models\Offre_emploi::all();
    });
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
