<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;


use App\ {
   Http\Controllers\Controller,
   Repositories\AdminRepository,
   Http\Controllers\Traits\Indexable,
   Http\Requests\TeacherRequest,
   Models\Teacher
};

class TeacherController extends Controller
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
       return view('back.teachers.create');
    }

    /**
     * Upload a new image for creating a new Staff information in storage.
     *
     * @param  ...
     * @return \Illuminate\Http\Response
     */
    public function uploadTeach(Request $request)
    {
        $file = $request->image;
        $filename = date('YmdHis') . $file->getClientOriginalName();
        $file->move(public_path() . '/images/hodim/', $filename);
        return view('back.teachers.create', ['image' => $filename]);
    }

    /**
     * Store a newly created Staff information in storage.
     *
     * @param  \App\Http\Requests\TeacherRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeacherRequest $request)
    {
       $this->repository->storeStaff($request);

        $lang = App::getLocale();
        if ($lang == 'uz') $text = "Yangi Hodim qo'shildi";
        else $text = 'Новый  сотрудник добавлено';

       return redirect(route('tarbiyachi'))->with('teacher-ok', $text);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Http\Requests\TeacherRequest $request
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
       return view('back.teachers.edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\TeacherRequest $request
     * @return \Illuminate\Http\Response
     */
    public function update(TeacherRequest $request, Teacher $teacher)
    {
       $this->repository->updateStaff($request, $teacher);

        $lang = App::getLocale();
        if ($lang == 'uz') $text = "Hodim haqida malumot yangilandi";
        else $text = 'Информатсии сотрудника были изменены';

       return redirect(route('tarbiyachi'))->with('teacher-updated', $text);
    }


    /**
     * Delete the specified resource in storage.
     *
     * @param  \App\Http\Requests\TeacherRequest $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Teacher $teacher)
    {
        $teacher->delete();

        unlink($_SERVER['DOCUMENT_ROOT'] ."/public/images/hodim/" .$teacher->image);

        return $this->teacher($request);
    }

}
