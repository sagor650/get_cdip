@extends('home-page.master')
@section('title')
    Edit-profile
@endsection

@section('body')



        <!-- your code here -->
        <div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="home-page/profile/images/mehedi.JPG" alt="omar"/>
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!-- upper right coloum -->
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">

                            <div class="">
                                <a href="">
                                    <i class="fa fa-facebook-square" style="font-size:28px;padding:10px 10px" ></i>
                                </a>
                                <a href="">
                                    <i class="fa fa-twitter" style="font-size:28px;padding:10px 10px"></i>
                                </a>
                                <a href="">
                                    <i class="fa fa-mobile" style="font-size:28px;padding:10px 10px"></i>
                                </a>
                                <a href="">
                                    <i style="font-size:28px ;padding:10px 10px" class="fa">&#xf0e0;</i>
                                </a>
                            </div>

                            <div>
                                <p>SKILLS</p>
                                <a href="">Tutor</a><br/>
                                <a href="">Web Designer and Developer</a><br/>
                                <a href="">WordPress</a><br/>
                                <a href="">Programming language</a><br/>
                                <a href="">PHP, .Net</a><br/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="container">
                            <h1>Edit Profile</h1>

                            <hr>
                            <div class="row">
                                <!-- left column -->


                                <!-- edit form column -->
                                <div class="col-md-9 personal-info">
                                    <div class="alert alert-info alert-dismissable">
                                        <a class="panel-close close" data-dismiss="alert">×</a>
                                        <i class="fa fa-coffee"></i>
                                        This is an <strong>.alert</strong>. You are going to change your profile information.
                                    </div>
                                    <h3>Personal info</h3>

                                    <form class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Full name:</label>
                                            <div class="col-lg-8">
                                                <input class="form-control" type="text" placeholder="enter name:.. " value=" ">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">University: ..</label>
                                            <div class="col-lg-8">
                                                <input class="form-control" type="text"placeholder="university:.." value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Department:</label>
                                            <div class="col-lg-8">
                                                <input class="form-control" type="text" placeholder="CSE .. " value="">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Mail:</label>
                                            <div class="col-md-8">
                                                <input class="form-control" type="email" placeholder="abc@gmail.com" value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Phone</label>
                                            <div class="col-md-8">
                                                <input class="form-control" type="text" placeholder="+880 .........." value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Profession: ..</label>
                                            <div class="col-md-8">
                                                <input class="form-control" type="text" placeholder="lecturer at uiu" value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Experience Year: ..</label>
                                            <div class="col-md-8">
                                                <input class="form-control" type="text" placeholder="5 years .." value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">English Level: ..</label>
                                            <div class="col-md-8">
                                                <input class="form-control" type="text" placeholder="Experts" value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Address: ..</label>
                                            <div class="col-md-8">
                                                <input class="form-control" type="text" placeholder="Enter Address "value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Biodata: ..</label>
                                            <div class="col-md-8">
                                                <textarea class="form-control"name="status" form="usrform"rows="8"cols="40" id=""placeholder="Write down your Biodata within 300 letters"maxlength="300"></textarea>                            </div>

                                        </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label"></label>
                                    <div class="col-md-8">
                                        <a href="profile.html"><input type="button" class="btn btn-primary" value="Save Changes"></a>
                                        <span></span>
                                        <a href="profile.html"><input type="button" class="btn btn-default" value="Cancel"></a>
                                    </div>
                                </div>
            </form>
        </div>
        </div>
        </div>
        <hr>
        </div>
        </div>


        </form>
        </div>


    </section>
@endsection
