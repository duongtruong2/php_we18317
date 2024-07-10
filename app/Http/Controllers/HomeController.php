<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd(12345);
        // $title = 'Trang chu';
        // $text = 'Day laf trang chu';
        // return view('clients.index',['title' => $title]);

        $data=[];
        $data['title'] = "Trang chu";
        $data["text"] = "Day laf trang chu";
        $data["content"] = "<U>WD18317</U>";
        $data["dataArr"] = [
            'Item 1',
            'Item 2',
            'Item 3',
        ];
        return view('clients.index', $data);

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
