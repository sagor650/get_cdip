@extends('layouts.backend.app')
@section('title','Assignment')

@push('css')
    <link href="{{asset('assets/backend/profile/css/style-profile.css')}}" rel='stylesheet' type='text/css' />
@endpush

@section('content')

    <div class="container ">
        <form method="post">
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-img">
                        <img src="/assets/backend/profile/images/{{$user->image}}" alt="{{$user->name}}"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="profile-head">
                        <h5>
                            {{$user->name}}
                        </h5>
                        <h6>
                            Student at CDIP
                        </h6>

                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-md-2" >
                    <a href="profile/{{$user->id}}/edit"><button type="button" class="btn btn-primary" value="">Edit Profile </button> </a>

                </div>

            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-work">

                    </div>
                </div>
                <div class="col-md-2">
                    <div class="tab-content profile-tab" id="myTabContent">
                        <div class="container" id="home" role="tabpanel" aria-labelledby="home-tab">

                            <div class="row">
                                <div class="col-md-2">
                                    <label>Name:</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{$user->name}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <label>User ID: </label>
                                </div>
                                <div class="col-md-2">
                                    <p>{{$user->username}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <label>Email: </label>
                                </div>
                                <div class="col-md-2">
                                    <p>{{$user->email}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <label>Course: </label>
                                </div>
                                <div class="col-md-2">
                                    <p>{{$course->name}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <label>Batch:</label>
                                </div>
                                <div class="col-md-2">
                                    <p>{{$batch->name}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <label>Gender:</label>
                                </div>
                                <div class="col-md-2">
                                    <p>{{$user->gender}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <label>Phone:</label>
                                </div>
                                <div class="col-md-2">
                                    <p>{{$user->phone}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <label>Address:</label>
                                </div>
                                <div class="col-md-2">
                                    <p>{{$user->address}}</p>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>




@endsection

@push('js')
@endpush
