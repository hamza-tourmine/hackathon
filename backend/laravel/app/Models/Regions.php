<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regions extends Model
{
    use HasFactory;
    public $table = 'roles';
    protected $primaryKey = 'id';
    protected $fillable = [
        'updated_at' ,
        'created_at' ,
        'guard_name'  ,
        'name'  ,
    ];

}
