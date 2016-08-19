<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ServidorController extends Controller {

	public function lista()
	{
		$servidores = DB::select('select cod_servidor, nome, tipo, situacao
								    from pmieducar.servidor
								   inner join cadastro.pessoa on (pessoa.idpes = servidor.cod_servidor)
								   where servidor.ativo = 1');
		return view('servidor')->with('servidores', $servidores);
	}

}
