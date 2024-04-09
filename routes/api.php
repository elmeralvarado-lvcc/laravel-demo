<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Http Request
// https://laravel.com/docs/10.x/requests#introduction

// Accessing the Request
// https://laravel.com/docs/10.x/requests#accessing-the-request
Route::get("/user", [UserController::class, "store"]);

// Route::get("/user", function (Request $request) {
//     return $request->input('name');
// });

// Dependency Injection and Route Parameters
// https://laravel.com/docs/10.x/requests#dependency-injection-route-parameters
// Route::put('/user/{id}', [UserController::class, 'update']);

// Retrieving Input
// Retrieving All Input Data
// https://laravel.com/docs/10.x/requests#retrieving-all-input-data
// Route::put('/user/{id}', function (Request $request, string $id) {
//     $collection = $request->collect();
//     $transformedCollection = $collection->map(function ($value, $key) {
//         if ($key == 'age') {
//             return (int) $value;
//         }
//         return strtolower($value);
//     });
//     dd($transformedCollection);
// });

// Retrieving an Input Value
// https://laravel.com/docs/10.x/requests#retrieving-an-input-value
// Route::get("/user", function (Request $request) {
//     dd($request->input());
// });

// Retrieving Input From the Query String
// https://laravel.com/docs/10.x/requests#retrieving-input-from-the-query-string
// Route::get("/user", function (Request $request) {
//     dd($request->query());
// });

// Retrieving Input via Dynamic Properties
// https://laravel.com/docs/10.x/requests#retrieving-input-via-dynamic-properties
// Route::post("/user", function (Request $request) {
//     return $request->age;
// });

// Retrieving Cookies From Requests
// https://laravel.com/docs/10.x/requests#retrieving-cookies-from-requests
// Route::post("/user", function (Request $request) {
//     return $request->cookie('age');
// });

// Retrieving Uploaded Files
// https://laravel.com/docs/10.x/requests#retrieving-uploaded-files
// Route::post("/upload", function (Request $request) {
//     if ($request->hasFile("file")) {
//         dd($request->file);
//     }
//     return "Missing File";
// });

// Storing Uploaded Files
// https://laravel.com/docs/10.x/requests#storing-uploaded-files
// Route::post("/upload", function (Request $request) {
//     if ($request->hasFile("file")) {
//         $file = $request->file;
// return $request->file->store('avatars');
// return $request->file->storeAs('avatars', $file->getClientOriginalName());
//     }
//     return "Missing File";
// });
