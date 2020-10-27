@extends('back.galleries.template')

@section('form-open')
    <form method="post" action="{{ route('galleries.store') }}">
                    {{ csrf_field() }}
                {{ method_field('POST') }}   
@endsection