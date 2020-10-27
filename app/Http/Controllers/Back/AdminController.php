<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;


use App\ {
   Http\Controllers\Controller,
   Repositories\AdminRepository,
   Http\Controllers\Traits\Indexable,
   Http\Requests\NewRequest,
   Models\Info,
   Models\Message
};

class AdminController extends Controller
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
     * Show the application index page for admin.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\JsonResponse|\Illuminate\View\View
     */

    public function index(Request $request)
    {
        $news = Info::paginate(10);

        if ($request->ajax()) {
            return response()->json([
                'table' => view($this->namespace . ".brick-standard", ['news' => $news])->render(),
            ]);
        }

        //submit
        return view($this->namespace . '.index', ['news' => $news]);
    }

    /**
     * Show the application single message page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function singleNews($id, Info $new)
    {
        $new = $new->find($id);

        return view('back.single-news', compact('new'));
    }
    /**
     * Create a new view for creating a new news in storage.
     *
     * @param  ...
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.news.create');
    }

    /**
     * Upload a new image for creating a new news in storage.
     *
     * @param  ...
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {
        $file = $request->image;
        $filename = date('YmdHis') . $file->getClientOriginalName();
        $file->move(public_path() . '/images/news/', $filename);
        return view('back.news.create', ['image' => $filename]);
    }

    /**
     * Store a newly created news in storage.
     *
     * @param  \App\Http\Requests\NewRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewRequest $request)
    {
        $this->repository->store($request);

        $lang = App::getLocale();
        if ($lang == 'uz') $text = "Yangilik yuklandi";
        else $text = 'Новости добавлены';

        return redirect(route('bogcha'))->with('news-ok', $text);
    }
    /**
     * Edit a new view for selected news.
     *
     * @return void
     */
    public function edit($id)
    {
        $new = Info::find($id);
        return view('back.news.edit', compact('new'));
    }

    /**
     * Update selected news.
     *
     * @return void
     */
    public function update(NewRequest $request, $new)
    {
        $this->repository->update($request, $new);

        $lang = App::getLocale();
        if ($lang == 'uz') $text = "Yangilik ozgartirildi";
        else $text = 'Новости были изменены';

        return redirect(route('bogcha'))->with('news-ok', $text);
    }
    /**
     * Delete selected news.
     *
     * @return void
     */
    public function destroy(Request $request, $id)
    {
        $new = Info::find($id);
        $this->repository->delete($new);
        return $this->index($request);
    }

    /**
     * Show the application message page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function message(Request $request)
    {
        $messages = $this->repository->funcMessage($request);

        if ($request->ajax()) {
            return response()->json([
                'table' => view($this->namespace . ".message-standard", ['messages' => $messages])->render(),
            ]);
        }

        //submit
        return view($this->namespace . '.message', ['messages' => $messages]);
    }

    /**
     * Remove one from message.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function remove(Request $request)
    {

        Message::find($request->id)->delete();
    }

    /**
     * Show the application single message page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function messageSingle($id, Message $model_message)
    {


        $message = $model_message->find($id);
        $message->bold = "1";
        $message->save();
        return view('back.messagesingle', compact('message'));
    }


}
