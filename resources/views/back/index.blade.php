@extends('back.layout')
@section('css')
<style>
#back-pannel img {
width: 120px;
}
.hover {
    color: black;
}
</style>
@endsection

@section('main')
        <div class="row padding_body">
           <div class="col-md-12">
              <div class="box box-primary">
                 <div class="box-body">
                     <div id="spinner">
                         <a href="{{route('news.create')}}">
                             <button class="btn btn-primary"><i class="fa fa-plus"></i> {{ __('message.add-news') }}</button>
                         </a>
                     </div>
                    <div class="table-responsive">
                        @if (session('product-ok'))
                          @component('back.components.alert')
                              @slot('type')
                                  success
                              @endslot
                              {!! session('product-ok') !!}
                          @endcomponent
                        @endif
                      <table>
                         <thead>
                          <tr>
                            <td>{{ __('message.photo') }}</td>
                            <td>{{ __('message.title') }}</td>
                            <td>{{ __('message.text') }}</td>
                            <td>{{ __('message.date') }}</td>
                          </tr>
                          </thead>
                          <tbody id="back-pannel">
                              @include('back.brick-standard')
                         </tbody>
                       </table>
                     </div>
                     {{ $news->links() }}
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
     BaseRecord.destroynews($(this).attr('id'));
     return false;
   });
 });
</script>

@endsection
