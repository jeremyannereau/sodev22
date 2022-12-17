<?php

namespace App\Models;

use App\Models\Projet;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Passation extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'projet_id',
        'generalites',
        'client',
        'diabolo',
        'mikado',
        'cogito',
        'lasido',
        'jeudemo'

    ];

    public function projet(){
        return $this->belongsTo(Projet::class);
    }

}
