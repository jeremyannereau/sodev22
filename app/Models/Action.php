<?php

namespace App\Models;

use App\Models\Module;
use App\Models\Projet;
use Kyslik\ColumnSortable\Sortable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Action extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Sortable;

    public $sortable = ['module_id','projet_id','updated_id','created_at','content'];

    public function projet()
    {

        return  $this->belongsTo(Projet::class);
    }

    public function module()
    {
        return  $this->belongsTo(Module::class);
    }


}
