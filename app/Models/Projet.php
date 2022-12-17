<?php

namespace App\Models;

use App\Models\Action;
use App\Models\Module;
use App\Models\Passation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use phpDocumentor\Reflection\Types\This;

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

    public function getPassation()
    {

        $passation = $this->hasOne(Passation::class);
        
        if (!$passation){
            return;
        }else{
            return $passation;
        }

    }
}
