@extends('layouts.backend.app')
@section('title','Document')

@push('css')

@endpush

@section('content')

    <h3>Documents</h3>
{{--            <div class="panel-heading">--}}
{{--                Basic table--}}
{{--            </div>--}}
            <div>
                <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
                    <thead>
{{--                    <tr>--}}
{{--                        <th data-breakpoints="xs">ID</th>--}}
{{--                        <th>First Name</th>--}}
{{--                        <th>Last Name</th>--}}
{{--                        <th data-breakpoints="xs">Job Title</th>--}}

{{--                        <th data-breakpoints="xs sm md" data-title="DOB">Date of Birth</th>--}}
{{--                    </tr>--}}
                    </thead>
                    <tbody onload="myFunction()">
                    <tr data-expanded="true" >
                        <td></td>

                    </tr>

                    @foreach($documents as $document)
                        <tr data-expanded="true" >
                            <td><h3 >{{$document->name}}</h3></td>
                            <td><p style="max-width: 40%">{{$document->description}} </p></td>
                            <td >


                                @foreach($documentAttachments as $documentAttachment)
                                    @if($documentAttachment->document_id==$document->id)
                                        <a href='/student/document/{{$documentAttachment->id}}'  >
                                            <li>
                                                {{$documentAttachment->file}}
                                            </li>
                                    @endif
                                </a>

                                @endforeach
                            </td>
                            <td>{{$document->created_at->toFormattedDateString()}}</td>
                        </tr>
                    @endforeach





                    </tbody>
                </table>
            </div>





@endsection

@push('js')
    <script>
        function myFunction() {
            alert("Page is loaded");
        }
    </script>
@endpush
