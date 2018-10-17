<?php

use Illuminate\Http\Request;
use App\PhoneBookModel;

Route::get('/', function () {
    $tasks =PhoneBookModel::get();
    return view('tasks',[
        'tasks'=>$tasks
    ]);
});

Route::post('/task',function (Request $request){
    $validator = Validator::make($request->all(),[
        'name'=>'required|max:255',
        'phone'=>'required|max:255'
    ]);
    if($validator->fails()){
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }
    $task = new PhoneBookModel;
    $task->name = $request->name;
    $task->phone = $request->phone;
    $task->save();
    return redirect('/');
});
Route::delete('/task/{task}', function (PhoneBookModel $task){
   $task->delete();
   return redirect('/');
});


//Route::put('api/users/{id}', 'PhoneBookController@update');

//Route::get('api/users/search/{name}','PhoneBookController@search');

//Route::resource('api/users','PhoneBookController');
