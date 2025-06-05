<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['name' => 'required']);
        Category::create($request->all());
        return redirect()->route('categories.index')->with('success', 'Category added.');
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
    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate(['name' => 'required']);
        $category->update($request->all());
        return redirect()->route('categories.index')->with('success', 'Category updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Category deleted.');
    }

    public function printPdf()
    {
        $categories = \App\Models\Category::all(); // Pastikan model Category sudah di-use
        $data = [
            'title' => 'Daftar Kategori Produk',
            'date' => date('d/m/Y'),
            'categories' => $categories
        ];

        // Sesuaikan path view jika Anda ingin menempatkan file PDF di subfolder
        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('categories/categorypdf', $data); // Asumsi file di views/categorypdf.blade.php
        $pdf->setPaper('A4', 'portrait');

        return $pdf->stream('Data_Kategori.pdf', ["Attachment" => false]);
    }
}
