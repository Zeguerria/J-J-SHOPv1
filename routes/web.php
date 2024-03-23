<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', 'App\Http\Controllers\RouteController@lesdirections')->name('dashboard');
});
//LES REDIRECTIONS DEBUT
    Route::get('/redirects', 'App\Http\Controllers\RouteController@lesdirections');
    Route::get('/adminaccueils', 'App\Http\Controllers\RouteController@adminacceuil')->name("HomeAdmin");
    Route::get('/siteaccueils', 'App\Http\Controllers\RouteController@siteacceuil')->name("HomeSite");
// LES REDIRECTIONS FIN


//ADMN DEBT
    // USERS DEBUT
            Route::get('user', 'App\Http\Controllers\UserController@index');
            Route::get('usercorbeille', 'App\Http\Controllers\UserController@indexCorbeille');
            Route::post('ajouterUser', 'App\Http\Controllers\UserController@store')->name('ajouterUser');
            Route::post('modifierUser', 'App\Http\Controllers\UserController@update')->name('modifierUser');
            Route::post('supprimerUser', 'App\Http\Controllers\UserController@destroy')->name('supprimerUser');
            Route::post('corbeilleUser', 'App\Http\Controllers\UserController@corbeille')->name('corbeilleUser');
            Route::post('recupUser', 'App\Http\Controllers\UserController@recup_corbeille')->name('recupUser');
            Route::get('deleteAlluser', 'App\Http\Controllers\UserController@delete_all');
        //tout mettre en corbeille
            Route::get('corbeilleAlluser', 'App\Http\Controllers\UserController@corbeille_all')->name('corbeilleAlluser');
            Route::get('recupAlluser', 'App\Http\Controllers\UserController@recup_all')->name('recupAlluser');
        // CLIENT DEBUT
            Route::get('client', 'App\Http\Controllers\UserController@indexClient');
            Route::get('clientcorbeille', 'App\Http\Controllers\UserController@indexCorbeilleClient');
            //
            Route::post('ajouterClient', 'App\Http\Controllers\UserController@storeClient')->name('ajouterClient');
            Route::post('modifierClient', 'App\Http\Controllers\UserController@updateClient')->name('modifierClient');
            //
            Route::get('recupAllclient', 'App\Http\Controllers\UserController@recup_all_Client')->name('recupAllclient');
            Route::get('corbeilleAllclient', 'App\Http\Controllers\UserController@corbeille_all_Client')->name('corbeilleAllclient');
            Route::get('deleteAllclient', 'App\Http\Controllers\UserController@delete_all_Client');
        // CLIENT FIN
        // PROFIL UTILISATEURS DEBUT
            Route::get('profilAdmin', 'App\Http\Controllers\UserController@profilAdmin');
        // PROFIL UTILISATEUR FIN
// USERS FIN
// PROFIL DEBUT
//route de Profil
    Route::get('profil', 'App\Http\Controllers\ProfilController@index');
    Route::get('profilCorbeille', 'App\Http\Controllers\ProfilController@indexCorbeille');
    Route::get('deleteAllprofil', 'App\Http\Controllers\ProfilController@delete_all');
    Route::get('corbeilleAllprofil', 'App\Http\Controllers\ProfilController@corbeille_all')->name('corbeilleAllprofil');
    Route::get('recupAllprofil', 'App\Http\Controllers\ProfilController@recup_all')->name('recupAllprofil');

    //fonction de Profil
    Route::post('ajouterProfil', 'App\Http\Controllers\ProfilController@store')->name('ajouterProfil');
    Route::post('modifierProfil', 'App\Http\Controllers\ProfilController@update')->name('modifierProfil');
    Route::post('supprimerProfil', 'App\Http\Controllers\ProfilController@destroy')->name('supprimerProfil');
    Route::post('corbeilleProfil', 'App\Http\Controllers\ProfilController@corbeille')->name('corbeilleProfil');
    Route::post('recupProfil', 'App\Http\Controllers\ProfilController@recup_corbeille')->name('recupProfil');
// PROFIL FIN
// HABILITATION DEBUT
    // ROUTE DEBUT
        Route::get('habilitation', 'App\Http\Controllers\HabilitationController@index');
        Route::get('habilitationCorbeille', 'App\Http\Controllers\HabilitationController@indexCorbeille');
    // ROUTE FIN
    // CREUD DEBUT
        Route::post('ajouterHabilitation', 'App\Http\Controllers\HabilitationController@store')->name('ajouterHabilitation');
        Route::post('modifierHabilitation', 'App\Http\Controllers\HabilitationController@update')->name('modifierHabilitation');
        Route::post('supprimerHabilitation', 'App\Http\Controllers\HabilitationController@destroy')->name('supprimerHabilitation');
        Route::post('corbeilleHabilitation', 'App\Http\Controllers\HabilitationController@corbeille')->name('corbeilleHabilitation');
        Route::post('recupHabilitation', 'App\Http\Controllers\HabilitationController@recup_corbeille')->name('recupHabilitation');
    // CREUD FIN
    // AUTRES DEBUT
        Route::get('deleteAllhabilitation', 'App\Http\Controllers\HabilitationController@delete_all');
        Route::get('corbeilleAllhabilitation', 'App\Http\Controllers\HabilitationController@corbeille_all')->name('corbeilleAllhabilitation');
        Route::get('recupAllhabilitation', 'App\Http\Controllers\HabilitationController@recup_all')->name('recupAllhabilitation');

    // AUTRES FIN
// HABILITATION FIN

//CATEGORIE DEBUT
    // CHEMIN DES PAGES DEBUT
        Route::get('categorie', 'App\Http\Controllers\CategorieController@index');
        Route::get('categoriecorbeille', 'App\Http\Controllers\CategorieController@indexCorbeille');
    //CHEMIN DES PAGE FIN
    //CHEMIN FUNCTION DEBUT
        Route::get('deleteAllcategorie', 'App\Http\Controllers\CategorieController@destroyTous')->name('deleteAll');
        Route::get('corbeilleAllcategorie', 'App\Http\Controllers\CategorieController@corbeilleTous')->name('corbeilleAll');
        Route::get('recupAllcategorie', 'App\Http\Controllers\CategorieController@recupTousCorbeille')->name('recupAll');

    //CHEMIN FUNCTION FIN
    //FONCTIONS DEBUT
        Route::post('ajoutercategorie', 'App\Http\Controllers\CategorieController@store')->name('ajouterCategorie');
        Route::post('modifiercategorie', 'App\Http\Controllers\CategorieController@update')->name('modifierCategorie');
        Route::post('supprimercategorie', 'App\Http\Controllers\CategorieController@destroy')->name('supprimerCategorie');
        Route::post('corbeillecategorie', 'App\Http\Controllers\CategorieController@corbeille')->name('corbeilleCategorie');
        Route::post('recupcategorie', 'App\Http\Controllers\CategorieController@recupUnCorbeille')->name('recupCategorie');
    // FONCTION FIN
    Route::get('/mettreaffiche/{id}', 'App\Http\Controllers\CategorieController@changeaffiche')->name('METTREAFFICHE');
    Route::get('/retireraffiche/{id}', 'App\Http\Controllers\CategorieController@changenormal')->name('RETIRERAFFICHE');
//CATEGORIE FIN

//PARAMETRE DEBUT
    // CHEMIN DES PAGES DEBUT
        Route::get('adminparametre', 'App\Http\Controllers\ParametreController@index');
        Route::get('adminparametreCorbeille', 'App\Http\Controllers\ParametreController@indexCorbeille');
    //CHEMIN DES PAGE FIN
    //CHEMIN FUNCTION DEBUT
        Route::get('deleteAll', 'App\Http\Controllers\ParametreController@destroyTous')->name('deleteAll');
        Route::get('corbeilleAll', 'App\Http\Controllers\ParametreController@corbeilleTous')->name('corbeilleAll');
        Route::get('recupAll', 'App\Http\Controllers\ParametreController@recupTousCorbeille')->name('recupAll');

    //CHEMIN FUNCTION FIN
    //FONCTIONS DEBUT
        Route::post('ajouterparametre', 'App\Http\Controllers\ParametreController@store')->name('ajouterParametre');
        Route::post('modifierparametre', 'App\Http\Controllers\ParametreController@update')->name('modifierParametre');
        Route::post('supprimerparametre', 'App\Http\Controllers\ParametreController@destroy')->name('supprimerParametre');
        Route::post('corbeilleparametre', 'App\Http\Controllers\ParametreController@corbeille')->name('corbeilleParametre');
        Route::post('recupparametre', 'App\Http\Controllers\ParametreController@recupUnCorbeille')->name('recupParametre');
    // FONCTION FIN
//PARAMETRAGES FIN
    // TYPE DE PARAMETRE DEBUT
        // CHEMIN DES PAGES DEBUT
            Route::get('admintypeparametre', 'App\Http\Controllers\TypeParametreController@index');
            Route::get('admintypeparametreCorbeille', 'App\Http\Controllers\TypeParametreController@indexCorbeille');
        //CHEMIN DES PAGE FIN
        //AUTRES FUNCTION DEBUT
            Route::get('deleteAlltypeparametre', 'App\Http\Controllers\TypeParametreController@destroyTous')->name('deleteAlltypeparametre');
            Route::get('corbeilleAlltypeparametre', 'App\Http\Controllers\TypeParametreController@corbeille_all')->name('corbeilleAlltypeparametre');
            Route::get('recupAlltypeparametre', 'App\Http\Controllers\TypeParametreController@recupTousCorbeille')->name('recupAlltypeparametre');

        //AUTRES FUNCTION FIN
        //FONCTIONS DEBUT
            Route::post('ajoutertypeparametre', 'App\Http\Controllers\TypeParametreController@store')->name('ajouterTypeDeParametre');
            Route::post('modifiertypeparametre', 'App\Http\Controllers\TypeParametreController@update')->name('modifierTypeDeParametre');
            Route::post('supprimertypeparametre', 'App\Http\Controllers\TypeParametreController@destroy')->name('supprimerTypeDeParametre');
            Route::post('corbeilletypeparametre', 'App\Http\Controllers\TypeParametreController@corbeille')->name('corbeilleTypeDeParametre');
            Route::post('recuptypeparametre', 'App\Http\Controllers\TypeParametreController@recupUnCorbeille')->name('recupTypeDeParametre');
        // FONCTION FIN
    // TYPE DE PARAMETRE FIN

    // PARAMETRE DEBUT
        // ROUTE PARAMETRE DEBUT
            Route::get('adminparametre', 'App\Http\Controllers\ParametreController@index');
            Route::get('adminparametreCorbeille', 'App\Http\Controllers\ParametreController@indexCorbeille');
        // ROUTE PARAMETRE FIN
        // AUTRES DEBUT
            Route::get('deleteAllparametre', 'App\Http\Controllers\ParametreController@destroyTous')->name('deleteAllparametre');
            Route::get('corbeilleAllparametre', 'App\Http\Controllers\ParametreController@corbeille_all')->name('corbeilleAllparametre');
            Route::get('recupAllparametre', 'App\Http\Controllers\ParametreController@recupTousCorbeille')->name('recupAllparametre');
        // AUTRES FIN
        // CREUD DEBUT
            Route::post('ajouterparametre', 'App\Http\Controllers\ParametreController@store')->name('ajouterParametre');
            Route::post('modifierparametre', 'App\Http\Controllers\ParametreController@update')->name('modifierParametre');
            Route::post('supprimerparametre', 'App\Http\Controllers\ParametreController@destroy')->name('supprimerParametre');
            Route::post('corbeilleparametre', 'App\Http\Controllers\ParametreController@corbeille')->name('corbeilleParametre');
            Route::post('recupparametre', 'App\Http\Controllers\ParametreController@recupUnCorbeille')->name('recupParametre');
        // CREUD FIN
    // PARAMETRE FIN
//PARAMETRAGES FIN
//PRODUIT DEBUT
// CHEMIN DES PAGES DEBUT
Route::get('adminproduit', 'App\Http\Controllers\ProduitController@index');
Route::get('adminproduitCorbeille', 'App\Http\Controllers\ProduitController@indexCorbeille');
//CHEMIN DES PAGE FIN
//CHEMIN FUNCTION DEBUT
    Route::get('deleteAllproduit', 'App\Http\Controllers\ProduitController@destroyTous')->name('deleteAllproduit');
    Route::get('corbeilleAllproduit', 'App\Http\Controllers\ProduitController@corbeilleTous')->name('corbeilleAllproduit');
    Route::get('recupAllproduit', 'App\Http\Controllers\ProduitController@recupTousCorbeille')->name('recupAllproduit');

//CHEMIN FUNCTION FIN
//FONCTIONS DEBUT
Route::post('ajouterproduit', 'App\Http\Controllers\ProduitController@store')->name('ajouterProduit');
Route::post('modifierproduit', 'App\Http\Controllers\ProduitController@update')->name('modifierProduit');
Route::post('supprimerProduit', 'App\Http\Controllers\ProduitController@destroy')->name('supprimerProduit');
Route::post('corbeilleproduit', 'App\Http\Controllers\ProduitController@corbeille')->name('corbeilleProduit');
Route::post('recupproduit', 'App\Http\Controllers\ProduitController@recupUnCorbeille')->name('recupProduit');
// FONCTION FIN
Route::get('/mettrefavori/{id}', 'App\Http\Controllers\ProduitController@changefavori')->name('mettrefavori');
Route::get('/retirerfavori/{id}', 'App\Http\Controllers\ProduitController@changenormal')->name('retirerfavori');
Route::get('/mettreaffiche/{id}', 'App\Http\Controllers\ProduitController@changevue')->name('mettreaffiche');
Route::get('/retireraffiche/{id}', 'App\Http\Controllers\ProduitController@changenormalvue')->name('retireraffiche');

//PRODUIT FIN produiAcceuilSite
// ADMN FN

// SITES DE BUT
    //
        Route::get('/produitaffiches', 'App\Http\Controllers\RouteController@produitaffiches');
        Route::get('/detailproduit/{id}', 'App\Http\Controllers\RouteController@detail');
        Route::get('/allmyproducts', 'App\Http\Controllers\RouteController@allproduitclients')->name('ALLMYPRODUCTS');
        Route::get('categorieproduit/{id}', 'App\Http\Controllers\RouteController@categhorieproduitclient')->name('CATEGORIPRODUITCLIENT');
        Route::get('/leprofilclient', 'App\Http\Controllers\RouteController@clientcomptes')->name('PROFILCLIENT');
        // lkes
        Route::get('/like/{id}', 'App\Http\Controllers\LikeController@like')->name('LikeProduit');

        Route::post('like/{id}', 'App\Http\Controllers\RouteController@postlike')->name('likeProduit');
        // fn
        // les favoris du client
        Route::get('/favoriduclient', 'App\Http\Controllers\RouteController@favoriclients')->name('FAVORIDUCLIENT');
        // Retirer des favori du client
        Route::get('/retirerfavoriclients/{id}', 'App\Http\Controllers\RouteController@retirerfavoriclients')->name('RETIRERFAVORIDUCLIENT');
        //le index du panier
        Route::get('/clientcards', 'App\Http\Controllers\RouteController@cards')->name('CARDS');
        Route::get('/clientpayements', 'App\Http\Controllers\RouteController@payement')->name('PAYEMENTCLIENT');
        // Ajouter au panier
        Route::post('/ajouterpanier/{id}', 'App\Http\Controllers\PanierController@panier')->name('ajouterPanier');
        Route::post('/modifierpanier', 'App\Http\Controllers\PanierController@update')->name('modifierpanier');




        // retrer
        Route::get('/retirerpanierclients/{id}', 'App\Http\Controllers\RouteController@retirerpanierclients')->name('RETIRERPANIERDUCLIENT');


    //

    #########

// SITE FIN
