@extends('layouts.main')

@section('content')
    <div class="content">
        <div class="title m-b-md">
            <h1 id="logo-curhat">curh.at</h1>
            <h2>curh.at</h2>
            <h5>segera hadir</h5>
        </div>

        <div class="links">
            <a href="<?php echo env('APP_BLOG_URL')?>" target="_blank">Blog</a>
            <a href="https://www.linkedin.com/company/curhat/" target="_blank">LinkedIn</a>
            <a href="https://twitter.com/curh_at" target="_blank">Twitter</a>
            <a href="https://www.instagram.com/curh.at" target="_blank">Instagram</a>
        </div>
    </div>
@endsection