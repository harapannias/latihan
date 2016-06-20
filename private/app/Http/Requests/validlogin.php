<?php  
namespace App\Http\Request;
use App\Http\Requests\Request;

/**
* 
*/
class validlogin extends Request
{
	
	public function authorize(){
		return true;
	}

	public function rules(){
		return [
		'username'=>'email|required',
		'password'=>'required'
		];
	}

	public function messages(){
		return [
			'username.required' => 'Harus mengisi username',
			'username.email' => 'Format bukan email',
			'password.required' => 'Harus mengisi password'

		];
	}
}