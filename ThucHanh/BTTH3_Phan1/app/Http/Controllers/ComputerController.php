<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\computer;

class ComputerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $computers = computer::all();
        return view('computer.computer', compact('computers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('computer.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([]);
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
        $computer = computer::findOrFail($id);
        return view('computer.edit', compact('computer'));
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
        $computer = computer::findOrFail($id);
        $computer->delete();
        return redirect()->route('computers.index')->with('success', 'Xóa lớp học thành công');
    }
}
