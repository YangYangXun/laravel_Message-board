<?php

use App\Message ;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', function () {




    return redirect()->route('index');

//    return view('welcome');
});


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| 前台
*/


//Route::get('/index', function () {
//    return view('index');
//})->name('index');
Route::get('/index', 'Messagecontroller@select')->name('index');

Route::get('/announce', function () {
    return view('announce');
})->name('announce');


Route::post('/announce/data_insert','Messagecontroller@dataInsert')->name('announce.insert');



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| 後台
*/

Route::group(['middleware' => 'IsAdmin'], function () {

Route::prefix('admin')->group(function ()
{
    Route::get('index', function ()
    {
        // 網�??/admin/index
        return view('admin.index');

    })->name('admin.index');

    Route::get('data', 'Messagecontroller@dataSelect')->name('admin.data');

    Route::get('edit/{id}', 'Messagecontroller@dataEdit')->name('admin.edit');
    Route::put('edit/{id}', 'Messagecontroller@dataUpdate')->name('admin.update');
    Route::get('edit/delete/{id}', 'Messagecontroller@dataConfirmDelete')->name('admin.confirm_delete');
    Route::delete('edit/delete/{id}', 'Messagecontroller@dataDelete')->name('admin.delete');


});

});




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| O R M
*/



Route::get('/find', function () {

    //return all data
//    $message = Message::all();
    // find(id)
    $message = Message::find(1);
    echo $message->content;

//    foreach ($message as $messages){
//         echo $messages;
//    }
});

//Route::get('/controller_test', 'Messagecontroller@select');


// Route::resource('data/messages','MessageController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Middleware test
*/

//apply middleware to this route
Route::get('/admin/user/roles', ['middleware'=>'role',function () {


    return "Hello";

}]);
