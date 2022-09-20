<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

// Models
use app\models\{
    CentroCusto,User
};
class Lancamento extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'lancamento';
    protected $primaryKey = 'id_lancamento';
    protected $dates = ['created_at',
                         'update_at',
                         'deleted_at',
                         'dt_faturamento'
                         ];
    protected $fillable = [
                            'id_user',
                            'id_centro_custo',
                            'descricao',
                            'observacoes'
                          ];


        // relacionamentos
        public function usuario()
        {
            return $this->belongsTo(user::class,'id_user','id_user');
        }
        public function centroCrusto()
        {
            return $this->belongsTo(CentroCusto::class,'id_centro_custo','id_centro_custo');
        }
}
