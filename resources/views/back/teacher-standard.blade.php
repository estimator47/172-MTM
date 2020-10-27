@foreach($teachers as $teacher)
<tr style="text-align: center;">
<td><img src="{{ asset('public/images/hodim/' . $teacher->image) }}" alt /></td>
<td>@if(App::isLocale('ru')) {{{$teacher->nameru}}} @else  {{$teacher->name}}@endif</td>
<td>@if(App::isLocale('ru')) {{{$teacher->occupationru}}} @else  {{$teacher->occupation}}@endif</td>
<td>@if(App::isLocale('ru')) {{{$teacher->inforu}}} @else  {{$teacher->info}}@endif</td>
    <td class="center widthbutton">
        <a class="btn btn-danger listbuttonremove" id="{{$teacher->id}}" href="#">
            <i class="fa fa-trash-o" aria-hidden="true"></i>
        </a>
    </td>
    <td class="col-md-6 col-sm-6 col-xs-6 center widthbutton">
        <a class="btn btn-primary listbuttonupdate" href="{{route('teachers.edit', $teacher->id)}}">
            <i class="fa fa-edit" aria-hidden="true"></i>
        </a>
    </td>
</tr>
@endforeach

