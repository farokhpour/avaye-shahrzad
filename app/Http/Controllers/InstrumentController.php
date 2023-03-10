<?php

namespace App\Http\Controllers;

use App\Models\Instrument;
use App\Repository\InstrumentRepositoryInterface;
use Illuminate\Http\Request;

class InstrumentController extends Controller
{
    private $instrumentRepository;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(InstrumentRepositoryInterface $instrumentRepository)
    {
        $this->instrumentRepository = $instrumentRepository;
    }
    public function index()
    {
        return $this->instrumentRepository->all(['*']);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $instrument = $this->instrumentRepository->create($request->all());
        return $instrument;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Instrument  $instrument
     * @return \Illuminate\Http\Response
     */
    public function show(Instrument $instrument)
    {
        return $this->instrumentRepository->findById($instrument->id); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Instrument  $instrument
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Instrument $instrument)
    {
        return $this->instrumentRepository->update($instrument->id,$request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Instrument  $instrument
     * @return \Illuminate\Http\Response
     */
    public function destroy(Instrument $instrument)
    {
        return $this->instrumentRepository->deleteById($instrument->id);
    }
}
