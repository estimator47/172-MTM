@extends('layouts.layout')

@section('css')
    <style>
        .img-fluid {
            max-width: 100%;
            height: auto;
        }

    </style>
@endsection

@section('main')

    <!-- BANNER -->
    <div class="section banner-page" data-background="{{ asset('public/images/banner-single.jpg') }}">
        <div class="content-wrap pos-relative">
            <div class="d-flex justify-content-center bd-highlight mb-3">
                <div class="title-page">{{ __('message.news') }}</div>
            </div>
            <div class="d-flex justify-content-center bd-highlight mb-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb ">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">{{ __('message.main') }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ __('message.more-det') }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- CONTENT -->
    <div id="class" class="">
        <div class="content-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-9">
                        <div class="single-news">
                            <h2 class="title">@if(App::isLocale('ru')) {{{$new->nameru}}} @else  {{$new->name}} @endif</h2>
                            <div class="media">
                                <img src="{{ asset('public/images/news/' .$new->image) }}" alt="single news image" class="rounded img-fluid">
                            </div>
                            <div class="meta-date">{{$new->created_at}}</div>

                            <p>@if(App::isLocale('ru')) {{{$new->inforu}}} @else  {{$new->info}} @endif</p>
                        </div>
                        <!-- end single blog -->
                    </div>

                    <div class="col-sm-12 col-md-12 col-lg-3">

                        <div class="widget categories">
                            <h3 style="color: black;">{{ __('message.more-read') }}</h3>
                            @foreach ($news as $info)
                                <div class="block-21 mb-4 d-flex">
                                    <div class="rs-class-box mb-5">
                                        <div class="media-box">
                                            <a href="{{url('/newssingle', [$info->id])}}">
                                            <img src="{{ asset('public/images/news/' .$info->image) }}" alt="" class="img-fluid">
                                            </a>
                                        </div>
                                        <div class="body-box">
                                            <div class="class-name">
                                                <div class="title"><a href="{{url('/newssingle', [$info->id])}}">@if(App::isLocale('ru')) {{{$info->nameru}}}
                                                        @else  {{$info->name}} @endif</a></div>
                                            </div>
                                            <div class="meta-date">{{$info->created_at}}</div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                    <!-- end sidebar -->

                </div>

            </div>
        </div>
    </div>



@endsection

@section('js')

    <script>

    </script>

@endsection
