<?php

namespace App\Http\Controllers\Student;


use App\Answer;
use App\Course;
use App\Question;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = \Auth::user();
        $course=Course::where('id',$user->course_id)->first();
        $questions=Question::all()->where('course_id',$course->id);
//       $answers=Question::find(1)->answers->count();
//        dd($answers);

        if ($questions->isNotEmpty()){
            return view('student.question.question',['questions'=>$questions]);
        }
        else{
            return view('student.question.question',['questions'=>null]);
        }

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(),[
            //put fields to be validated here
            'qus_title'=>'required'
        ]);

        $question= new Question();
        $question->qus_title= $request['qus_title'];
        $question->user_id= $request['user_id'];
        $course=Course::where('user_id',$request['user_id'])->first();
        $question->course_id=$course->id;


        // add other fields
        $question->save();
        Toastr::success('Your Question published successfully!!','Success');
        return redirect()->route('student.question.index');
//        $user = \Auth::user()->id;
//        $course=Course::where('user_id',$user)->first();
//        $questions=Question::all()->where('course_id',$course->id);
////       $answers=Question::find(1)->answers->count();
////        dd($answers);
//
//        return view('student.question.question',['questions'=>$questions]);
    }

    public function add_question(Request $request,$id)
    {
        return $request;
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

        return $request->question;
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
    public function answer($id)
    {
        $answers=Question::find($id)->answers;
        $question=Question::find($id);
        $question_id=$question->id;
        $question_title=$question->qus_title;
//        return view('student.question.answer',['answers'=>$answers,'question_title'=>$question_title]);

        if ($answers->isNotEmpty()){
            return view('student.question.answer',['answers'=>$answers,'question_title'=>$question_title,'question_id'=>$question_id]);
        }
        else{
            return view('student.question.answer',['answers'=>null,'question_title'=>$question_title,'question_id'=>$question_id]);
        }
    }
    public function answer_store(Request $request){

        $this->validate(request(),[
            //put fields to be validated here
            'answer'=>'required'
        ]);

        $answer= new Answer();
        $answer->answer= $request['answer'];
        $answer->user_id= $request['user_id'];
        $answer->question_id= $request['question_id'];



        // add other fields
        $answer->save();
        Toastr::success('Your Answer published successfully!!','Success');
        return redirect()->route('student.question.answer',$request['question_id']);

    }

}
