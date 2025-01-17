<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\khachhangs;

class KhachhangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $khachhangs = khachhangs::paginate(5);

        return view('khachhang.layout', compact('khachhangs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        khachhangs::create($request->all());
        return redirect()->route('khachhangs.index')->with('success','Tham thanh cong');
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
