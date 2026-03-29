<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function login()
    {
        return view('login');
    }

    public function loginSubmit(Request $request)
    {
           $request->validate([
            'text_email' => 'required|email',
            'text_password' => 'required|min:6|max:16',
        ],
        [
            'text_email.required' => 'E-mail é obrigatório',
            'text_email.email' => 'E-mail precisa ser um email válido',
            'text_password.required' => 'Password é obrigatório',
            'text_password.min' => 'Password deve ter pelo menos 6 caracteres',
            'text_password.max' => 'Password não deve exceder 16 caracteres',
        ]);

        $useremail = $request->input('text_email');
        $password = $request->input('text_password');

        $user = User::where('email', $useremail)
                    ->where('deleted_at', NULL)
                    ->first();

        if(!$user){
            return redirect()
                ->back()
                ->withInput()
                ->with('loginError', 'Credenciais invalidas');
        }

        if(!password_verify($password, $user->password)){
            return redirect()
                ->back()
                ->withInput()
                ->with('loginError', 'Credenciais invalidas');
        }

        $user->last_login = date('Y-m-d H:i:s');
        $user->save();

        session([
            'user' => [
                'id' => $user->id,
                'name' => $user->name,
            ]
        ]);
        return redirect()->to('/');
    }

     public function logout()
    {
        session()->forget('user');
        return redirect()->to('/login');
    }
}
