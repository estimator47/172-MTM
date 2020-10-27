
@foreach($photos as $gallery) 
          <div class="col-md-3 col-lg-2 ftco-animate">
            <div class="blog-entry">
              <img src="{{ asset('public/images/gallery/' .  $gallery->image) }}" class="align-items-end block-20 d-flex">
            </div>
            <div class="remove-button">
            <a class="btn btn-danger listbuttonremove" id="{{$gallery->id}}" href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
            </div>
          </div>
@endforeach