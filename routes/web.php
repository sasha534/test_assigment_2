<?php

use Illuminate\Http\Request;
use App\PhoneBookModel;

Route::get('/', function () {return redirect('/api/users/');
});

Route::prefix('api')->group(function () {


Route::get('users/','PhoneBookController@index');

Route::delete('/users/{id}','PhoneBookController@destroy');

Route::get('users/search/{name}','PhoneBookController@search');

Route::get('users/{id}', 'PhoneBookController@show');

Route::post('users/{id}', 'PhoneBookController@update')->name('users.update');
/*
Route::put('api/users/{id}', function (Request $request, $id){

    $phone_book_user = new PhoneBookModel;
    $phone_book_user->name = 'xxxx';
    $phone_book_user->phone = '1234567890';
    $phone_book_user->save();
    return redirect('/api/users/');
});
*/
Route::post('/users',function (Request $request){
    $validator = Validator::make($request->all(),[
        'name'=>'required|max:255',
        'phone'=>'required|max:255'
    ]);
    if($validator->fails()){
        return redirect('/api/users/')
            ->withInput()
            ->withErrors($validator);
    }
    $phone_book_user = new PhoneBookModel;
    $phone_book_user->name = $request->name;
    $phone_book_user->phone = $request->phone;
    $phone_book_user->save();
    return redirect('/api/users/');
});

});
//Route::resource('api/users','PhoneBookController');
