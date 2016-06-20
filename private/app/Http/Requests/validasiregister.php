<?php  

namespace App\Http\Request;
use App\Http\Requests\request;

/**
* 
*/
class Validasiregister extends Request{
	
	public function authorize(){
		return true;
	}

	public function rules(){
		return [
		'username' => 'email | required',
		'password' => 'required',
		];
	}
	public function messages(){
		return [
		'username.required' => 'Harus mengisi email.',
		'username.email' => 'Format bukan email.',
		'password.required' => 'Harus mengisi password.',
		];
	}
}