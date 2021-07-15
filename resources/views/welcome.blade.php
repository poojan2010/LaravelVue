@extends('layouts.app')

@section('content')

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand mr-lg-5 ml-3">
            <router-link to="/">Home</router-link>
        </a>

        <div class="collapse navbar-collapse" id="navbarNav" style="float: right">
            <div class="navbar-nav">

                <a class="nav-item active mr-2">
                    <router-link to="/signup">Register</router-link>
                </a>

                <a class="nav-item">
                    <router-link to="/login">LogIn</router-link>
                </a>
            </div>
        </div>
    </nav>
    <router-view></router-view>

@endsection
