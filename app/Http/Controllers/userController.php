<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index() {
        $user = UserModel::all();
        return view('user', ['data' => $user]);
    }
    public function tambah()
    {
        return view('user_tambah');
    }
    public function tambah_simpan(request $request)
    {
        UserModel::create([
            'username' => $request->uername,
            'nama' => $request->nama,
            'password' => Hash::make('$request->password'),
            'level_id' => $request->level_id
        ]);
        
    }
    public function ubah($id)
    {
        $user = UserModel::find($id);
        return view('user_ubah', ['data' => $user]);
    }
    public function ubah_simpan($id, Request $request)
    {
        $user = UserModel::find($id);
        $user->username = $request->username;
        $user->nama = $request->nama;
        $user->password = Hash::make('$request->password'); 
        $user->level_id = $request->level_id;
        $user->save();
        return redirect('user');
    }
    public function hapus($id)
    {
        $user = UserModel::find($id);
        $user->delete();

        return redirect('/user');
    }
}

        //$user = UserModel::create(
        //    [
        //        'username' => 'manager11',
        //        'nama' => 'Manager11',
        //        'password' => Hash::make('12345'),
        //        'level_id' => 2
        //    ],
        //);
        //$user->username = 'manager12';

        //$user->save();

        //$user->wasChanged();
        //$user->wasChanged('username');
        //$user->wasChanged(['username','level_id']);
        //$user->wasChanged('nama');
        //$user->wasChanged('nama','username');
        //dd($user->wasChanged(['nama','username']));
        
        //$user = UserModel::where('level_id',2)->count();
        //return view('user', ['data' => $user]);

        //$data = [
        //    'username' => 'customer-1',
        //    'nama'=>'Pelanggan',
        //    'password' => Hash::make('12345'),
        //    'level_id' => 4
        //];
    
        //UserModel::insert($data);
    
        
        //$data =[
        //    'level_id' => 2,
        //    'username' =>'manager_tiga',
        //    'nama' => 'Manager 3',
        //    'password' => Hash::make('12345')
        //];
        //UserModel::create($data);

    