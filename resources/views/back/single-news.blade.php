@extends('back.layout')
@section('css')
    <style>

    </style>
@endsection

@section('main')
    <div class="row padding_body">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-body">
                    <div id="spinner" class="text-center"></div>
                    <div class="table-responsive">
                        <section class="ftco-section bg-light">
                            <div class="container">
                                <div class="row">
                                    <h3>{{$new->name}}</h3>
                                    <p>{{$new->info}}
                                    <hr>
                                    <h3>{{$new->nameru}}</h3>
                                    <p>{{$new->inforu}}
                                </div>
                            </div>
                        </section>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

    <script>

    </script>

@endsection
