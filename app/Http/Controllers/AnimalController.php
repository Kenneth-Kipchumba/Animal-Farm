<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAnimalRequest;
use App\Http\Requests\UpdateAnimalRequest;
use App\Models\Animal;
use Carbon\Carbon;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['animals'] = Animal::paginate(10);

        return view('animals.index', $data);
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
     * @param  \App\Http\Requests\StoreAnimalRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAnimalRequest $request)
    {
        $animals = [
            'name'    => $request->input('name'),
            'tag' => $request->input('tag'),
            'breed' => $request->input('breed'),
            'sex' => $request->input('sex'),
            'buying_weight' => $request->input('buying_weight'),
            'buying_price' => $request->input('buying_price'),
            'brought_from' => $request->input('brought_from'),
            'initial_animal_image' => $request->input('initial_animal_image'),
            'brief_history' => $request->input('brief_history'),
            'buying_date' => Carbon::parse($request->input('buying_date')),
        ];

        dd($animals);
        if (Animal::create($animals))
        {
            return redirect('animals')->with('success', 'Animal added Successfully.');
        }

        return redirect('animals')->with('error', 'Something went wrong. Try again');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function show(Animal $animal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function edit(Animal $animal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAnimalRequest  $request
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAnimalRequest $request, Animal $animal)
    {
        $animals = [
            'name'    => $request->input('name'),
            'tag' => $request->input('tag'),
            'breed' => $request->input('breed'),
            'sex' => $request->input('sex'),
            'buying_weight' => $request->input('buying_weight'),
            'selling_weight' => $request->input('selling_weight'),
            'brought_from' => $request->input('brought_from'),
            'sold_to' => $request->input('sold_to'),
            'initial_animal_image' => $request->input('initial_animal_image'),
            'current_animal_image' => $request->input('current_animal_image'),
            'brief_history' => $request->input('brief_history'),
            'selling_date' => $request->input('selling_date'),
        ];

        //dd($data);
        if ($animals->update($animals))
        {
            return redirect()->back()->with('success', 'Animal Details updated Successfully.');
        }

        return redirect()->back()->with('error', 'Something went wrong. Try again');    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Animal $animal)
    {
         if ($animal->delete())
        {
            return redirect()->back()->with('success', 'Animal removed from the system successfully');
        }

        return redirect()->back()->with('error', 'Something went wrong. Try again');
    }
}
