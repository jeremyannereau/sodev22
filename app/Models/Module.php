<?php

namespace App\Models;

use App\Models\Action;
use App\Models\Projet;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Module extends Model
{
    use HasFactory;

    public function projets()
    {
        return $this->belongsToMany(Projet::class);
    }

    public function actions()
    {
        return $this->belongsToMany(Action::class);
    }
}
