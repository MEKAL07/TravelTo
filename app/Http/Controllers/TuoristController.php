<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Model\TUsuario;
use Illuminate\Session\SessionManager;
use Illuminate\Encryption\Encrypter;
/**
* 
*/
class TuoristController extends Controller
{
	
	public function actionRegister(Request $request, SessionManager $sessionManager, Encrypter $encrypter) 
	{
		if ($_POST) {
			try {  //
				DB::beginTransaction();

				$tusurio=TUsuario::whereRaw('email=?',[trim($request->input('txtEmail'))])->first();
				if ($tUsuario!=null) {
					$sessionManager->flash('mensajeAlerta', 'el correo ya está utilizado');
					$sessionManager->flash('color',env('COLOR_ERROR'));
					return redirect('/turista/register');
				}

				$tUsuario= new TUsuario();

				$tUsuario->nombre=$request->input('txtNombre');
				$tUsuario->apellidos=$request->input('txtApellidos');
				$tUsuario->email=$request->input('txtEmail');
				$tUsuario->password=$encrypter->encrypt($request->input('txtPassword'));
				$tUsuario->avantarExtension='';
				//var fechanamiento='fechaAnio'+"-"+'mes'+"-"+'fechaNacimiento';
				$tUsuario->fechaNacimineto=$request->input('fechaNacimiento1');

				$tUsuario->pais=$request->input('txtPais');
				$tUsuario->celular=$request->input('txtCelular');
				$tUsuario->sexo=$request->input('textSexo');
				$tUsuario->fechaRegistro=date('Y-m-d H:m:s');
				$tUsuario->fechaModificacion=date('Y-m-d H:m:s');

				

				$tUsuario->save();

				$tUsuariotemp=TUsuario::whereRaw('idUsuario=(select max(idUsuario) from tusuario)')->first();

				if($request->hashFile('fileAvatar'))
				{
					$avatarOriginalUser=strtolower($request->file('fileAvatar')->getfileOriginal());
					$tUsuariotemp->avantarExtension=$avatarOriginalUser;
					$tUsuariotemp->save();
					$request->file('fileAvatar')->move(public_path().'/img/avatar',$tUsuariotemp->idUsuario.'.'.$avatarOriginalUser);
				}

				DB::commit();
				$sessionManager->flash('mensajeAlerta', 'Se Registró Correctamente');
				$sessionManager->flash('color',env('COLOR_CORRECTO'));

			} catch (Exception $e) {
				//+"-"+'mes'+"-"+'fechaNacimiento'
				DB::rollback();
				$sessionManager->flash('mensajeAlerta', 'Error no Controlado');
				$sessionManager->flash('color',env('COLOR_ERROR'));
			}

				

			

			
			return redirect('/turista/register');
		}
		return view('turista/register');
	}

	public function actionVer(){
		$listaTUsuario=TUsuario::all();
		return view('turista/ver',['listaTUsuario'=>$listaTUsuario]);
	}

	public function ActionDelete($idUsuario){

		$tUsuario=TUsuario::find($idUsuario);

		if($tUsuario!=null)
		{
			$tUsuario->delete();
		}

		return redirect('/turista/ver');
	}

	public function actionUpdate(Request $request, $idUsuario=null){
		if ($_POST) {
			# code...
			$tusurio=TUsuario::whereRaw('email=?',[trim($request->input('txtEmail'))])->first();
			if ($tusurio!=null) {
					/*$sessionManager->flash('mensajeCorreoError', 'correo ya utilizado');
					$sessionManager->flash('color',env('Color_Error'));*/
				return redirect('/turista/editar');
			}

			$tUsuario =  TUsuario::find($request->input('hideUsuario'));

			$tUsuario->nombre=$request->input('txtNombre');
			$tUsuario->apellidos=$request->input('txtApellidos');
			$tUsuario->email=$request->input('txtEmail');
			$tUsuario->avantarExtension='';
			$tUsuario->fechaNacimineto=$request->input('fechaAnio'+"-"+'mes'+"-"+'fechaNacimiento');
			$tUsuario->pais=$request->input('txtPais');
			$tUsuario->celular=$request->input('txtCelular');
			$tUsuario->sexo=$request->input('textSexo');
			$tUsuario->fechaModificacion=date('Y-m-d H:m:s');

			$tUsuario->save();

			
			return redirect('/turista/ver');
		}

		$tUsuario=TUsuario::find($idUsuario);

		if($tUsuario==null)
		{
			return redirect('/turista/ver');
		}

		return view('turista/editar', ['tUsuario'=> $tUsuario]);
	}

	/*filtro con el correo electronico: INICIO DE SESION*/
	public function actionLoggin(Request $request, SessionManager $sessionManager, Encrypter $encrypter)
	{
		$tUsuario=TUsuario::whereRaw('email=?',[$request->input('txtEmailLogin')])->first();

		if($tUsuario==null)
		{
			$sessionManager->flash('mensajeAlerta', 'Datos Incorrectos');
			$sessionManager->flash('color',env('COLOR_ERROR'));
			return redirect('/index/index');
		}

		/*desincriptando la contraseña*/

		if($encrypter->decrypt($tUsuario->password)!=$request->input('txtPasswordLogin'))
		{
			$sessionManager->flash('mensajeAlerta', 'Datos Incorrectos');
			$sessionManager->flash('color',env('COLOR_ERROR'));
			return redirect('/index/index');
		}


		$sessionManager->put('idUsuario', $tUsuario->idUsuario);
		$sessionManager->put('email', $tUsuario->email);
		$sessionManager->put('nombre', $tUsuario->nombre);
		$sessionManager->put('avantarExtension', $tUsuario->avantarExtension);

		/*Mail::send('mail.avisologin', ['fechaActual'=>date('Y-m-d H:m:s')], function($x)
		{
			$x->from('kaaf030191@gmail.com', 'codideep.com');
			$x->to('kaaf030191@gmail.com', 'Kevin Arnold Arias Figueroa')->subject('Mensaje de prueba');

		});*/


		$sessionManager->flash('mensajeAlerta', 'bienvenido a la Web');
		$sessionManager->flash('color',env('COLOR_CORRECTO'));
		return redirect('/index/index');
	}

	/*CERRAR SESSION*/

	public function actionLogOut(SessionManager $sessionManager)
	{
		$sessionManager->flush();
		return redirect('/index/index');
	}

}
?>