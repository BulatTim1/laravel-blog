<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function signup(){
        return view('signup');
    }

    public function signin(){
        return view('signin');
    }

    public function signupPost(Request $request){
        // dd($request->all());

        $validator = Validator::make($request->all(), [
            'username' => 'required|unique:users|min:3|max:50',
            'email' => 'required|email',
            'password' => 'required|min:6',
            're_password' => 'required|same:password'
        ]
        // , [
        //     'unique' => 'Этот :attribute уже занят',
        //     'required' => 'Поле :attribute обязательно для заполнения',
        //     'min' => 'Поле :attribute должно быть не менее :min символов',
        //     'max' => 'Поле :attribute должно быть не более :max символов',
        //     'email' => 'Поле :attribute должно быть корректным email адресом',
        //     'same' => 'Поле :attribute должно совпадать с полем :other'
        // ], [
        //     'username' => 'имя пользователя',
        //     'email' => 'почта',
        //     'password' => 'пароль',
        //     're_password' => 'повтор пароля'
        // ]
        );
        if ($validator->fails()) {
            return back()->withErrors($validator->errors());
        }

        $user_info = $validator->validate();
        $user_info['password'] = Hash::make($user_info['password']);
        $user = User::query()->create($user_info);
        Auth::login($user);
        return redirect()->route('home');
    }

    public function signinPost(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator->errors());
        }

        $user_info = $validator->validate();
        if (!Auth::attempt($user_info)) {
            return back()->withErrors(['error' => 'Неверный логин или пароль']);
        }
        return redirect()->route('home');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }
}
