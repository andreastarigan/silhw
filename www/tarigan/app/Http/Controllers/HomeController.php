<?php

namespace App\Http\Controllers;
use App\User;
use App\Dosen;
use Auth;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
         
    public function showDBAdmin()
    {

        $x = Dosen::all()->count();
        $y = User::where('role','=','mahasiswa')->count();

        return view('homeAdmin')
        ->with('user', $x)
        ->with('user1', $y);
    }
   public function showDBDosen()
    {
        dd('dosen berhasil login,tampil dashboard');
    }
	
    public function showDBMahasiswa()
    {
        $x = User::where('role','=','dosen')->count();
        $y = User::where('role','=','mahasiswa')->count();

        return view('homeMahasiswa')
        ->with('user', $x)
        ->with('user1', $y);
    }
}
