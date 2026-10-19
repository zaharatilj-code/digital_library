<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        return response()->json(Author::all(), 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required', // Tambahan Minggu 5
            'bio' => 'required',
            'tanggal_lahir' => 'required|date',
        ]);

        $author = Author::create($request->all());
        return response()->json($author, 201);
    }

    public function show($id)
    {
        $author = Author::findOrFail($id);
        return response()->json($author, 200);
    }

    public function update(Request $request, $id)
    {
        $author = Author::findOrFail($id);
        $author->update($request->all());
        return response()->json($author, 200);
    }

    public function destroy($id)
    {
        Author::destroy($id);
        return response()->json(null, 204);
    }
}