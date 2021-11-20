<?php

namespace App\Models;

use App\Models\Action;
use App\Models\Module;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Projet extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'projectName',
        'logoChemin',
        'baseSerial',
        'serveur'
    ];

    public function actions()
    {
        return  $this->hasMany(Action::class);
    }

    public function modules()
    {
        return $this->belongsToMany(Module::class);
    }


}
