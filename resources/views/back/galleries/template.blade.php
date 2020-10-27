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
            @if (session('gallery-ok'))
                @component('back.components.alert')
                    @slot('type')
                        success
                    @endslot
                    {!! session('gallery-ok') !!}
                @endcomponent
            @endif
            <!-- general form elements -->
            <div class="box box-primary">
                <!-- form start -->
                    <div class="box-body">
                        <div class="form-group">       <!-- !!!/img/bg-img/ - custom -->
                          <img class="img_product" src="@if(isset($image)){{asset('public/images/gallery/' . $image)}}@elseif(old('image')){{asset('public/images/gallery/' . old('image'))}}@elseif(isset($gallery)){{asset('public/images/gallery/' . $gallery->image)}}@else{{asset('public/images/nophoto.jpg')}}@endif" alt="" style="width: 150px; margin-top: 5px;" />
                          @if (\Request::is('galleries/create'))
                          <form method="post" action="{{ route('uploadgal') }}" name="form_upload" enctype="multipart/form-data">
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
                        @elseif(isset($gallery)){{$gallery->image}}@else{{'nophoto.jpg'}}@endif">
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
