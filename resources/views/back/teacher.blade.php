@extends('back.layout')
@section('css')
<style>
#teacher-pannel img {
width: 120px;
}
</style>
@endsection

@section('main')
        <div class="row padding_body">
           <div class="col-md-12">
              <div class="box box-primary">
                 <div class="box-body">
                     <div id="spinner">
                         <a href="{{route('teachers.create')}}">
                             <button class="btn btn-primary"><i class="fa fa-plus"></i> {{ __('message.add-staff') }}</button>
                         </a>
                     </div>
                    <div class="table-responsive">
                        @if (session('teacher-ok'))
                          @component('back.components.alert')
                              @slot('type')
                                  success
                              @endslot
                              {!! session('teacher-ok') !!}
                          @endcomponent
                        @endif
                      <table>
                         <thead>
                          <tr>
                            <td>{{ __('message.photo') }}</td>
                            <td>{{ __('message.snn') }}</td>
                            <td>{{ __('message.occupation') }}</td>
                            <td>{{ __('message.inform') }}</td>
                          </tr>
                          </thead>
                          <tbody id="teacher-pannel">
                              @include('back.teacher-standard')
                         </tbody>
                       </table>
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
     BaseRecord.destroystaff($(this).attr('id'));
     return false;
   });
 });
</script>

@endsection
