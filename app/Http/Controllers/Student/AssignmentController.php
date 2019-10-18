<?php

namespace App\Http\Controllers\Student;

use App\Assignment;
use App\Assignment_submit;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Faker\Provider\da_DK\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class AssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=Auth::user();
        $batch_id=$user->batch_id;
        $assignments=DB::table('assignments')->where('batch_id',$batch_id)->get();
        return view('student.assignment.assignment-list',['assignments'=>$assignments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */

    public function store(Request $request)
    {
//        return $request;
        $this->validate($request,[
//            'name' => 'required|unique:assignment_submits',
            'file' =>  'required|file|mimes:rar,zip|max:11048'

        ]);

        //get from file

        $file=$request->file('file');
        $slug=str_slug($request->name);
        $detail=$request->detail;
        $user_id=Auth::user()->id;


        //unique file name
        if (isset($file)){
            $currentDate= Carbon::now()->toDateString();
            $filename=$slug.'-'.$currentDate.'-'.uniqid().'.'.$file->getClientOriginalExtension();

            //make directory
            if (!Storage::disk('public')->exists('assignment_submit')){
                Storage::disk('public')->makeDirectory('assignment_submit');
            }
//            Storage::disk('public')->put($filename,$file);
            $file->move('storage/assignment_submit/', $filename);
        }
        else {
            $filename="default.png";
        }

        $assignmentSubmit=new Assignment_submit();
        $assignmentSubmit->submit_flag=1;
        $assignmentSubmit->assignment_id=$request->id;
        $assignmentSubmit->file=$filename;
        $assignmentSubmit->user_id=$user_id;
        $assignmentSubmit->detail=$detail;
        $assignmentSubmit->save();
        Toastr::success('Your Assignment has submitted successfully!!','Success');
        return redirect()->route('student.assignment.index');
    }

    /**
     * Diplay the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $assignments=Assignment::find($id);
        $user_id=Auth::user()->id;
        $assignment_submits=DB::table('assignment_submits')->where('user_id',$user_id)->where('assignment_id',$assignments->id)->first();
        if (empty($assignment_submits)) {
            $submit_flag = 0;
        }
        else{
            $submit_flag = $assignment_submits->submit_flag;
        }

        return view('student.assignment.assignment-view',['assignments'=>$assignments,'submit_flag'=>$submit_flag]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *
     */

    public function submit(Request $request)
    {

    }

    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
