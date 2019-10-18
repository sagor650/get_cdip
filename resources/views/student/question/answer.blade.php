@extends('layouts.backend.app')
@section('title','Question')

@push('css')

@endpush

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            Question
        </div>
        <div class="well">
            <h4>{{$question_title}}</h4>
        </div>
        <div class="col-sm-6">


        </div>

        <div class="row w3-res-tb">

            <div class="col-sm-4">
                <h4>Answers:</h4>
            </div>


        </div>
        <div class="table-responsive">
            <table class="table table-striped b-t b-light" id="answer_table" name="answer_table">
                <tbody>
                @if($answers!=null)
                    @foreach($answers as $answer)
                        <tr>

                            <td>
                                    {{$answer->answer}}
                            </td>

                            <td>
                                {{$answer->created_at->diffForHumans()}}
                            </td>
                            <td>
                                @if($answer->like==0)
                                <button type="button" class="btn btn-info">Like</button>
                                @endif

                                @if($answer->like==1)
                                        <button type="button" class="btn btn-info" disabled>Liked</button>
                                @endif
                            </td>
                            <td>


                            </td>
                        </tr>
                    @endforeach
                @else
                    <div class="alert alert-danger"> No answer found</div>
                @endif

                </tbody>
            </table>
            <div class="col-sm-6">
                <form action="{{route('student.question.answer_store')}}" method="POST">
                    @csrf
                    <div class="form-group shadow-textarea ">
                        <label for="exampleFormControlTextarea6">Your answer</label>
                        <textarea class="form-control z-depth-1" id="answer" name="answer" rows="3" placeholder="Write your answer here..." required></textarea>
                        <input type="hidden" name="user_id" value="{{\Auth::user()->id}}">
                        <input type="hidden" name="question_id" id="question_id" value="{{$question_id}}">



                    </div>
                    <div class="form-group ">
                        <input type="submit" class="btn btn-success"  >
                    </div>
                </form>

            </div>

        </div>
        <footer class="panel-footer">

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






