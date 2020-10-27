@extends('layouts.layout')

@section('css')
    <style>
        .title, .text_info{
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2; /* number of lines to show */
            -webkit-box-orient: vertical;
        }
        .text_info {
            -webkit-line-clamp: 3;
        }
    </style>
@endsection

@section('main')

    <!-- BANNER -->
    <div id="oc-fullslider" class="banner">
        <div class="owl-carousel owl-theme full-screen">
            <div class="item">
                <img src="{{ asset('public/images/photo_2.jpg') }}" alt="Slider">
                <div class="overlay-bg"></div>
                <div class="container d-flex align-items-center">
                    <div class="wrap-caption">
                        <h1 class="caption-heading">Welcome to 172-MTM Best Kindergarten at Tashkent</h1>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('public/images/photo_3.jpg') }}" alt="Slider">
                <div class="overlay-bg"></div>
                <div class="container d-flex align-items-center">
                    <div class="wrap-caption">
                        <h1 class="caption-heading">Welcome to 172-MTM Best Kindergarten at Tashkent</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="custom-nav owl-nav"></div>
    </div>


    <!-- WELCOME TO KIDS -->
    <div class="section">
        <div class="content-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <img src="{{ asset('public/images/photo_3.jpg') }}" alt="" class="img-fluid img-border mb-3">
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <h2 class="section-heading">
                            {{ __('message.about-us') }}
                        </h2>
                        <p>Teritatis et quasi architecto. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent. Sed ut perspiciatis unde omnis iste natus error sitdolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.  Praesent interdum est gravida vehicula est node maecenas loareet morbi a dosis luctus novum est praesent. Magna est consectetur interdum modest dictum.</p>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent. </p>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- News -->
    <div class="section">
        <div class="content-wrap">
            <div class="container">

                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <h2 class="section-heading text-center mb-5">
                            {{ __('message.news') }}
                        </h2>
                    </div>
                </div>

                <div class="row mt-4" id="news-list">

                    @include('front.brick-standard')

                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="text-center">
                            <button class="next_button btn btn-primary"> {{ __('message.more') }} </button>
                        </div>
                    </div>
                </div>
                <div style="display:none" id="next">1</div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script src="{{ asset('public/js/mine.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('.next_button').click(function(){
                BaseRecord.more($('#next').html());
                return false;
            });
        });
    </script>

@endsection
