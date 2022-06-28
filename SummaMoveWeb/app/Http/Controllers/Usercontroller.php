<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

use function PHPUnit\Framework\isEmpty;

class Usercontroller extends Controller
{
    function login(Request $req) {

            
            $user = Http::post('http://project5.dotwood.media/api/login', [
                        'email' => $req->email,
                        'password' => $req->password,

                    ])->json();

                    if (array_key_exists("message", $user)) {
                        $message = "<h3 class='text-red-600'>ingevoerde gegevens niet correct</h3><br><a href='/login'>Ga Terug</a>";
                        return  $message;
                    }
                    else {
                        $req->session()->put('user', $user);
                        return view('Homepage');            
                    } 

    }
    // function register(Request $req) {
    //     $user = new User;
    //     $user ->username=$req->username;
    //     $user ->email=$req->email;
    //     $user ->password=Hash::make($req->password);
    //     $user ->voornaam = "";
    //     $user ->achternaam = "";
    //     $user ->address = "";
    //     $user ->postcode = "";
    //     $user ->save();
    //     return redirect('login');
    // }
    // function getUserData() {
    //     if (session()->has('user')) {
    //     $userId=Session::get('user')['id'];
    //     $accountInfo = DB::table('users')
    //     ->where('id', $userId)
    //     ->get();
    //     return view('account', ['accountInfo' => $accountInfo]);
    //     }
    //     else {
    //         return view('login');
    //     }
    // }
    // function getuserpassword(Request $req) {
    //     $userId=Session::get('user')['id'];
    //     $user = User::where(['id' => $userId])->first();
    //     if (!$user || !Hash::check($req->password, $user->password)) 
    //     {
    //         return "username or password is not matched";
    //     }
    //     else {
    //         $req->session()->put('user', $user);
    //         return redirect("/");
    //     }
    // }

    // public function update(User $user, Request $req){
    //     $userId=Session::get('user')['id'];
    //     $username = $req->input('username');
    //     $email = $req->input('email');
    //     $voornaam = $req->input('voornaam');
    //     $achternaam = $req->input('achternaam');
    //     $address = $req->input('address');
    //     $postcode = $req->input('postcode');

    //     DB::update('update users set username = ?, email = ?, voornaam = ?, achternaam = ?, address = ?, postcode = ? where id = ?', [$username, $email, $voornaam, $achternaam, $address, $postcode, $userId ]);
    //     return redirect('/account');

    // }
}
