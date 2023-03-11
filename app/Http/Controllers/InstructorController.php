<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use App\Repository\InstructorRepositoryInterface;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    private $instructorRepository;

    public function __construct(InstructorRepositoryInterface $instructorRepository)
    {
        $this->instructorRepository = $instructorRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->instructorRepository->all(['*'],['user']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $instructor = $this->instructorRepository->createUserable($request->all());
        return $instructor;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function show(Instructor $instructor)
    {
        return $this->instructorRepository->findById($instructor->id,['*'] ,['user']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Instructor $instructor)
    {
        $instructor = $this->instructorRepository->updateUserable($instructor->id,$request->all());
        return $instructor;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Instructor $instructor)
    {
        return $this->instructorRepository->deleteUserable($instructor->id);
    }
}
