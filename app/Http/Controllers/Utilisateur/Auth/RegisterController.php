<?php

namespace App\Http\Controllers\Utilisateur\Auth;


use App\Models\Utilisateur;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/programme.programmeProf';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('utilisateur.guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nom' => 'required|max:255|string|regex:/^[a-zA-Z]+$/u',
            'prenom' => 'required|max:255|string|regex:/^[a-zA-Z]+$/u',
            'fonction' => 'required|string|regex:/^[a-zA-Z]+$/u',
            'structure' => 'required|string',
            'telephone' => 'required|numeric',
            'adresse' => 'required|string',
            'email' => 'required|email|max:255|unique:utilisateurs',
            'password' => 'required|min:8|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return Utilisateur
     */
    protected function create(array $data)
    {
        return Utilisateur::create([
            'nom' => $data['nom'],
            'prenom' => $data['prenom'],
            'fonction' => $data['fonction'],
            'structure' => $data['structure'],
            'telephone' => $data['telephone'],
            'email' => $data['email'],
            'adresse' => $data['adresse'],
            'password' => bcrypt($data['password']),
        ]);
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('utilisateur.auth.register');
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('utilisateur');
    }
}
