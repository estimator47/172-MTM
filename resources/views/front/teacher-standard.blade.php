@foreach($teachers as $teacher)
    <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="rs-team-1">
            <div class="media-box"><img src="{{ asset('public/images/hodim/' .$teacher->image) }}"
                alt="" class="img-fluid">
            </div>
            <div class="body">
                <div class="title">@if(App::isLocale('ru')) {{{$teacher->nameru}}}
                    @else  {{$teacher->name}}@endif</div>
                <div class="position">@if(App::isLocale('ru')) {{{$teacher->occupationru}}}
                    @else {{$teacher->occupation}}@endif</div>
                <p>@if(App::isLocale('ru')) {{{$teacher->inforu}}} @else  {{$teacher->info}} @endif</p>
            </div>
        </div>
    </div>
@endforeach
