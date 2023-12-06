<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Scholarships;

class ScholarshipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    public function sagap()
    {
        return view('admin.sagap');
    }

    public function sunlife()
    {
        return view('admin.sunlife');
    }

    public function sm()
    {
        return view('admin.sm');
    }

    public function ched()
    {
        return view('admin.ched');
    }

    public function tes()
    {
        return view('admin.tes');
    }

    public function tesda()
    {
        return view('admin.tesda');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
