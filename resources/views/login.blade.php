@extends('layout')
@section('content')

<div id="contact">
    <p class="contact-detail">
        Admin Login Here
    </p>
    <div class="form-container">
        <form action="{{route('do_login')}}" method="POST">
            @csrf
            @if(Session::get('infoEmail'))
            <div class="alert alert-danger">
                {{Session::get('infoEmail')}}
            </div>
            @endif
            @if(Session::get('info'))
            <div class="alert alert-danger">
                {{Session::get('info')}}
            </div>
            @endif
            <div>
                <label for="name">Email</label>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Enter email">
                    <span class="text-danger"> @error('email') {{$message}} @enderror </span>
                </div>
            </div>

            <div>
                <label for="name">Password</label>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Enter password">
                    <span class="text-danger"> @error('password') {{$message}} @enderror </span>
                </div>
            </div>

            <div>
                <button class="send-msg-btn" type="submit">
                    Login
                </button>
            </div>
        </form>
    </div>
</div>
@stop