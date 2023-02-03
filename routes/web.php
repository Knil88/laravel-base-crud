<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaintsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
                //---HOME---//

Route::get('/',  [SaintsController::class,'home'])-> name('home');


                //---SHOW---//

Route::get('/saints/{id}',[SaintsController::class,'show']);

                //---DESTROY---//

 Route :: get('/saint/destroy/{id}', [SaintsController :: class, 'saintDestroy'])  -> name('saint.destroy');

               // --- CREATE
Route :: get('/saint/create', [SaintsController :: class, 'saintCreate'])-> name('saint.create');

Route :: post('/saint/store', [SaintsController :: class, 'saintStore'])-> name('saint.store');
            

