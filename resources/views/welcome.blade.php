@extends('layout')
@section('content')

<section>
    @if($articles->isEmpty())
    <div class="no-post">
        <div class="alert alert-danger" style="text-align: center;">
            <br><br><br>
            <p style="font-weight: bolder;">Sorry! There are no articles currently to be displayed on this blog</p>
            <br><br><br>
        </div>
    </div>
    @else
    <div class="grid-container">
        @foreach($articles as $item)
        <div class="grid-content">
            <a href="{{route('blog_detail')}}?article={{$item->unique_id}}">
                <!-- <div class="grid-img" style="background: url(); background-repeat:no-repeat; background-position:right top; width: 100%; height: 400px; ">
                </div> -->
                <div class="grid-img">
                    <img src="{{asset($item->image)}}" alt="">
                </div>
            </a>

            <div class="grid-content">
                <a href="{{route('blog_detail')}}?article={{$item->unique_id}}">
                    <h3>
                        {{$item->subject}}
                    </h3>
                </a>
                <p style="font-weight: bold;">
                    {{$item->half_content}}
                    ...
                    <a href="{{route('blog_detail')}}?article={{$item->unique_id}}">
                        Read more
                    </a>
                </p>
            </div>
        </div>
        @endforeach
    </div>

    <div class="footer-load">
        {!! $articles->links() !!}
    </div>
    @endif
</section>

@stop