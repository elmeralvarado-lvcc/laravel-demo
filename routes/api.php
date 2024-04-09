<?php

use App\Http\Controllers\Controller;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Basic routing
// https://laravel.com/docs/10.x/routing#basic-routing
Route::get('/greeting', function () {
    return 'Hello World';
});

// Route Http verb get, post, put, patch, delete, any, match
// https://laravel.com/docs/10.x/routing#available-router-methods
// Route::get("get", function () {
//     return "This is a GET endpoint";
// });

// Route::post('post', function () {
//     return "This is a POST endpoint";
// });

// Route::put('put', function () {
//     return "This is a PUT endpoint";
// });

// Route::patch('patch', function () {
//     return "This is a PATCH endpoint";
// });

// Route::delete("delete", function () {
//     return "This is a DELETE endpoint";
// });

// Route::match(["get", "post"], "/user", function () {
//     return "This endpoint accepts GET and POST Http request";
// });

// Route::any("/user/profile", function () {
//     return "This endpoint accepts ALL HTTP verb request";
// });

// Artisan commands for route
// https://laravel.com/docs/10.x/routing#the-route-list

// Dependency injection
// https://laravel.com/docs/10.x/routing#dependency-injection
// Route::get("/user/information", function (Request $request) {
//     return $request->all();
// });

// Route parameters and dependendy injection
// https://laravel.com/docs/10.x/routing#required-parameters
// https://laravel.com/docs/10.x/routing#parameters-and-dependency-injection
// Route::get("user/{id}", function (string $id) {
//     return "User id: $id";
// });

// Route::get("/posts/{post}/comments/{comment}", function (string $post, string $comment) {
//     return "Post $post, Comment $comment";
// });

// Route::get("user/{id}", function (Request $request, string $id) {
//     return response()->json(
//         [
//             'request' => $request->all(),
//             'id' => $id
//         ]
//     );
// });

// Optional parameters
// https://laravel.com/docs/10.x/routing#parameters-optional-parameters
// Route::get("/user/{name?}", function (?string $name = "Elmerrrr") {
//     return $name;
// });

// Regular expression constraints
// https://laravel.com/docs/10.x/routing#parameters-regular-expression-constraints
// Route::get("/user/{name}", function (string $name) {
//     return $name;
// })->where("name", "[A-Za-z]+");

// Route::get("/user/{id}", function (string $id) {
//     return $id;
// })->where("id", "[0-9]+");

// Route::get("/user/{name}", function (string $name) {
//     return $name;
// })->where("name", "[A-Za-z0-9]+");

// Named routes
// https://laravel.com/docs/10.x/routing#named-routes
// Route::get("/user/profile", function () {
//     return "User profile endpoint";
// })->name("profile");

// Route groups middleware, controller
// https://laravel.com/docs/10.x/routing#route-groups
// Route::middleware(['auth'])->group(function () {
//     Route::get("/user/profile", function () {
//         return "/user/profile";
//     });

//     Route::get("get", function () {
//         return "This is a GET endpoint";
//     });

//     Route::post('post', function () {
//         return "This is a POST endpoint";
//     });

//     Route::put('put', function () {
//         return "This is a PUT endpoint";
//     });

//     Route::patch('patch', function () {
//         return "This is a PATCH endpoint";
//     });

//     Route::delete("delete", function () {
//         return "This is a DELETE endpoint";
//     });
// });

// Route::get('/', function () {
//     return "/";
// })->middleware(RedirectIfAuthenticated::class);

// Route::get("get", function () {
//     return "This is a GET endpoint";
// })->middleware(RedirectIfAuthenticated::class);

// Route::post('post', function () {
//     return "This is a POST endpoint";
// })->middleware(RedirectIfAuthenticated::class);

// Route::put('put', function () {
//     return "This is a PUT endpoint";
// })->middleware(RedirectIfAuthenticated::class);

// Route::patch('patch', function () {
//     return "This is a PATCH endpoint";
// })->middleware(RedirectIfAuthenticated::class);

// Route::delete("delete", function () {
//     return "This is a DELETE endpoint";
// })->middleware(RedirectIfAuthenticated::class);

// Route::controller(OrderController::class)->group(function () {
//     Route::get('/orders/{id}', 'show');
//     Route::post('/orders', 'store');
// });

// Route prefix
// https://laravel.com/docs/10.x/routing#route-group-prefixes
// Route::prefix('admin')->group(function () {
//     Route::get('/users', function () {
//         return "Users";
//     });

//     Route::get('/orders', function () {
//         return "Orders";
//     });
// });

// Route name prefixes
// https://laravel.com/docs/10.x/routing#route-group-name-prefixes
// Route::name('admin.')->group(function () {
//     Route::get('/users', function () {
//         return "Users";
//     })->name('users');

//     Route::get('/orders', function () {
//         return "Orders";
//     })->name('orders');
// });

// Route fallback
// https://laravel.com/docs/10.x/routing#fallback-routes
// Route::get('/greeting', function () {
//     return 'Hello World';
// });

// Route::fallback(function () {
//     return "This api is not define";
// });

// Route caching
// https://laravel.com/docs/10.x/routing#route-caching
