<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\SearchController;

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
Route::get('results',[TestController::class,'userResults'])->name('userResults'); 

Route::post('/test.practical',[TestController::class,'testPractical'])->name('testPractical'); 

Route::get('/test.practical',[TestController::class,'practical'])->name('practical');

Route::get('/test.verify',[TestController::class,'testVerify'])->name('testVerify');

Route::post('/test.verify', [TestController::class,'pTest'])->name('pTest');   

Route::view('/prac','prac');  



Route::view('/userDetails','userDetails');

Route::view('/user_data','user_data'); 

Route::view('/devicespecs','devicespecs')->name('devicespecs'); 



Route::post('/search',[SearchController::class,'search'])->name('search');

Route::post('/userSearch',[SearchController::class,'userSearch'])->name('userSearch');



Route::post('/test.results',[TestController::class,'uploadResults'])->name('uploadResults'); 

Route::get('/test.results',[TestController::class,'resuilts'])->name('resuilts');

Route::post('/test.test',[TestController::class,'theoryTest'])->name ('theoryTest'); 

Route::view('/test.test','test.test')->name('test');  





Route::get('/application',[TestController::class,'application'])->name('application'); 

Route::get('/userresuilts',[TestController::class,'userResults'])->name('userResults');    

Route::post('/application',[TestController::class,'applicationForm'])->name('applicationForm');

Route::view('/contractandterms','contractandterms')->name('contractandterms');   

Route::view('/contractAgreement','contractAgreement')->name('contractAgreement'); 

Route::view('/ContractAgreement','ContractAgreement')->name('ContractAgreement'); 

Route::view('/Contractagreement','Contractagreement')->name('Contractagreement'); 


//Route::view('/dashboardBook','dashboardBook');   

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
