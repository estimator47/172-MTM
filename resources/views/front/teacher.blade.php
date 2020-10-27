@extends('layouts.layout')

@section('css')
    <style>

    </style>
@endsection

@section('main')


    <!-- BANNER -->
    <div class="section banner-page" data-background="{{ asset('public/images/banner-single.jpg') }}">
        <div class="content-wrap pos-relative">
            <div class="d-flex justify-content-center bd-highlight mb-3">
                <div class="title-page">{{ __('message.staff') }}</div>
            </div>
            <div class="d-flex justify-content-center bd-highlight mb-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb ">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">{{ __('message.main') }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ __('message.staff') }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- MEET OREN TEAM -->
    <div class="section">
        <div class="content-wrap">
            <div class="container">

                <div class="row">

                    @include('front.teacher-standard');

                </div>
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
