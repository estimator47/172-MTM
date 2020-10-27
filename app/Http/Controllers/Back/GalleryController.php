<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;


use App\ {
   Http\Controllers\Controller,
   Repositories\AdminRepository,
   Http\Controllers\Traits\Indexable,
   Models\Gallery
};

class GalleryController extends Controller
{
     use Indexable;
     /**
     * The Controller instance.
     *
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $repository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */



    public function __construct(AdminRepository $repository)
    {
        $this->repository = $repository;
        $this->namespace = 'back';
    }


    /**
     * Create a new view for creating a new Staff information in storage.
     *
     * @param  ...
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('back.galleries.create');
    }

    /**
     * Upload a new image for creating a new Staff information in storage.
     *
     * @param  ...
     * @return \Illuminate\Http\Response
     */
    public function uploadGal(Request $request)
    {
        $file = $request->image;
        $filename = date('YmdHis') . $file->getClientOriginalName();
        $file->move(public_path() . '/images/gallery/', $filename);
        return view('back.galleries.create', ['image' => $filename]);
    }

    /**
     * Store a newly created Staff information in storage.
     *
     * @param
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->repository->storePhoto($request);

        $lang = App::getLocale();
        if ($lang == 'uz') $text = "Yangi rasm qo'shildi";
        else $text = 'Новое фото добавлены';

       return redirect(route('rasm'))->with('gallery-ok', $text);
    }


    /**
     * Delete the specified resource in storage.
     *
     * @param  \App\Http\Requests\TeacherRequest $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Gallery $gallery)
    {
        $gallery->delete();

        unlink($_SERVER['DOCUMENT_ROOT'] ."/public/images/gallery/" .$gallery->image);

        return $this->gallery($request);
    }

}
