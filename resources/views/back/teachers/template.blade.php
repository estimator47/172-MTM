@extends('back.layout')

@section('css')
<style type="text/css">
.upload_field {
     opacity:0.0;
     z-index:2;
     position:absolute;
     }
.upload_submit {
     z-index:1;
     display:none;
     }

</style>
@endsection

@section('main')

    <div class="row">
        <!-- left column -->
       <div class="col-md-3">
       </div>
        <!-- center column -->
        <div class="col-md-6 margin">
            @if (session('teacher-ok'))
                @component('back.components.alert')
                    @slot('type')
                        success
                    @endslot
                    {!! session('teacher-ok') !!}
                @endcomponent
            @endif
            <!-- general form elements -->
            <div class="box box-primary">
                <!-- form start -->
                    <div class="box-body">
                        <div class="form-group">       <!-- !!!/img/bg-img/ - custom -->
                          <img class="img_product" src="@if(isset($image)){{asset('public/images/hodim/' . $image)}}@elseif(old('image')){{asset('public/images/hodim/' . old('image'))}}@elseif(isset($teacher)){{asset('public/images/hodim/' . $teacher->image)}}@else{{asset('public/images/nophoto.jpg')}}@endif" alt="" style="width: 150px; margin-top: 5px;" />
                          @if (\Request::is('teachers/create'))
                          <form method="post" action="{{ route('uploadtech') }}" name="form_upload" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                              <input type="file" name="image" class="upload_field">
                              <button type="submit" class="upload_submit">Go</button>
                              <button type="button" class="btn btn-primary" style="width: 150px; margin-top: 5px;">{{ __('message.select') }}</button>
                          </form>
                          @endif
                        </div>
                        @yield('form-open')
                        <!-- 'bg-img/' . - custom -->
                        <input type="hidden" id="image" name="image" value="@if(isset($image)){{$image}}
                        @elseif(old('image')){{old('image')}}
                        @elseif(isset($teacher)){{$teacher->image}}@else{{'nophoto.jpg'}}@endif">
                        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                            <label for="name">@lang('I.F.Sh')</label>
                            <input type="text" class="form-control" id="name" name="name" value="@if(isset($teacher)){{$teacher->name}}@elseif(old('name')){{old('name')}}@endif" placeholder="Xxxxxxxxx Xxxxxxx Xxxxxxx">
                            {!! $errors->first('name', '<small class="help-block">:message</small>') !!}
                        </div>
                        <div class="form-group {{ $errors->has('occupation') ? 'has-error' : '' }}">
                            <label for="occupation">@lang('Lavozimi')</label>
                            <input type="text" class="form-control" id="occupation" name="occupation" value="@if(isset($teacher)){{$teacher->occupation}}@elseif(old('occupation')){{old('occupation')}}@endif" placeholder="">
                            {!! $errors->first('occupation', '<small class="help-block">:message</small>') !!}
                        </div>
                        <div class="form-group {{ $errors->has('info') ? 'has-error' : '' }}">
                            <label for="info">@lang("Ma'lumoti")</label>
                            <textarea type="text" class="form-control" id="info" name="info" value="" rows="4" cols="50">@if(isset($teacher)){{$teacher->info}}@elseif(old('info')){{old('info')}}@endif</textarea>
                            {!! $errors->first('info', '<small class="help-block">:message</small>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('nameru') ? 'has-error' : '' }}">
                            <label for="nameru">@lang('Ф.И.О')</label>
                            <input type="text" class="form-control" id="nameru" name="nameru" value="@if(isset($teacher)){{$teacher->nameru}}@elseif(old('nameru')){{old('nameru')}}@endif" placeholder="Xxxxxxxxx Xxxxxxx Xxxxxxx">
                            {!! $errors->first('nameru', '<small class="help-block">:message</small>') !!}
                        </div>
                        <div class="form-group {{ $errors->has('occupationru') ? 'has-error' : '' }}">
                            <label for="occupation">@lang('Должность')</label>
                            <input type="text" class="form-control" id="occupationru" name="occupationru" value="@if(isset($teacher)){{$teacher->occupationru}}@elseif(old('occupationru')){{old('occupationru')}}@endif" placeholder="">
                            {!! $errors->first('occupationru', '<small class="help-block">:message</small>') !!}
                        </div>
                        <div class="form-group {{ $errors->has('inforu') ? 'has-error' : '' }}">
                            <label for="inforu">@lang("Инфо")</label>
                            <textarea type="text" class="form-control" id="inforu" name="inforu" value="" rows="4" cols="50">@if(isset($teacher)){{$teacher->inforu}}@elseif(old('inforu')){{old('inforu')}}@endif</textarea>
                            {!! $errors->first('inforu', '<small class="help-block">:message</small>') !!}
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">{{ __('message.save') }}</button>
                    </div>
                </form>
            </div>
            <!-- /.box -->
        </div>
        <!--/.col (right) -->
        <!-- right column -->
       <div class="col-md-3">
       </div>
    </div>
    <!-- /.row -->
@endsection

@section('js')
<script>
$(document).ready(function(){
  $("body").on("change", ".upload_field", function(){
    //alert('hi');
    $(".upload_submit").click();
  });
});
</script>
@endsection
