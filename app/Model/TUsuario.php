<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class TUsuario extends Model
{
	protected $table='tusuario';
	protected $primarykey='idUsuario';
	public $incrementing=true;
	public $timestamps=false;
	
	
}
?>