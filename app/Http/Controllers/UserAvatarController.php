<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserAvatarController extends Controller
{
    public function update(Request $request)
    {
        // $path = $request->file('avatar')->store('avatars');
        $path = Storage::putFile('avatars', $request->file('avatar'));
        dd($path);
    }
}
