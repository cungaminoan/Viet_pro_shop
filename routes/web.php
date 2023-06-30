<?php

use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\Admin\Product\ProductController;
use App\Http\Controllers\Admin\User\AdminController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//
//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/test',function (){
//    return "<h2>shyawannalove</h2>";
//});
//Route::get('/form',function (){
//    return "<form method='post'>
//            <input type='text'>
//            <button type='submit'>Login</button>
//            ".csrf_field();"
//
//</form>";
//});
//
//Route::post('/form',function (){
//    return "success";
//});

/*
Route::group(['prefix'=>'/admin'],function (){
    Route::get('/',function (){
        return "admin";
    });
    Route::get('/product',function (){
        return "product";
    });
    Route::get('user',function (){
        return "user";
    });
});
*/

Route::get('/test',[TestController::class,"test"]);Route::get('/test1',[TestController::class,"test1"]);
Route::post('/test',[TestController::class,"testForm"]);

Route::get('/login',[AuthController::class,"getLogin"])->middleware("check-login")->name('login');
Route::post('/login',[AuthController::class,"postLogin"]);

Route::group(["prefix" =>"/admin",],function(){
    Route::get("/", [AdminController::class,"index"]);
    Route::get("/logout",function (){
        return "logout";
    });
    Route::group(["prefix" => "/products"], function (){
        Route::get("/",[ProductController::class,"index"]);
        Route::get("/create",[ProductController::class,"create"]);
        Route::post("/store",[ProductController::class,"store"]);
        Route::get("/edit",[ProductController::class,"edit"]);
        Route::post("/update",[ProductController::class,"update"]);
        Route::get("/delete",function (){
            return "delete";
        });
    });
});

Route::group(["prefix" =>"/users"],function(){
    Route::get("/", function (){
        return "users";
    });
    Route::get("/logout",function (){
        return "user_logout";
    });
    Route::group(["prefix" => "/product"], function (){
        Route::get("/",function (){
            return "user_index";
        });
        Route::get("/create",function (){
            return "User_create";
        });
        Route::post("/store",function (){
            return "user_store";
        });
        Route::get("/edit",function (){
            return "user_edit";
        });
        Route::post("/update",function (){
            return "user_update";
        });
        Route::get("/delete",function (){
            return "delete";
        });
    });
});





//Route::get('/admin',function (){
//    return "admin";
//});
//Route::get('/admin/logout',function (){
//    return "logout";
//});
//Route::get('admin/product',function (){
//    return "index";
//});
//Route::get('admin/product/create',function (){
//    return "create";
//});
//Route::post('/admin/product/store',function (){
//    return "store";
//});
//Route::get('/admin/product/edit',function (){
//    return "edit";
//});
//Route::post('/admin/product/update',function (){
//    return "update";
//});
//Route::get('/admin/product/delete',function (){
//    return "delete";
//});





