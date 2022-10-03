<?php

use App\Http\Controllers\BarangController;
use App\Models\Barang;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;
use Symfony\Component\HttpKernel\DataCollector\RouterDataCollector;

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

Route::get('/',function(){
    $active = 'home';
    return view('home',compact(
        'active'
    ));
});
// Route::get('loading',[BarangController::class,'jenis']);

// Route::get('?active=dasar',function(){
//     return view('/',[
//         'active' => 'dasar'
//     ]);
// });

// Route::resource('/',BarangController::class);

// Ini adalah rute pelarian untuk melakukan CRUD 
// karena rute '/' tidak mampu untuk menerima method selain GET
Route::resource('barang',BarangController::class);

Route::get('downloadPDF/{active}',[BarangController::class,'downloadPDF']);


