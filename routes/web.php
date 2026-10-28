<?php

use App\Http\Controllers\ComputeController;
use App\Http\Controllers\CreateController;
use Illuminate\Support\Facades\Route;


Route::get('/', [CreateController::class, 'welcome']);

Route::get('user/welcome', [CreateController::class, 'userWelcome']);

Route::get('/sample', [CreateController::class, 'sample'])->name('Home');

Route::fallback([CreateController::class, 'fallback']);

Route::get('/dashboard', [CreateController::class, 'dashboard']);

Route::get('user/edit/{id}', [CreateController::class, 'edit'])->name('userEdit');

Route::get('/update', [CreateController::class, 'index']);

Route::get('/create', [CreateController::class, 'index']);

Route::get('/assignment1', [CreateController::class, 'assignment1']);

Route::get('/practice', [CreateController::class, 'practice']);

Route::get('/calculate', [ComputeController::class, 'index']);
Route::post('/calculate', [ComputeController::class, 'compute'])->name('calculate.submit');


















// return view('users.edit', ['id'=>$id]); //key value pair (variable)
   //return view('users.edit', ['studentid'=>$id]); //pwede i-customize yung name
   //return view('users.edit', compact('id'));
//another way magpasa ng parameter from backend to frontend. Recommended ang compact
   //return view('users.edit', compact('id'));

//Route::get('/assignment', function(){
   // return view('users.assignment');
//});


/*Route::get('/user', function(){
    return "<a href ='".route('userEdit', 123)."'> User Page</a>";

});

Route::get('/user/edit/{id}', function($id){
    return "Edit User " .$id;
})->name('userEdit');

*/

/*

Route::get('/greetings', function(){
    return "Hello User";
});

Route::group(['prefix' => 'user'], function(){
    Route::get('/{username}', function($username){
    return "<a href= '".route('userId', $username)."'>User Page</a>";
});

    Route::get('/modify/{username}', function($username){
        return "Hi " .$username;
    })->name('userId');
});

*/


/*oute::fallback(function(){
    return "<marquee>
                <img src='". asset('images/warning-icon.jpg') ."' alt='Error' title='Error' width='150'>
                <br>
                    <h3>There is something wrong</h3>
            </marquee>
    ";
}); */






