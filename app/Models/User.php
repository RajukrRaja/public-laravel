<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Str;


class User extends Authenticatable{

use HasFactory;

//mass field 
protected $fillable =[
      'name',
        'email',
        'password',
        'role',
        'api_token',
];

//hidden field 
protected $hidden = [

        'password',
        'remember_token',
        'api_token',

];

//type casting
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

//auto hashed password
    public function setPasswordAttribute($value){
        $this->attribute['password'] = bcrypt($value);
    }


    //generate api token 
    public function generateToken(){

    $this->api_token = str::random(60);
    $this->save();

    return $this->api_token;

    }

    //check user role 
    public function hasRolr($role){
        return $this->role ===  $role;
    }



}


?>