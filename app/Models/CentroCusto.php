<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

// models
use app\models\{tipo};

class CentroCusto extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'centro_custo';
    protected $primaryKey = 'id_centro_custo';
    protected $dates = ['created_at',
                         'update_at',
                         'deleted_at'
                         ];
    protected $fillable =['id_tipo','centro_custo'];
    
    //------------------ relacionamentos ---------------- //
    // https://laravel.com/docs/9.x/eloquent-relationships#main-content
   
    // 19-09-2022
    public function tipo()
    {
        return $this->belongsTo(tipo::class,'id_tipo','id_tipo');
    }
}
