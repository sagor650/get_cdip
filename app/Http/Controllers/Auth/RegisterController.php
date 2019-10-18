<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Intervention\Image\Facades\Image;

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
    protected $redirectTo;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        if(Auth::check() && Auth::user()->role->id==1)
        {
            $this->redirectTo = route('admin.dashboard');
        }
        elseif (Auth::check()&& Auth::user()->role->id==2) {
            $this->redirectTo = route('instructor.dashboard');
        }
        else{
            $this->redirectTo = route('student.dashboard');
        }
        $this->middleware('guest')->except('logout');
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
//            'username'=> ['required', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'image'  => 'image|mimes:jpeg,png,jpg,gif,svg|max:8048'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

            if (isset($data['image'])) {
                $image = $data['image'];

                $image_name = rand() . '.' . $image->getClientOriginalExtension();

                $destinationPath = public_path('/assets/backend/profile/images');

                $resize_image = Image::make($image->getRealPath());

                $resize_image->resize(300, 300, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($destinationPath . '/' . $image_name);
            }
            else{
                $image_name='default.jpg';
            }



        return User::create([
            'username' => $data['username'],
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'address' => $data['address'],
            'image' => $image_name,
            'gender' => $data['gender'],
            'course_id' => $data['course_id'],
            'batch_id' => $data['batch_id'],
            'phone' => $data['phone'],

        ]);
    }
}
