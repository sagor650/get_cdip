@extends('layouts.backend.app')
@section('title','Assignment')

@push('css')
{{--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">--}}
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">--}}
@endpush

@section('content')
    <div id="submit_assignment" style="padding-left: 8%;padding-top: 4%; padding-right:8%">
        <div>
            <h3>Assignment {{$assignments->name}}</h3>
        </div>


        <hr  noshade>
        <br>


        <div class="form-group" id="details">
            <label for="details">Details</label>
            <p >
                {{$assignments->details}}
            </p>
        </div>

        <br>
        <div class="form-group" id="attachments">
            <label for="attachments">Attachment</label>

            <ui>
                <li>
                    <a  href="">{{$assignments->attachment}}</a>
                </li>

            </ui>

        </div>
        <br>
        <div class="form-group" id="Dadeline">
            <label for="Dadeline">Dadeline</label>
            <p style="color:red">
                {{$assignments->dead_line}}
            </p>

        </div>
{{--        <h3 class="jumbotron">Laravel Multiple Images Upload Using Dropzone</h3>--}}
{{--        <form method="post" action="{{route('student.assignment.store')}}" enctype="multipart/form-data"--}}
{{--              class="dropzone" id="dropzone">--}}
{{--            @csrf--}}
{{--        </form>--}}

        <h2>Submission</h2>
        <br>
        @if($submit_flag==0)
            <form action="{{route('student.assignment.store')}}"  method="POST" enctype="multipart/form-data" >
            @csrf
            <div class="form-group">
                <p>Details:</p>
                <textarea name="detail" id="detail" cols="50" rows="5"></textarea>
                <input type="text" name="name" value="{{$assignments->name}}" hidden>
                <p> please zip your files:</p>
                <input type="file" name="file" >
                <input type="hidden" name="id" id="id" value="{{$assignments->id}}">
            </div>
                <button type="submit" class="btn btn-primary m-t-15 waves-effect">
                    SUBMIT
                </button>
            </form>
        @endif
        @if(($assignments->deadline) < (Carbon\Carbon::now()))
            <h5>submittion date is over</h5>
        @endif
    </div>

@endsection

@push('js')
<scrtpt>
    document.getElementById("myP").style.visibility = "hidden";

</scrtpt>
@endpush
