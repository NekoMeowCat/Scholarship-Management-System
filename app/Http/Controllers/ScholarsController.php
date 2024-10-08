<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;


class ScholarsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.scholars');
    }

    public function verifiedScholars()
    {
        return view('admin.verified-scholars');
    }

    public function unverifiedScholars()
    {
        return view('admin.unverified-scholars');
    }

    public function graduatedScholars()
    {
        return view('admin.graduated-scholars');
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
        $student = Students::findOrFail($id);

        return view('admin.history', compact('student'));
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
