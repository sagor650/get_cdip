@extends('layouts.backend.app')
@section('title','Question')

@push('css')

@endpush

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            PROBLEM SHARE
        </div>
        <div class="col-sm-6">
            <form action="{{route('student.question.store')}}" method="POST">
                @csrf
                <div class="form-group shadow-textarea ">
                    <label for="exampleFormControlTextarea6">Share your problems here...</label>
                    <textarea class="form-control z-depth-1" id="qus_title" name="qus_title" rows="3" placeholder="Write something here..." required></textarea>
                    <input type="hidden" name="user_id" value="{{\Auth::user()->id}}">

                </div>
                <div class="form-group ">
                    <input type="submit" class="btn btn-success"  >
                </div>
            </form>

        </div>

        <div class="row w3-res-tb">

            <div class="col-sm-4">
            </div>


{{--            <div class="col-sm-3">--}}
{{--                <div class="input-group">--}}
{{--                    <input type="text" class="input-sm form-control" placeholder="Search">--}}
{{--                    <span class="input-group-btn">--}}
{{--                        <button class="btn btn-sm btn-default" type="button">Go!</button>--}}
{{--                    </span>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
        <div class="table-responsive">
            <table class="table table-striped b-t b-light" id="question_table" name="question_table">
{{--                <thead>--}}
{{--                <tr>--}}
{{--                    <th style="width:20px;">--}}
{{--                        <label class="i-checks m-b-none">--}}
{{--                            <input type="checkbox"><i></i>--}}
{{--                        </label>--}}
{{--                    </th>--}}
{{--                    <th>Project</th>--}}
{{--                    <th>Task</th>--}}
{{--                    <th>Date</th>--}}
{{--                    <th style="width:30px;"></th>--}}
{{--                </tr>--}}
{{--                </thead>--}}
                <tbody>
                @if($questions!=null)
                    @foreach($questions as $question)
                        <tr>

                            <td><a href="{{route('student.question.answer',$question->id)}}">
                                   {{$question->qus_title}}
                                </a>
                            </td>

                            <td>
                                {{$question->created_at->diffForHumans()}}</td>
                            <td>

                                <div class="glyphicon glyphicon-thumbs-up">
                                    {{$question->like_count}}
                                </div>
                                <div class="glyphicon glyphicon-eye-open">
                                    {{$question->view_count}}
                                </div>

                            </td>
                            <td>
                                <div>
                                    Answer
                                </div>
                                <div>
                                    {{App\Question::find($question->id)->answers->count()}}
                                </div>


                            </td>
                        </tr>
                    @endforeach
                    @else
                        <div class="alert alert-danger"> No Questions found</div>
                    @endif
                </tbody>
            </table>
        </div>
        <footer class="panel-footer">
            <div class="row">

                <div class="col-sm-5 text-center">
                    <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
                </div>
                <div class="col-sm-7 text-right text-center-xs">
                    <ul class="pagination pagination-sm m-t-none m-b-none">
                        <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
                        <li><a href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">4</a></li>
                        <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
@endsection

@push('js')
    <script type="text/javascript">
{{--       --}}
{{--                ]--}}
{{--            }); $(document).ready(function () {--}}
{{--                $('#question_table').DataTable({--}}
{{--                    "processing":true,--}}
{{--                    "serverSide":true,--}}
{{--                    "ajax":"{{route('ajax.getdata')}}",--}}
{{--                    "columns":[--}}
{{--                        {"data":""},--}}
{{--                        {"data":""}--}}

{{--                });--}}
{{--        $(document).ready(function(){--}}
{{--           alert("working")--}}
{{--            $.get('{{url("/student/question/")}}',function (data) {--}}
{{--               $()--}}
{{--            });--}}
{{--        });--}}
    </script>
@endpush






