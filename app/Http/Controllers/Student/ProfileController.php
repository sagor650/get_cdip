<?php

namespace App\Http\Controllers\Student;


use App\Batch;
use App\Course;
use App\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{
//    public function index(){
//        return view('student.profile.View_Profile');
//    }

    public function index() {
        $user=Auth::user();
        $course = DB::table('courses')->where('id',$user->course_id )->first();
        $batch = DB::table('batches')->where('id',$user->batch_id )->first();
        return view('student.profile.View_Profile',['user'=>$user,'course'=>$course,'batch'=>$batch]);
    }
    public function create() {
        echo 'create';
    }
    public function store(Request $request) {
        echo 'store';
    }
    public function show($id) {
        echo 'show';
    }
    public function edit($id) {
        $user = User::find($id);
        return view('student.profile.Edit_Profile',['user'=>$user]);
    }
    public function update(Request $request, $id) {
        $request->validate([
            'new_image'  => 'image|mimes:jpeg,png,jpg,gif,svg|max:8048'
        ]);

        $user=User::find($id);
        if (isset($request->new_image)) {

            //del old image
            if ($user->image!="default.jpg") {
                if (\File::exists(public_path('/assets/backend/profile/images/' . $user->image))) {

                    \File::delete(public_path('/assets/backend/profile/images/' . $user->image));

                } else {
                    Toastr::error('Image not found!!', 'error');

                }
            }
            //new image add

            $image = $request->new_image;
            $image_name = rand() . '.' . $image->getClientOriginalExtension();

            $destinationPath = public_path('/assets/backend/profile/images');

            $resize_image = Image::make($image->getRealPath());

            $resize_image->resize(300, 300, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath . '/' . $image_name);
        }
        else{
            $image_name=$user->image;
        }

        $user->name=$request->name;
        $user->gender=$request->gender;
        $user->address=$request->address;
        $user->image=$image_name;
        $user->save();
        Toastr::success('Your profile Successfully updated!!','success');
        return redirect()->route('student.profile.index');
    }
    public function destroy($id) {
        echo 'destroy';
    }
}
