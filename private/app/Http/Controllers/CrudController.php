<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\validasilogin;
use App\Http\Requests\validasiregister;
use App\Http\Requests\validasitambah;
use App\Http\Requests;
use Auth;
use Input;
use DB;
use View;
use Redirect;

class CrudController extends Controller
{
    /* fungsi tambahdata*/
    function tambahdata(validasitambah $data){
        $nama = $data->nama;
        $alamat = $data->alamat;
        $kelas = $data->kelas;

    	$data = array(
    		'nama' => $nama,
    		'alamat' => $alamat,
    		'kelas' => $kelas,
    		);

    	DB::table('siswa')->insert($data);
    	return Redirect::to('/read')->with('message', 'Berhasil menambah data.');
    }

    function lihatdata(){
    	$data = DB::table('siswa')->get();
    	return View::make('read')->with('siswa', $data);
    }

    function hapusdata($id){
    	DB::table('siswa')->where('id','=',$id)->delete();
    	return Redirect::to('/read')->with('message', 'Berhasil menghapus data.');
    }

    function editdata($id){
    	$data = DB::table('siswa')->where('id','=',$id)->first();
    	return View::make('form_edit')->with('siswa', $data);
    }

    function proseseditdata(){
    	$data = array(
    		'nama' => Input::get('nama'),
    		'alamat' => Input::get('alamat'),
    		'kelas' => Input::get('kelas'),
    		);

    	DB::table('siswa')->where('id','=', Input::get('id'))->update($data);
    	return Redirect::to('read')->with('message', 'Berhasil mengedit data.');
    }

    public function login(validasilogin $validasi)
    {
        if(Auth::attempt(['username' => Input::get('username'), 'password' => Input::get('password')]))
        {
            if(Auth::user()->level=="0")
            {
                return Redirect::to('');
            }
            else
            {
                return Redirect::to('user');
            }
        }
        else
        {
            echo "gagal login";
        }
    }

    public function tambahlogin(validasiregister $data){
        $data = array(
            'username' => Input::get('username'),
            'password' => bcrypt(Input::get('password')),
            'hak_akses' => 'user'
            );
        DB::table('login')->insert($data);
        return Redirect::to('/login')->with('message', 'Berhasil mendaftar.');
    }

    public function logout(){
        Auth::logout();
        return Redirect::to('login')->with('message', 'Berhasil logout !');
    }

}
