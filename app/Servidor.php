<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Servidor extends Model {

	protected $table = 'pmieducar.servidor';
	protected $timestamps = false;
	protected $fillable = array('cod_servidor', 'valor', 'descricao', 'quantidade');

}
