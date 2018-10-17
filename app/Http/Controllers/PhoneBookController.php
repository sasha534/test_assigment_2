<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PhoneBookModel;
use Illuminate\Validation\Validator;

class PhoneBookController extends Controller
{
    public function search($name)
    {
        $phone_book_users = PhoneBookModel::where('name',$name)->get();
        return view('api-users',[
            'phone_book_users'=>$phone_book_users
        ]);

       // dump($phone_book_users);



    }
    public function index()
    {
        $phone_book_users = PhoneBookModel::get();
        return view('api-users',[
            'phone_book_users'=>$phone_book_users
        ]);

    }
    public function show($id)
    {
        //echo __METHOD__;
        $phone_book_users = PhoneBookModel::where('id',$id)->get();
        return view('users-show',[
            'phone_book_users'=>$phone_book_users
        ]);

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'phone'=> 'required|integer'
        ]);

        $phone_book_user = PhoneBookModel::find($id);
        $phone_book_user->name = $request->get('name');
        $phone_book_user->phone = $request->get('phone');

        $phone_book_user->save();

        return redirect('/api/users/')->with('success', 'Stock has been updated');
        //$phone_book_user = PhoneBookModel::where('id',$id);
        //$phone_book_user->name = $request->name;
        //$phone_book_user->phone = $request->phone;
        //$phone_book_user->save();
        //$request->session()->flash('success','Well Done USER updated!');
        //return redirect('/api/users/');
    }

    public function destroy($id)
    {
        $phone_book_user = PhoneBookModel::where('id',$id)->delete();
        return redirect('/api/users/');
    }
}
