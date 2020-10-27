@extends('layouts.layout')

@section('css')
    <style>

    </style>
@endsection

@section('main')


    <!-- BANNER -->
    <div class="section banner-page" data-background="{{asset('public/images/banner-single.jpg')}}">
        <div class="content-wrap pos-relative">
            <div class="d-flex justify-content-center bd-highlight mb-3">
                <div class="title-page">{{ __('message.gallery') }}</div>
            </div>
            <div class="d-flex justify-content-center bd-highlight mb-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb ">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">{{ __('message.main') }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ __('message.gallery') }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- OUR GALLERY -->
    <div class="">
        <div class="content-wrap">
            <div class="container">

                <div class="row popup-gallery gutter-5">
                    @foreach($photos as $photo)
                        <!-- Item 1 -->
                        <div class="col-xs-12 col-md-6 col-lg-4">
                            <div class="box-gallery">
                                <a href="{{asset('public/images/gallery/' . $photo->image)}}" title="Gallery">
                                    <img src="{{asset('public/images/gallery/' . $photo->image)}}" alt="" class="img-fluid">
                                    <div class="project-info">
                                        <div class="project-icon">
                                            <span class="fa fa-search"></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>


@endsection

@section('js')

    <script>
        $(document).ready(function(){

        });
    </script>

@endsection
