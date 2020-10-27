@extends('back.layout')
@section('css')
<style>
#gallery-pannel img {
    width: 190px;
    height: 140px;
}
.remove-button{
  padding-left: 50%;
  padding-top: 4%;
  padding-bottom: 4%;
}

</style>
@endsection

@section('main')
        <div class="row padding_body">
           <div class="col-md-12">
              <div class="box box-primary">
                 <div class="box-body">
                     <div id="spinner">
                         <a href="{{route('galleries.create')}}">
                             <button class="btn btn-primary"><i class="fa fa-plus"></i> {{ __('message.add-photo') }}</button>
                         </a>
                     </div><br>
                    <div class="table-responsive">
                        @if (session('gallery-ok'))
                          @component('back.components.alert')
                              @slot('type')
                                  success
                              @endslot
                              {!! session('gallery-ok') !!}
                          @endcomponent
                        @endif
                      <section class="ftco-section bg-light">
                        <div class="container">
                          <div class="row" id="gallery-pannel">
                            @include('back.gallery-standard')
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
 $(document).ready(function(){
   $('.listbuttonremove').click(function(){
     BaseRecord.destroyphoto($(this).attr('id'));
     return false;
   });
 });
</script>

@endsection
