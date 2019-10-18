@extends('layouts.backend.app')
@section('title','Assignment')

@push('css')
    <link href="{{asset('assets/backend/profile/css/style-profile.css')}}" rel='stylesheet' type='text/css' />
@endpush

@section('content')


    <div class="container " >
        <div>
            <h1>Edit Profile</h1>
            <hr>
        </div>
            <form  action="{{ route('student.profile.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                    <div class="row">
                        <div class="col-md-4">
                            <div class="profile-img">
                                <img src="/assets/backend/profile/images/{{$user->image}}" id="image" name="image" alt="{{$user->name}}"/>
                                <div class="file btn btn-lg btn-primary">
                                    Change Photo
                                    <input type="file" name="new_image" id="new_image" onchange="readURL(this);"/>
                                </div>

                            </div>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="container">

                                    <div class="row">
                                        <!-- left column -->


                                        <!-- edit form column -->
                                        <div class="col-md-9 personal-info">

                                            <h3>Personal info</h3>
                                            <br>
                                            <br>

                                            <div class="form-horizontal" role="form" >
                                                    <div class="form-group">
                                                        <label class="col-lg-3 control-label">Name:</label>
                                                        <div class="col-lg-8">
                                                            <input class="form-control" type="text" name="name" id="name" value="{{$user->name}}">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-lg-3 control-label">Gender:</label>
                                                        <div class="col-lg-8">
                                                            <input class="form-control" type="text" name="gender" id="gender" value="{{$user->gender}}">
                                                        </div>
                                                    </div>


                                                    <div class="form-group">
                                                        <label class="col-lg-3 control-label">Address: ..</label>
                                                        <div class="col-lg-8">
                                                            <textarea class="form-control" rows="8" cols="40" name="address"  id="address" value="{{$user->address}}" maxlength="300"></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label"></label>
                                                        <div class="col-md-8">
                                                            <input type="submit" class="btn btn-primary" value="Save Changes"></a>
                                                            <span></span>
                                                            <a href="{{ route("student.profile.index")}}"><input type="button" class="btn btn-default" value="Cancel"></a>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            </form>
    </div>
    <br>
    <br>


@endsection

@push('js')
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#image')
                        .attr('src', e.target.result)
                        .width(300)
                        .height(300)
                        .aspectRatio;
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

    </script>
@endpush
