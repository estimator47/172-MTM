<?php

namespace App\Repositories;

use App\Models\ {
    Info,
    Teacher,
    Gallery,
    Message
};


class AdminRepository
{
    /**
     * The Model instance.
     *
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $model_news;
    protected $model_teacher;
    protected $model_gallery;


    /**
     * Create a new Card Repository instance.
     *
     * @param  \App\Models\

     */
    public function __construct(Info $news, Teacher $teacher, Gallery $gallery)
    {
        $this->model_news = $news;
        $this->model_teacher = $teacher;
        $this->model_gallery = $gallery;


    }

   /**
     * Create a query for news.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function funcNews($request)
    {
        $query = $this->model_news
            ->select('id', 'name', 'info', 'nameru', 'inforu', 'image', 'created_at', 'click')
            ->orderBy('id', 'asc');
        return $query->get();
    }


     /**
     * Store a newly created news in storage.
     *
     * @param  \App\Http\Requests\NewRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store($request)
    {
       //Info::create($request->all());
        $this->model_news->name = $request->name;
        $this->model_news->info = $request->info;
        $this->model_news->nameru = $request->nameru;
        $this->model_news->inforu = $request->inforu;
        $this->model_news->image = $request->image;
        $this->model_news->click = 0;
        $this->model_news->save();
    }

    /**
     * update selected news.
     *
     * @return void
     */
    public function update($request, $id)
    {

        $new = $this->model_news::find($id);
        $new->name = $request->name;
        $new->info = $request->info;
        $new->nameru = $request->nameru;
        $new->inforu = $request->inforu;
        $new->image = $request->image;
        $new->save();
    }

     /**
     * delete selected news.
     *
     * @return void
     */
     public function delete($new)
    {
        $new->delete();

        unlink($_SERVER['DOCUMENT_ROOT'] ."/public/images/news/" .$new->image);
    }

     /**
     * Create a query for Staff information.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function funcTeacher($request)
    {
        $query = $this->model_teacher
            ->select('id', 'name', 'occupation', 'info' , 'nameru', 'occupationru', 'inforu', 'image')
            ->orderBy('id', 'asc');
        return $query->get();
    }

    /**
     * Store a newly created Staff information in storage.
     *
     * @param  \App\Http\Requests\TeacherRequest $request
     * @return \Illuminate\Http\Response
     */
    public function storeStaff($request)
    {
       Teacher::create($request->all());
    }

    /**
     * update selected news.
     *
     * @return void
     */
    public function updateStaff($request, $teacher)
    {

        $teacher->name = $request->name;
        $teacher->occupation = $request->occupation;
        $teacher->info = $request->info;
        $teacher->nameru = $request->nameru;
        $teacher->occupationru = $request->occupationru;
        $teacher->inforu = $request->inforu;
        $teacher->image = $request->image;
        $teacher->save();
    }


    /**
     * Create a query for Gallery.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function funcGallery($request)
    {
        $query = $this->model_gallery
            ->select('id', 'image')
            ->orderBy('id', 'desc');
        return $query->get();
    }

    /**
     * Store a newly created Gallery photo in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function storePhoto($request)
    {
       Gallery::create($request->all());
    }

    /**
     * Create a query for Message.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function funcMessage($request)
    {
        $query = Message::select('id', 'name', 'phone', 'message', 'created_at', 'bold')
            ->orderBy('id', 'desc');
        return $query->get();
    }


   /**
     * delete selected news.
     *
     * @return void
     */
    /* public function deleteMessage($message)
    {
        $message->delete();
    }*/


}
