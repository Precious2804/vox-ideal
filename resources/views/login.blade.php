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

    <label for="">Email</label>
    <input type="email" name="email" placeholder="Enter email"> <br>
    <span class="text-danger"> @error('email') {{$message}} @enderror </span> <br>

    <label for="">Password</label>
    <input type="password" name="password" placeholder="Enter password"> <br>
    <span class="text-danger"> @error('password') {{$message}} @enderror </span> <br>

    <input type="submit" name="submit" value="Login">
</form>