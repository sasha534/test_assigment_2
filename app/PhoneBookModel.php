<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhoneBookModel extends Model
{
    //
    protected $table ='phone_book_users';
    protected $fillable = ['name','phone'];
}
