<?php

namespace App\Http\Controllers;

use App\Http\Requests\NoticeUpdateRequest;
use App\Models\Notice;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Notice $notice)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param Notice $notice
     * @return Application|Factory|View
     */
    public function show(Notice $notice)
    {
        return view( 'notices.view-single-notice' , [ 'notice' => $notice ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Notice $notice
     * @return Application|Factory|View
     */
    public function edit(Notice $notice)
    {
        return view('notices.edit-notice' , [ 'notice' => $notice ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Notice $notice
     * @return Application|RedirectResponse|Redirector
     */
    public function update(NoticeUpdateRequest $request, Notice $notice)
    {
        $mainNotice = Notice::findOrFail($notice->id);
        if ($request->input('title') || $request->input('body')){

            $mainNotice->update([
                'title' => $request->input('title'),
                'body' => $request->input('body')
            ]);
        }
        return redirect('/dashboard')->with('message','Notice updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Notice $notice
     * @return Response
     */
    public function destroy(Notice $notice)
    {
        //
    }
}
