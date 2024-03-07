<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index() {
        $user = UserModel::create(
            [
                'username' => 'manager11',
                'nama' => 'Manager11',
                'password' => Hash::make('12345'),
                'level_id' => 2
            ],
        );
        $user->username = 'manager12';

        $user->save();

        $user->wasChanged();
        $user->wasChanged('username');
        $user->wasChanged(['username','level_id']);
        $user->wasChanged('nama');
        $user->wasChanged('nama','username');
        dd($user->wasChanged(['nama','username']));

    }
}

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

    