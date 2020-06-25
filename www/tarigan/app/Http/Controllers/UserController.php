<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TambahUser;
use App\Http\Requests\EditUser;
use App\Http\Requests\Profile;
use App\User;
use App\Dosen;
use Auth;
use Alert;
use App\BiodataMahasiswa;

class UserController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }        
    //Fungsi untuk memanggil form tambah mahasiswa
    public function addUser()
    {
        return view ('user.tambahUser');
    }
    //Fungsi untuk menyimpan tambah mahasiswa
    public function saveUser(TambahUser $request){

        $user = new User;

        $user->name = $request->name;
        $user->role = 'petugas';
        $user->email = $request->email;
        $user->password = bcrypt ('123456');
        $user->save();

        Alert::success('Pengguna Berhasil Ditambah', 'Sukses');
        return redirect('/tampil_user');
    }
    //Fungsi untuk menampilkan
    public function index()
    {
    	$data=User::where('role','=','petugas')->get();
    	return view ('user.tampilUser')->with('user',$data);
    }

    public function editUser($id)
    {
        $data= User::find($id);
        return view ('user.editUser')
        ->with('user',$data);
    }

    public function updateUser (EditUser $request, $id)
    {
        $user=User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
            Alert::success('Data Pengguna Berhasil Diubah', 'Sukses');
            return redirect('tampil_user');
    }

    public function deleteUser($id)
    {
        $user= User::findOrfail($id);
            $user -> delete();
            Alert::success('Data Pengguna berhasil dihapus', 'Sukses');
        return redirect('/tampil_user');
    }


    public function editProfile($id)
    {
        $data= User::find($id);
        return view ('user.profilAdmin')->with('user',$data);
    }

    public function updateProfile(EditUser $request,$id)
    {
        $data= User::find($id);

        $data->name = $request->name;
        $data->email = $request->email;
        if($request->password == ''){
        }
        else{
            $data->password = bcrypt ($request->password);
        }
        $data->save();
        Alert::success('Profil berhasil diubah', 'Sukses');
        return redirect('/login');
    }

    public function editProfilMahasiswa($id)
    {
        $data= User::find($id);
        return view ('user.profilMahasiswa')->with('user',$data);
    }



    public function resetPassword($id)
    {
        $data =User::find($id);
        $data->password=bcrypt('passwordbaru');
        $data->save();
        if($data->role == 'petugasbumdes'){
            Alert::success('Password telah berhasil direset, Password : passwordbaru', 'Sukses');
             return redirect('/tampil_petugas');
        } else {
            Alert::success('Password telah berhasil direset, Password : passwordbaru', 'Sukses');
             return redirect('/tampil_petugasToko');
         }
    }

}
