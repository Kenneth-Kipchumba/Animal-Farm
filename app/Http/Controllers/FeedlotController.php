<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFeedlotRequest;
use App\Http\Requests\UpdateFeedlotRequest;
use App\Models\Feedlot;

class FeedlotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['feedlots'] = Feedlot::paginate(10);

        return view('feedlots.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFeedlotRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFeedlotRequest $request)
    {
        $feedlot = [
            'name'    => $request->input('name'),
            'purpose' => $request->input('purpose'),
        ];

        //dd($feedlots);
        if (Feedlot::create($feedlot))
        {
            return redirect('feedlots')->with('success', 'Feedlot added Successfully.');
        }

        return redirect('feedlots')->with('error', 'Something went wrong. Try again');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Feedlot  $feedlot
     * @return \Illuminate\Http\Response
     */
    public function show(Feedlot $feedlot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Feedlot  $feedlot
     * @return \Illuminate\Http\Response
     */
    public function edit(Feedlot $feedlot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFeedlotRequest  $request
     * @param  \App\Models\Feedlot  $feedlot
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFeedlotRequest $request, Feedlot $feedlot)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Feedlot  $feedlot
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feedlot $feedlot)
    {
        //
    }
}
