@extends('layout')
@section('content')

<section class="single-blog">


    <div class="single-blog-container">
        <h1 class="single-blog-title">
            {{$single_blog['subject']}}
        </h1>

        <pre style="font-weight: bolder;">
            {{$single_blog['half_content']}}
        </pre>

        <!-- <div class="single-blog" style="background: url(./assets/blog-img.png); width: 100%; height: 400px; ">
        </div> -->
        <div class="single-blog">
            <img src="{!! $single_blog['image'] !!}" alt="" style="width: 100%;">
        </div>

        <div class="single-blog-detail">
            <pre style="font-weight: bold;">
                {{$single_blog['content']}}
            </pre>
        </div>
    </div>
</section>

@stop