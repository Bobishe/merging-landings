<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutingController;
use App\Http\Controllers\SendController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/test', [App\Http\Controllers\RoutingController::class, 'test']);   //test
Route::get('/personal_data', [App\Http\Controllers\RoutingController::class, 'personal_data']);   //Персональная информация
Route::get('/company', [App\Http\Controllers\RoutingController::class, 'company']);   //Компании
Route::get('/contacts', [App\Http\Controllers\RoutingController::class, 'contacts']);   //Контакты

Route::get('/', [App\Http\Controllers\RoutingController::class, 'welcome']);   //Главная
Route::get('/tv', [App\Http\Controllers\RoutingController::class, 'tv']);   //ТВ
Route::get('/pc', [App\Http\Controllers\RoutingController::class, 'pc']);   //ПК
Route::get('/fridge', [App\Http\Controllers\RoutingController::class, 'fridge']);   //ремонт холодильников
Route::get('/washing_machine', [App\Http\Controllers\RoutingController::class, 'washing_machine']);   //ремонт стиральных машин
Route::get('/dishwasher', [App\Http\Controllers\RoutingController::class, 'dishwasher']);   //ремонт посудомоечных машин
Route::get('/coffee_machine', [App\Http\Controllers\RoutingController::class, 'coffee_machine']);   //ремонт кофе-машин
Route::get('/coffee_machine_2', [App\Http\Controllers\RoutingController::class, 'coffee_machine_2']);   //ремонт кофе-машин 2
Route::get('/hob', [App\Http\Controllers\RoutingController::class, 'hob']);   //ремонт варочных панелей
Route::get('/four', [App\Http\Controllers\RoutingController::class, 'four']);   //ремонт духовых шкафов


// Логика отправки лидов
Route::post('/send_lead', [App\Http\Controllers\SendController::class, 'send_lead']);   //ремонт духовых шкафов







