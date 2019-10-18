<?php

namespace App\Http\Controllers\Student;

use App\Batch;
use App\Course;
use App\Document;
use App\DocumentAttachment;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Debug\Tests\Fixtures\ToStringThrower;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = \Auth::user();



        $batch = DB::table('batches')->where('id',$user->batch_id )->first();
        $documents=Batch::find($batch->id)->documents;
        $documentAttachments=DocumentAttachment::all();
        return view('student.document.document',['documents'=>$documents,'documentAttachments'=>$documentAttachments]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function show(int $document)
    {
        $documentAttachments=DB::table('document_attachments')->select('file')->where('id','=',$document)->get();
        $name=$documentAttachments[0]->file;
//        $file="\storage\Document\image.JPG";
//        return response()->download($file);
        $download = public_path().'/Document/' . $name .'.m‌​p3';
        return response()->download($download);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function edit(Document $document)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Document $document)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy(Document $document)
    {
        //
    }
}
