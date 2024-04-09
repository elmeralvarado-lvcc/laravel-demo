<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
        return $request->input('name');
    }

    public function update(Request $request, string $id)
    {
        return response()->json([
            'id' => $id,
            'request' => $request->input('name'),
        ]);
    }
}
