@extends('back.news.template')

@section('form-open')
    <form method="post" action="{{ route('news.update', [$new->id]) }}">
                     {{ csrf_field() }}
                  {{ method_field('PUT') }}   
@endsection
