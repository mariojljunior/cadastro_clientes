<?php

namespace App\Http\Controllers;

use App\Models\Endereco;
use Illuminate\Http\Request;

class EnderecosController extends Controller
{
    private $endereco;

    /**
     * @return void
     */
    public function __construct(Endereco $endereco)
    {
        $this->endereco = $endereco;
    }

    public function index()
    {
        return $this->endereco;
    }

    public function show($endereco)
    {
        return $this->endereco->findOrFail($endereco);
    }

    public function store(Request $request)
    {
        $this->endereco->create($request->all());

        //mensagem de criação...
        return response()
                    ->json(['data' => [
                                'message' => 'Endereço foi criado com sucesso!']
                           ]);
    }

    public function update($endereco, Request $request)
    {
        $endereco = $this->endereco->find($endereco);

        $endereco->update($request->all());

        return response()
            ->json([
                'data' => [
                    'message' => 'Endereço foi atualizado com sucesso!'
                ]
            ]);
    }


    public function destroy($endereco)
    {
        $endereco = $this->endereco->find($endereco);

        $endereco->delete();

        return response()
            ->json([
                'data' => [
                    'message' => 'Endereço foi removido com sucesso!'
                ]
            ]);
    }
}
