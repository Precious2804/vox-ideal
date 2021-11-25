<form action="{{route('upload_now')}}" method="POST">
    @csrf

    <label for="">Subject</label>
    <input type="text" name="subject" placeholder="Enter subject"> <br>

    <label for="">Content</label>
    <textarea name="content" id="" cols="30" rows="10" placeholder="Content goes here"></textarea> <br>

    <label for="">Image</label>
    <input type="file" name="image">

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<a href="{{route('logout')}}">
    <button class="text-danger">Logout</button>
</a>