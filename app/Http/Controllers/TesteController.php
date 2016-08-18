<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class TesteController extends Controller {

	public function lista()
	{
		$turnos = DB::select('select * from pmieducar.turma_turno');
		return view('teste')->with('turnos', $turnos);
	}

}
