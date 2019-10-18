<div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">

                @if(Request::is('admin*'))
                    <li>
                        <a class="{{(Request::is('admin/dashboard'))?'active': ''}}" href="{{route('admin.dashboard')}}">
                            <i class="fa fa-dashboard"></i>
                            <span>HOME</span>
                        </a>
                    </li>
                    <li>

                        <a class="{{(Request::is('admin/profile'))?'active': ''}}" href="">
                            <i class="fa fa-book"></i>
                            <span >PROFILE</span>

                        </a>

                    </li>
                    <li>
                        {{--                            <a href="fontawesome.html">--}}
                        <a class="{{(Request::is('admin/assignment'))?'active': ''}}" href="">
                            <i class="fa fa-bullhorn"></i>
                            <span>ASSIGNMENT SUBMISSION</span>
                        </a>
                    </li>
                    <li>
                        {{--                            <a href="fontawesome.html">--}}
                        <a class="{{(Request::is('admin/question'))?'active': ''}}" href="">
                            <i class="fa fa-tasks"></i>
                            <span>PROBLEM SOLUTION</span>
                        </a>
                    </li>
                    <li>
                        <a class="{{(Request::is('admin/document'))?'active': ''}}" href="">
                            <i class="fa fa-envelope"></i>
                            <span>COURSE MATERIAL</span>
                        </a>

                    </li>
                @endif

                @if(Request::is('instructor*'))
                        <li>
                            <a class="{{(Request::is('instructor/dashboard'))?'active': ''}}" href="{{route('instructor.dashboard')}}">
                                <i class="fa fa-dashboard"></i>
                                <span>HOME</span>
                            </a>
                        </li>
                        <li>

                            <a class="{{(Request::is('instructor/profile'))?'active': ''}}" href="">
                                <i class="fa fa-book"></i>
                                <span >PROFILE</span>

                            </a>

                        </li>
                        <li>
                            {{--                            <a href="fontawesome.html">--}}
                            <a class="{{(Request::is('instructor/assignment'))?'active': ''}}" href="">
                                <i class="fa fa-bullhorn"></i>
                                <span>ASSIGNMENT</span>
                            </a>
                        </li>
                        <li>
                            {{--                            <a href="fontawesome.html">--}}
                            <a class="{{(Request::is('instructor/question'))?'active': ''}}" href="">
                                <i class="fa fa-tasks"></i>
                                <span>QUESTION</span>
                            </a>
                        </li>
                        <li>
                            <a class="{{(Request::is('instructor/document'))?'active': ''}}" href="">
                                <i class="fa fa-envelope"></i>
                                <span>DOCUMENT</span>
                            </a>

                        </li>

                @endif

                @if(Request::is('student*'))
                        <li>
                            <a class="{{(Request::is('student/dashboard'))?'active': ''}}" href="{{route('student.dashboard')}}">
                                <i class="fa fa-dashboard"></i>
                                <span>HOME</span>
                            </a>
                        </li>
                        <li>

                            <a class="{{(Request::is('student/profile'))?'active': ''}}" href="{{route('student.profile.index')}}">
                                <i class="fa fa-book"></i>
                                <span >PROFILE</span>

                            </a>

                        </li>
                        <li>
                            {{--                            <a href="fontawesome.html">--}}
                            <a class="{{(Request::is('student/assignment'))?'active': ''}}" href="{{route('student.assignment.index')}}">
                                <i class="fa fa-bullhorn"></i>
                                <span>ASSIGNMENT MANAGEMENT</span>
                            </a>
                        </li>
                        <li>
                            {{--                            <a href="fontawesome.html">--}}
                            <a class="{{(Request::is('student/question'))?'active': ''}}" href="{{route('student.question.index')}}">
                                <i class="fa fa-tasks"></i>
                                <span>MY PROBLEM MANAGEMENT</span>
                            </a>
                        </li>
                        <li>
                            <a class="{{(Request::is('student/document'))?'active': ''}}" href="{{route('student.document.index')}}">
                                <i class="fa fa-envelope"></i>
                                <span>COURSE MATERIAL</span>
                            </a>

                        </li>

                @endif




            </ul>
        </div>
        <!-- sidebar menu end-->
    </div>
