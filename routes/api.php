<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/data', function (Request $request) {
    return response()->json([
        [ 
            "name" => "Jan Kowalski",
            "position"=> "Developer",
            "office" => "Lodz",
            "age" => 33,
            "start_date" => "2008/11/11",
            "salary" => "$162,150"
        ],
        [
            "name" => "Sebastian Kasprzak",
            "position"=> "Back-End Developer",
            "office" => "Lodz",
            "age" => 25,
            "start_date" => "2022/08/28",
            "salary" => "$162,150"
        ],
        [ 
            "name" => "Jan Kowalski",
            "position"=> "Developer",
            "office" => "Lodz",
            "age" => 33,
            "start_date" => "2008/11/11",
            "salary" => "$162,150"
        ],
        [
            "name" => "Sebastian Kasprzak",
            "position"=> "Back-End Developer",
            "office" => "Lodz",
            "age" => 25,
            "start_date" => "2022/08/28",
            "salary" => "$162,150"
        ],
        [ 
            "name" => "Jan Kowalski",
            "position"=> "Developer",
            "office" => "Lodz",
            "age" => 33,
            "start_date" => "2008/11/11",
            "salary" => "$162,150"
        ],
        [
            "name" => "Sebastian Kasprzak",
            "position"=> "Back-End Developer",
            "office" => "Lodz",
            "age" => 25,
            "start_date" => "2022/08/28",
            "salary" => "$162,150"
        ],
        [ 
            "name" => "Jan Kowalski",
            "position"=> "Developer",
            "office" => "Lodz",
            "age" => 33,
            "start_date" => "2008/11/11",
            "salary" => "$162,150"
        ],
        [
            "name" => "Sebastian Kasprzak",
            "position"=> "Back-End Developer",
            "office" => "Lodz",
            "age" => 25,
            "start_date" => "2022/08/28",
            "salary" => "$162,150"
        ],
        [ 
            "name" => "Jan Kowalski",
            "position"=> "Developer",
            "office" => "Lodz",
            "age" => 33,
            "start_date" => "2008/11/11",
            "salary" => "$162,150"
        ],
        [
            "name" => "Sebastian Kasprzak",
            "position"=> "Back-End Developer",
            "office" => "Lodz",
            "age" => 25,
            "start_date" => "2022/08/28",
            "salary" => "$162,150"
        ],
        [ 
            "name" => "Jan Kowalski",
            "position"=> "Developer",
            "office" => "Lodz",
            "age" => 33,
            "start_date" => "2008/11/11",
            "salary" => "$162,150"
        ],
        [
            "name" => "Sebastian Kasprzak",
            "position"=> "Back-End Developer",
            "office" => "Lodz",
            "age" => 25,
            "start_date" => "2022/08/28",
            "salary" => "$162,150"
        ],
        [ 
            "name" => "Jan Kowalski",
            "position"=> "Developer",
            "office" => "Lodz",
            "age" => 33,
            "start_date" => "2008/11/11",
            "salary" => "$162,150"
        ],
        [
            "name" => "Sebastian Kasprzak",
            "position"=> "Back-End Developer",
            "office" => "Lodz",
            "age" => 25,
            "start_date" => "2022/08/28",
            "salary" => "$162,150"
        ],
        [ 
            "name" => "Jan Kowalski",
            "position"=> "Developer",
            "office" => "Lodz",
            "age" => 33,
            "start_date" => "2008/11/11",
            "salary" => "$162,150"
        ],
        [
            "name" => "Sebastian Kasprzak",
            "position"=> "Back-End Developer",
            "office" => "Lodz",
            "age" => 25,
            "start_date" => "2022/08/28",
            "salary" => "$162,150"
        ],
        [ 
            "name" => "Jan Kowalski",
            "position"=> "Developer",
            "office" => "Lodz",
            "age" => 33,
            "start_date" => "2008/11/11",
            "salary" => "$162,150"
        ],
        [
            "name" => "Sebastian Kasprzak",
            "position"=> "Back-End Developer",
            "office" => "Lodz",
            "age" => 25,
            "start_date" => "2022/08/28",
            "salary" => "$162,150"
        ],
        [ 
            "name" => "Jan Kowalski",
            "position"=> "Developer",
            "office" => "Lodz",
            "age" => 33,
            "start_date" => "2008/11/11",
            "salary" => "$162,150"
        ],
        [
            "name" => "Sebastian Kasprzak",
            "position"=> "Back-End Developer",
            "office" => "Lodz",
            "age" => 25,
            "start_date" => "2022/08/28",
            "salary" => "$162,150"
        ],
        [
            "name" => "Sebastian Kasprzak",
            "position"=> "Back-End Developer",
            "office" => "Lodz",
            "age" => 25,
            "start_date" => "2022/08/28",
            "salary" => "$162,150"
        ],
        [ 
            "name" => "Jan Kowalski",
            "position"=> "Developer",
            "office" => "Lodz",
            "age" => 33,
            "start_date" => "2008/11/11",
            "salary" => "$162,150"
        ],
        [
            "name" => "Sebastian Kasprzak",
            "position"=> "Back-End Developer",
            "office" => "Lodz",
            "age" => 25,
            "start_date" => "2022/08/28",
            "salary" => "$162,150"
        ],
        [ 
            "name" => "Jan Kowalski",
            "position"=> "Developer",
            "office" => "Lodz",
            "age" => 33,
            "start_date" => "2008/11/11",
            "salary" => "$162,150"
        ],
        [
            "name" => "Sebastian Kasprzak",
            "position"=> "Back-End Developer",
            "office" => "Lodz",
            "age" => 25,
            "start_date" => "2022/08/28",
            "salary" => "$162,150"
        ],
        [
            "name" => "Sebastian Kasprzak",
            "position"=> "Back-End Developer",
            "office" => "Lodz",
            "age" => 25,
            "start_date" => "2022/08/28",
            "salary" => "$162,150"
        ],
        [ 
            "name" => "Jan Kowalski",
            "position"=> "Developer",
            "office" => "Lodz",
            "age" => 33,
            "start_date" => "2008/11/11",
            "salary" => "$162,150"
        ],
        [
            "name" => "Sebastian Kasprzak",
            "position"=> "Back-End Developer",
            "office" => "Lodz",
            "age" => 25,
            "start_date" => "2022/08/28",
            "salary" => "$162,150"
        ],
        [ 
            "name" => "Jan Kowalski",
            "position"=> "Developer",
            "office" => "Lodz",
            "age" => 33,
            "start_date" => "2008/11/11",
            "salary" => "$162,150"
        ],
        [
            "name" => "Sebastian Kasprzak",
            "position"=> "Back-End Developer",
            "office" => "Lodz",
            "age" => 25,
            "start_date" => "2022/08/28",
            "salary" => "$162,150"
        ],
    ]);
});
