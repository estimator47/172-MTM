<?php

namespace App\Repositories;

use App\Models\ {
    Info,
    Teacher,
    Gallery,
    Message
};
use Illuminate\Support\Facades\DB;
class KidRepository
{
    /**
     * The Model instance.
     *
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $model_news;
    protected $model_teacher;
    protected $model_gallery;
    protected $model_message;



    /**
     * Create a new ProductRepository instance.
     *
     * @param  \
     */
    public function __construct(Info $news, Teacher $teacher, Gallery $gallery, Message $message)

    {
        $this->model_news = $news;
        $this->model_teacher = $teacher;
        $this->model_gallery = $gallery;
        $this->model_message = $message;

    }

    /**
     * Create a query for News.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function funcNews($request)
    {
        $query = $this->model_news
            ->select('id', 'name', 'info' , 'nameru', 'inforu' , 'image', 'click', 'created_at')
            ->LIMIT (6)
            ->orderBy('id', 'desc');
         return $query->get();
    }

    /**
     * Create a query for more News.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function funcNewsmore($request)
    {
            $query = $this->model_news
            ->select('id', 'name', 'info' , 'nameru', 'inforu' ,'image', 'click', 'created_at')
            ->offset(($request->more*3)+3)
            ->limit(3)
            ->orderBy('id', 'desc');
           return $query->get();
    }

    /**
     * Create a query for Teacher.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function funcSingle()
    {

        $query = $this->model_news
            ->select('id', 'name', 'info', 'nameru', 'inforu', 'image', 'click', 'created_at')
            ->limit(3)
            ->orderBy('click', 'desc');
        return $query->get();
    }

   /**
     * Create a query for Teacher.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function funcTeacher($request)
    {
        $query = $this->model_teacher
            ->select('id', 'name', 'occupation', 'info', 'nameru', 'occupationru', 'inforu', 'image')
            ->orderBy('id', 'asc');
        return $query->get();
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
     * Saving messages.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function message($request)
    {
        $this->model_message->name = $request->name;
        $this->model_message->phone = $request->phone;
        $this->model_message->message = $request->message;
        $this->model_message->bold = 0;
        $this->model_message->save();
    }

}
