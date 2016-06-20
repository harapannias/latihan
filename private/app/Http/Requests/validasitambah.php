<?php 
namespace App\Http\Request;
use App\Http\Requests\request;

/**
* 
*/
class Validasitambah extends Request
{
	
	public function authorize(){
		return true;
	}

	public function rules(){
		return [
		'nama'=>'required',
		'alamat'=>'required',
		'kelas'=>'required',
		];
	}

	public function messages(){
		return [
		'nama.required' => 'Harus mengisi nama.',
		'alamat.required' => 'Harus mengisi alamat',
		'kelas.required' => 'Harus mengisi kelas',
		];
	}
}