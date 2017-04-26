<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
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
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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
            'name' => 'required|max:255',
            'email' => 'required|email|max:100|unique:users',
            'password' => 'required|min:6|confirmed',
            'country' => 'required|max:255',
            'dateGraduated' => 'required|max:4',
            'degree' => 'required|max:255',
            'degreeClass' => 'required|max:255',
            'occupation' => 'required|max:255',
            'company' => 'required|max:255',
            'companyEmail' => 'required|email|max:100|unique:users',
            'interests' => 'required|max:255',
        ]);
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
   protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'country'=> $data['country'],
            'dateGraduated'=>$data['dateGraduated'],
            'degree'=>$data['degree'],
            'degreeClass'=>$data['degreeClass'],
            'occupation'=>$data['occupation'],
            'countryEmployed'=>$data['countryEmployed'],
            'company'=>$data['company'],
            'companyEmail'=>$data['companyEmail'],
            'interests'=>$data['interests'],
        ]);
    }
}
