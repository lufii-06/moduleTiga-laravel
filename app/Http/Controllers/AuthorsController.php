<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Author::all();
        return view("authors.index",compact("data"));
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
        $validatedData = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:authors,email,except,id',
        ]);
        Author::create([
            "name" => $request->name,
            "email" => $request->email,
        ]);
        return redirect()->back()->with('success', 'Data has been successfully saved!');
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
        $author = Author::findOrFail($id);
        try {
            $author->delete();
            return redirect()->route('authors.index')->with('success', 'Data has been successfully deleted!');
        } catch (\Exception $e) {
            return redirect()->route('authors.index')->with('error', 'Failed to delete data. Please try again.');
        };
    }
}