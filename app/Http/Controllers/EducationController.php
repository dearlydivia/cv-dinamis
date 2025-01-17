<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Education.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // menyimpan data dari formulir education
        // dd($request);
        // Validasi input
        $Validasi=$request->validate([
            'universitas' => 'required|string|max:255',
            'jurusan' => 'required|string',
            'minat' => 'required|string',

        ]);

        // Simpan data ke database
        Education::create(
            $Validasi

        );

        return view('show');
    }

    /**
     * Display the specified resource.
     */
    public function show(Education $education)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Education $education)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Education $education)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Education $education)
    {
        //
    }
}
