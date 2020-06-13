@extends('layouts.app')
@section('content')
<div id="app">
    <div class="fixed-top">
        <nav class="navbar navbar-default navbar-expand-md navbar-light">
            <div class="navbar-header d-flex col">
                <a class="" href="#"><img src="img/main-logo.png" class="img-fluid logo_img"></a>
                <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class=" navbar-toggler ml-auto border-0">
                    <span class="navbar-toggler-icon"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collection of nav links, forms, and other content for toggling -->
            <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start top_nav">
                <form class="navbar-form form-inline">
                <div class="input-group search-box">
                    <input type="text" id="search" class="form-control-lg" placeholder="Search...">
                    <span class="input-group-addon"><i class="material-icons"></i></span>
                </div>
                </form>
                <ul class="nav navbar-nav navbar-right ml-auto">
                <li class="nav-item dropdown">
                    <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action"><img src="https://www.tutorialrepublic.com/examples/images/avatar/2.jpg" class="avatar" alt="Avatar">
                    {{ Auth::user()->name }} <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#" class="dropdown-item"><i class="fa fa-user"></i> Profile</a></li>
                        <li><a href="#" class="dropdown-item"><i class="fa fa-calendar"></i> Calendar</a></li>
                        <li><a href="#" class="dropdown-item"><i class="fa fa-sliders"></i> Settings</a></li>
                        <li class="divider dropdown-divider"></li>
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" class="dropdown-item"><i class="material-icons"></i> Logout
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>   
                        </a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="#" class="nav-link notifications" data-toggle="modal" data-target="#myModal"><i class="fa fa-bell-o"></i><span class="badge">1</span></a></li>
                <li class="nav-item"><a href="#" class="nav-link messages" data-toggle="modal" data-target="#myModaltwo"><i class="fa fa-envelope-o"></i><span class="badge">10</span></a></li>
                <li class="nav-item"><a href="#" class="nav-link messages" data-toggle="modal" data-target="#myModalthree"><i class="fa fa-user"></i><span class="badge">10</span></a></li>
                <li class="nav-item"><a href="#" class="nav-link menu"><i class="fa fa-bars"></i></a></li>
                </ul>
            </div>
        </nav>
        <nav class="navbar navbar-expand-md navbar-light bg-light nav_two">
            <a class="navbar-brand" href="#"> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav mx-auto">
                <li class="nav-item ">
                    <router-link class="nav-link" to="/home"><i class="fa fa-home"></i> HOME</router-link>
                </li>
                <li class="nav-item">
                    <router-link class="nav-link" to="/hub"><i class="fa fa-book"></i> HUB</router-link>
                </li>
                <li class="nav-item">
                    <router-link class="nav-link" to="/blog"><i class="fa fa-desktop"></i> BLOG</router-link>
                </li>
                <li class="nav-item">
                    <router-link class="nav-link" to="/video"><i class="fa fa-camera"></i> VIDEOS</router-link>
                </li>
                <li class="nav-item">
                    <router-link class="nav-link" to="/F_two_F"><i class="fa fa-file"></i> F2F</router-link>
                </li>
                <li class="nav-item">
                    <router-link class="nav-link" to="/opportunity"><i class="fa fa-briefcase"></i> OPPORTUNITY</router-link>
                </li>
                </ul>
            </div>
        </nav>
    </div>

    <div>
        <main class="py-4">
            <router-view>
            </router-view>
        </main>
    </div>
</div>

<section class="p-4" id="footer">
    <div class="container">
    <div class="row">
        <h6 class="text-center w-100 text-light">© Scholarcave 2020</h6>
    </div>
    </div>
</section>

<script src="{{ asset('js/app.js') }}" defer></script>
@endsection
