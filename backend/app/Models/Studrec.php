<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Studrec extends Model
{
    protected $table = 'studrec'; // Explicitly set the table name

    protected $primaryKey = 'studID'; // Set the primary key

    public $incrementing = false; // Tell Laravel the primary key is not auto-incrementing

    protected $keyType = 'string'; // Specify the type of the primary key if it’s not an integer

    protected $fillable = ['lname', 'fname', 'mname', 'gender', 'status', 'password']; // Include any other fillable fields


    public function role()
{
    return $this->belongsTo(Role::class, 'role_id');
}

}
