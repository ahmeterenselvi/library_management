<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;  //Add this line for Auth.

class Student extends Authenticatable   
{
    protected $fillable = ['name', 'student_number', 'email', 'phone','password','image'];
    use HasFactory;
}
