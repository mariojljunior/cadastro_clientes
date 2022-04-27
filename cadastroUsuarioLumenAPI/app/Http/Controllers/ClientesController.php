<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    private $cliente;

    /**
     * @return void
     */
    public function __construct(Cliente $cliente)
    {
        $this->cliente = $cliente;
    }

    public function index()
    {
        return $this->cliente;
    }

    public function show($cliente)
    {
        return $this->cliente->findOrFail($cliente);
    }

    public function store(Request $request)
    {
        $this->cliente->create($request->all());

        //mensagem de criação...
        return response()
                    ->json(['data' => [
                                'message' => 'Cliente foi criado com sucesso!']
                           ]);
    }

    public function update($cliente, Request $request)
    {
        $cliente = $this->cliente->find($cliente);

        $cliente->update($request->all());

        return response()
            ->json([
                'data' => [
                    'message' => 'Cliente foi atualizado com sucesso!'
                ]
            ]);
    }


    public function destroy($cliente)
    {
        $cliente = $this->cliente->find($cliente);

        $cliente->delete();

        return response()
            ->json([
                'data' => [
                    'message' => 'Cliente foi removido com sucesso!'
                ]
            ]);
    }

}
