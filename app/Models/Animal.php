<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['feedlot_id','breed_id','name','tag','sex','age','entry_weight','exit_weight','initial_animal_image','current_animal_image','brief_history'
    ];
}
