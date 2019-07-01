<?php

namespace App\Repositories;

use App\Pedido;

class PedidoRepository extends BaseRepository
{
    protected $modelClass;

    /**
     * PedidoRepository constructor.
     */
    public function __construct()
    {
        $this->modelClass = Pedido::class;
        parent::__construct();
    }



}
