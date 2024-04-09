<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

// Introduction
// https://laravel.com/docs/10.x/filesystem#introduction

// Configuration
// https://laravel.com/docs/10.x/filesystem#configuration
Route::get("/path", function () {
    // dd(storage_path('app/public'));
    dd(public_path('storage'));
});

// The Local Driver
// https://laravel.com/docs/10.x/filesystem#the-local-driver
// Route::post('/upload', function (Request $request) {
//     $file = $request->file;
//     Storage::disk('local')->put('/', $file);
// });

// The Public Disk
// https://laravel.com/docs/10.x/filesystem#the-public-disk
// Route::post('/upload', function (Request $request) {
// $file = $request->file;
// $name = $file->getClientOriginalName();
// Storage::put('/avatars', $file);
// return asset('avatars/Qbiikl3DOuvMMWp6paAEqmj529Wvj220hZ0NZNNm.jpg');
// });

// Obtaining Disk Instances
// https://laravel.com/docs/10.x/filesystem#obtaining-disk-instances
// Route::post('/upload', function (Request $request) {
//     $file = $request->file;
//     return Storage::disk('public')->put('/', $file);
//     // Storage::put('/', $file);
// });

// Retrieving Files
// https://laravel.com/docs/10.x/filesystem#retrieving-files
// Route::post('/upload', function (Request $request) {
//     dd(Storage::get('YanX5an2VYGI1IPULCx924AZzVjyFqz4cekZvR8G.jpg'));
// });

// Route::post('/jsonUpload', function (Request $request) {
//     $file = $request->file;
//     return Storage::put('/', $file);
//     // dd(Storage::json('YanX5an2VYGI1IPULCx924AZzVjyFqz4cekZvR8G.jpg'));
// });

// Route::get('/jsonRetrieve', function (Request $request) {
//     if (Storage::exists('2V0n3VGvjQBrf1UMaeJutS6kNc4is9YmgrYIB7b5.json')) {
//         dd(Storage::json('2V0n3VGvjQBrf1UMaeJutS6kNc4is9YmgrYIB7b5.json'));
//     }
//     return "No file";
// });

// Downloading Files
// https://laravel.com/docs/10.x/filesystem#downloading-files
// Route::get('/download', function (Request $request) {
//     return Storage::download('YanX5an2VYGI1IPULCx924AZzVjyFqz4cekZvR8G.jpg');
// });

// File URLs
// https://laravel.com/docs/10.x/filesystem#file-urls
// Route::get('/upload', function (Request $request) {
//     dd(Storage::url('2V0n3VGvjQBrf1UMaeJutS6kNc4is9YmgrYIB7b5.json'));
// });

// Storing Files
// https://laravel.com/docs/10.x/filesystem#storing-files
// Route::post('/upload', function (Request $request) {
//     $file = $request->file;
//     return Storage::put('/public', $file);
// });

// Copying and Moving Files
// https://laravel.com/docs/10.x/filesystem#copying-moving-files
// Route::get('/copy', function (Request $request) {
//     Storage::copy('2V0n3VGvjQBrf1UMaeJutS6kNc4is9YmgrYIB7b5.json', 'public/information.json');
// });

// Route::get('/move', function (Request $request) {
//     Storage::move('2V0n3VGvjQBrf1UMaeJutS6kNc4is9YmgrYIB7b5.json', 'public/2V0n3VGvjQBrf1UMaeJutS6kNc4is9YmgrYIB7b5.json');
// });

// File Uploads
// https://laravel.com/docs/10.x/filesystem#file-uploads
// Route::post('/upload', [App\Http\Controllers\UserAvatarController::class, 'update']);
// Route::post('/upload', function (Request $request) {
// $path = $request->file('avatar')->storeAs(
//     'avatars',
//     $request->file('avatar')->getClientOriginalName()
// );
// $path = Storage::putFileAs(
//     'avatars',
//     $request->file('avatar'),
//     $request->file('avatar')->getClientOriginalName()
// );
// return $path;
// });

// Deleting Files
// https://laravel.com/docs/10.x/filesystem#deleting-files
// Route::delete('/delete', function () {
//     return Storage::delete('avatars/PS14Or6NZctJqdMGUVhhmXVtuCjbTU1WrQBdqrGc.jpg');
// });

// Route::delete('/deleteMultipleFiles', function () {
//     return Storage::delete(['avatars/Lakers.png', 'avatars/Panther.jpg']);
// });
