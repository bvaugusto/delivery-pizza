<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pizza extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are guarded.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['sabor', 'tamanho', 'valor'];

    /**
     * The attributes that are appends.
     *
     * @var array
     */
    protected $appends = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    public function getTamanhoPizza()
    {
        $tamanhos = collect([
            ['tamanho_id' => 1, 'description' => 'Pequena'],
            ['tamanho_id' => 2, 'description' => 'Média'],
            ['tamanho_id' => 3, 'description' => 'Grande'],
            ['tamanho_id' => 4, 'description' => 'Gigante']
        ]);

        return $tamanhos;
    }

    public function itemPedido()
    {
        return $this->hasMany(ItemPedido::class);
    }
}
