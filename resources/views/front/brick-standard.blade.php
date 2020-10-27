@foreach($news as $new)
    <div class="col-sm-12 col-md-6 col-lg-4 mb-5">
        <div class="rs-news-1">
            <div class="media-box">
                <a href="{{route('news_single', [$new->id])}}"><img src="{{ asset('public/images/news/'. $new->image) }}"
                    alt="news" class="img-fluid"></a>
            </div>
            <div class="body-box">
                <div class="title">
                    <a href="{{route('news_single', [$new->id])}}">@if(App::isLocale('ru')) {{{$new->nameru}}}
                        @else  {{$new->name}} @endif</a></div>
                <div class="meta-date">{{$new->created_at}}</div>
                <p class="text_info">@if(App::isLocale('ru')) <?=mb_substr($new->inforu, 0, 150); ?>...
                    @else  <?=substr($new->info, 0, 150); ?>... @endif </p>
            </div>
        </div>
    </div>
@endforeach
