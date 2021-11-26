@extends('layout')
@section('content')

<div id="contact">
    <p class="contact-detail">
        Please leave your message here and we will be in touch
    </p>

    <div class="form-container">
        <form action="{{route('contact_now')}}" method="POST">
            @csrf
            @if(Session::get('sent'))
            <div class="alert alert-success">
                {{Session::get('sent')}}
            </div>
            @endif
            <div>
                <label for="name">
                    Name
                </label>

                <div class="form-name-flex">
                    <div>
                        <input type="text" placeholder="First Name" name="fname">
                    </div>
                    <div>
                        <input type="text" placeholder="Last Name" name="lname">
                    </div>
                </div>
            </div>

            <div>
                <label for="email">
                    Email
                </label>
                <input type="email" name="email">
            </div>

            <div>
                <label for="message">Message</label>
                <textarea name="message" id="" cols="30" rows="10">
                    </textarea>
            </div>

            <div>
                <button class="send-msg-btn" type="submit">
                    Send Message
                </button>
            </div>
        </form>
    </div>
</div>

@stop