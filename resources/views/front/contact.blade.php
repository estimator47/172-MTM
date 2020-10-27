@extends('layouts.layout')

@section('css')
    <style>
small {
    color: red;
}
iframe {
    width: 1000px;
    height: 450px;
}

@media only screen and (min-width: 641px) and (max-width: 1023px) {
    iframe {
        width: 600px;
        height: 300px;
    }
}
@media only screen and (max-width:640px) {
    iframe {
        width: 500px;
        height: 300px;
    }
}
@media only screen and (max-width: 480px) {
    iframe {
        width: 350px;
        height: 250px;
    }
}
    </style>
@endsection

@section('main')

    <!-- BANNER -->
    <div class="section banner-page" data-background="{{asset('public/images/banner-single.jpg')}}">
        <div class="content-wrap pos-relative">
            <div class="d-flex justify-content-center bd-highlight mb-3">
                <div class="title-page">{{ __('message.contact-us') }}</div>
            </div>
            <div class="d-flex justify-content-center bd-highlight mb-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb ">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">{{ __('message.main') }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ __('message.contact') }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- CONTACT -->
    <div id="contact">
        @if (session('message-ok'))
            @component('back.components.alert')
                @slot('type')
                    success
                @endslot
                {!! session('message-ok') !!}
            @endcomponent
        @endif
        <div class="content-wrap pb-0">
            <div class="container bgi-right bgi-hide-xs" data-background="images/request.jpg">
                <div class="row">
                    <div class="col-12 col-md-12">
                        <form method="post" action="{{url('/message')}}" class="form-contact">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                        <input type="text" name="name" class="form-control"
                                               value="@if(old('name')){{old('name')}}@endif" placeholder="{{ __('message.snn') }}">
                                        {!! $errors->first('name', '<small class="help-block">:message</small>') !!}
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
                                        <input type="text" name="phone" class="form-control" value="@if(old('phone')){{old('phone')}}@endif" placeholder="{{ __('message.phone') }}">
                                        {!! $errors->first('phone', '<small class="help-block">:message</small>') !!}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
                                <textarea name="message" id="" class="form-control" placeholder="{{ __('message.message') }}" rows="6">@if(old('message')){{old('message')}}@endif</textarea>
                                {!! $errors->first('message', '<small class="help-block">:message</small>') !!}
                            </div>
                            <div class="form-group">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-primary">{{ __('message.send-message') }}</button>
                            </div>
                        </form>
                        <div class="spacer-content"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- MAPS -->
    <div class="maps-wraper">
        <h2 style="text-align: center; color: #0b0b0b">{{ __('message.address') }}</h2>
        <div class="row">
            <div class="col-12 text-center" style="text-align: center;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5990.040737026665!2d69.186074!3d41.351911!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDHCsDIxJzA2LjkiTiA2OcKwMTEnMDkuOSJF!5e0!3m2!1sru!2s!4v1595663760539!5m2!1sru!2s"
                    frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                </iframe>
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
