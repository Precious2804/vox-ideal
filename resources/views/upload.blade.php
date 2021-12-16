@extends('layout')
@section('content')

<div id="contact">
    <h4> Upload a New Article</h4>
    <div class="form-container">
        <form action="{{route('upload_now')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(Session::get('uploaded'))
            <div class="alert alert-success">
                {{Session::get('uploaded')}}
            </div>
            @endif
            <div>
                <label for="name">Subject</label>
                <div class="form-group">
                    <input type="text" name="subject" class="form-control" placeholder="Enter subject">
                    <span class="text-danger"> @error('subject') {{$message}} @enderror </span>
                </div>
            </div>

            <div>
                <label for="name">Content</label>
                <div class="form-group">
                    <div>
                        <textarea cols="80" rows="10" id="content" name="content" class="form-control"></textarea>
                        <script type="text/javascript">
                            CKEDITOR.replace('articleContent');
                        </script>
                    </div>
                    <span class="text-danger"> @error('content') {{$message}} @enderror </span>
                </div>
            </div>

            <div>
                <label for="">Upload Image</label>
                <div class="form-group">
                    <input type="file" class="form-control" name="image">
                    <span class="text-danger"> @error('image') {{$message}} @enderror </span>
                </div>
            </div>

            <div>
                <button class="send-msg-btn" type="submit">
                    Upload Article
                </button>
            </div>
        </form>
        <br>
        <br>
        <div class="">
            <a href="{{route('logout')}}">
                <button class="btn btn-danger ">Logout</button>
            </a>
        </div>
    </div>
</div>
@stop
