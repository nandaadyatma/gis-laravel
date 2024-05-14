<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login', [
            'title' => "Login",
        ]);
        
    }


    public function login(Request $request)
    {
        $response = Http::post('http://api_2105551035.local.net/api/login', [
            'email' => $request->email,
            'password' => $request->password,
        ]);

        if ($response->successful()) {

            if($response->json()['success'] == true){
                session([
                    'token' => $response->json()['data']['token'],
                    'name' => $response->json()['data']['user']['name'],

            ]); 

                return redirect()->route('home');
            } else {
                $errorMessage = json_decode($response->body(), true)['message'];
                return back()->withErrors(['errors' => $response->json()['message']]);
            }
            
        }
        
        $errorMessage = json_decode($response->body(), true)['message'];
        return back()->withErrors(['errors' => $errorMessage]);
    }

    public function showRegisterForm()
    {
        return view('register',[
            "title" => "Register",
        ]);
    }

    public function register(Request $request)
    {
        $response = Http::post('http://api_2105551035.local.net/api/register', [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        $data = json_decode($response->body(), true);

        if ($response->successful()) {

            if(isset($data['success'])) {

                if($response->json()['success'] == true){
                    return redirect()->route('login')->with('status', 'User created successfully. Please login.');
                }
            }
            else {
                $errorEmail = "";
                $errorName = "";
                $errorPassword = "";

                if(isset($data['error']['email'])){
                    $errorEmail = json_decode($response->body(), true)['error']['email'][0];
                }

                if(isset($data['error']['name'])){
                    $errorName = json_decode($response->body(), true)['error']['name'][0];
                }

                if(isset($data['error']['password'])){   
                    $errorPassword = json_decode($response->body(), true)['error']['password'][0];
                }
                $errorMessage = $errorEmail . ", " . $errorName . ", " . $errorPassword;
                return back()->withErrors(['errors' => $errorMessage]);
            }
            
            
        }
        $errorEmail = "";
        $errorName = "";
        $errorPassword = "";

        if(isset($data['error']['email'])){
            $errorEmail = json_decode($response->body(), true)['error']['email'][0];
        }

        if(isset($data['error']['name'])){
            $errorName = json_decode($response->body(), true)['error']['name'][0];
        }

        if(isset($data['error']['password'])){   
            $errorPassword = json_decode($response->body(), true)['error']['password'][0];
        }
        
        $errorMessage = $errorEmail . ", " . $errorName . ", " . $errorPassword;
        return back()->withErrors(['errors' => $errorMessage]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->flush();
        return redirect()->route('login');
    }
}
