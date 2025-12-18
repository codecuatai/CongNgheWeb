<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classes;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classes = Classes::all();
        return view('class.classes', compact('classes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('class.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'grade_level'  => 'required|in:Pre-K,Kindergarten',
            'grade_number' => 'required|integer|min:1|max:10',
        ]);
        Classes::create([
            'grade_level'  => $request->grade_level,
            'grade_number' => $request->grade_number,
        ]);

        return redirect()->route('classes.index')->with('success', 'Lớp học đã được thêm thành công!');
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
        $class = Classes::findOrFail($id);
        return view('class.edit', compact('class'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'grade_level'  => 'required|in:Pre-K,Kindergarten',
            'grade_number' => 'required|integer|min:1|max:10',
        ]);

        // 2️⃣ Tìm lớp cần cập nhật
        $class = Classes::findOrFail($id);

        // 3️⃣ Cập nhật dữ liệu
        $class->update([
            'grade_level'  => $request->grade_level,
            'grade_number' => $request->grade_number,
        ]);

        // 4️⃣ Quay về trang danh sách
        return redirect()->route('classes.index')
            ->with('success', 'Cập nhật lớp học thành công!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $class = Classes::findOrFail(($id));
        $class->delete();
        return redirect()->route('classes.index')->with('success', 'Xóa lớp học thành công');
    }
}
