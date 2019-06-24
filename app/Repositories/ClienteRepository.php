<?php

namespace App\Repositories;

use App\Cliente;
use App\EnderecoEntrega;
use App\Repositories\BaseRepository;

class ClienteRepository extends BaseRepository
{
    protected $modelClass;

    public function __construct()
    {
        $this->modelClass = Cliente::class;
        parent::__construct();
    }

    public function create(array $data)
    {
        $createCliente = parent::create($data);

        $arrayEndereco['cliente_id'] = $createCliente->id;
        $arrayEndereco['cep'] = $data['cep'];
        $arrayEndereco['logradouro'] = $data['logradouro'];
        $arrayEndereco['numero'] = $data['numero'];
        $arrayEndereco['complemento'] = $data['complemento'];
        $arrayEndereco['bairro'] = $data['bairro'];
        $arrayEndereco['cidade'] = $data['cidade'];

        return EnderecoEntrega::create($arrayEndereco);
    }
}
