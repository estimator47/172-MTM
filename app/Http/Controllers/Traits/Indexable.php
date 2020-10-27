<?php

namespace App\Http\Controllers\Traits;

use Illuminate\Http\Request;

trait Indexable
{
    /**
     * The Repository instance.
     *
     * @var \App\Repositories\KidRepository
     * @var \App\Repositories\AdminRepository
     */
    protected $repository; //KidRepository or AdminRepository

    /**
     * The namespace
     *
     * @var string
     */
    protected $namespace; //front or back

    /**
     * Show the application about page.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\JsonResponse|\Illuminate\View\View
     */

    public function teacher(Request $request)
    {
        $teachers = $this->repository->funcTeacher($request);

        if ($request->ajax()) {
            return response()->json([
                'table' => view($this->namespace . ".teacher-standard", ['teachers' => $teachers])->render(),
            ]);
        }

        //submit
        return view($this->namespace . '.teacher', ['teachers' => $teachers]);
    }

    /**
     * Show the application teacher page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function gallery(Request $request)
    {
        $photos = $this->repository->funcGallery($request);

        if ($request->ajax()) {
            return response()->json([
                'table' => view($this->namespace . ".gallery-standard", ['photos' => $photos])->render(),
            ]);
        }

        //submit
        return view($this->namespace . '.gallery', ['photos' => $photos]);
    }



}
