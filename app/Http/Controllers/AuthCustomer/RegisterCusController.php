<?php

namespace App\Http\Controllers\AuthCustomer;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\customer;
use Illuminate\Foundation\Auth\RegistersUsersCus;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterCusController extends Controller
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

    use RegistersUsersCus;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::CUSTOMER;

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
            'name' => ['required', 'string', 'max:255'],
            'name2' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'birthday' => 'required|before:-18 years',
            'mobile' => ['required','numeric','digits:10'],
            'bid' => ['required','exists:branches,bid'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:customers'],
            'nic' => ['required', 'numeric', 'digits_between:09,12', 'unique:customers'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.  digits_between:1,12
     *
     * @param  array  $data
     * @return \App\Models\customer
     */
    protected function create(array $data)
    {

        return customer::create([
            'FullName' => $data['name'],
            'nameWithIn' => $data['name2'],
            'address' => $data['address'],
            'DOB' => $data['birthday'],
            'mobile' => $data['mobile'],
            'bid' => $data['bid'],
            'email' => $data['email'],
            'nic' => $data['nic'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
