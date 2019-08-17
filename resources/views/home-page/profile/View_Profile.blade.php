@extends('home-page.master')
@section('body')
    <section id="main-content">

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
                        <div class="profile-head">
                            <h5>
                                Mehedi Hasan
                            </h5>
                            <h6>
                                Student at UIU
                            </h6>
                            <p class="proile-rating">RANKINGS : <span>8/10</span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2" >
                        <a href="Edit_Profile"><button type="button" class="btn btn-primary" value="">Edit Profile </button> </a>

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
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="container" id="home" role="tabpanel" aria-labelledby="home-tab">

                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Name</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Mehedi</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>University </label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>uiu</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Department </label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>cse</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Email</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>sdfsdf</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Phone</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>43545</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Profession</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>dfgd</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Profession</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>454</p>
                                    </div>
                                </div>
                                <div class="col-md-12" >

                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Experience year</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>5</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Address</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>gdfgdf</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>



    </section>
@endsection