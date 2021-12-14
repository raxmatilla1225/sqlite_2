<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
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


Route::get('////students/grand/{grand}/contract/{contract}', function ($grand,$contract) {

    $students = [
        [
            'name' => 'Alex',
            'stir' => 'AC1954218',
            'bali' => 169
        ],
        [
            'name' => 'Anna',
            'stir' => 'AB1326218',
            'bali' => 156
        ],
        [
            'name' => 'Kane',
            'stir' => 'AB1326218',
            'bali' => 135
        ],
        [
            'name' => 'Ron',
            'stir' => 'AB1326218',
            'bali' => 145
        ],
        [
            'name' => 'Emma',
            'stir' => 'AB1326218',
            'bali' => 103
        ],
        [
            'name' => 'Elsa',
            'stir' => 'AB1326218',
            'bali' => 109
        ],
        [
            'name' => 'Nicol',
            'stir' => 'AB1326218',
            'bali' => 69
        ],
        [
            'name' => 'Eshly',
            'stir' => 'AB1326218',
            'bali' => 79
        ],
        [
            'name' => 'Rooney',
            'stir' => 'AB1326218',
            'bali' => 113
        ],
        [
            'name' => 'Pukki',
            'stir' => 'AB1326218',
            'bali' => 152
        ],
        [
            'name' => 'Jeyms',
            'stir' => 'AB1326218',
            'bali' => 164
        ],
        [
            'name' => 'Rodri',
            'stir' => 'AB1326218',
            'bali' => 96
        ],
        [
            'name' => 'Stiv',
            'stir' => 'AB1326218',
            'bali' => 83
        ],
        [
            'name' => 'Miycle',
            'stir' => 'AB1326218',
            'bali' => 92.9
        ],
        [
            'name' => 'Jordan',
            'stir' => 'AB1326218',
            'bali' => 71
        ],
        [
            'name' => 'S.Jobs',
            'stir' => 'AB1326218',
            'bali' => 91
        ],
        [
            'name' => 'Uilyams',
            'stir' => 'AB1326218',
            'bali' => 153
        ],
        [
            'name' => 'Antonio',
            'stir' => 'AB1326218',
            'bali' => 103
        ],
        [
            'name' => 'Keita',
            'stir' => 'AB1326218',
            'bali' => 182
        ],
        [
            'name' => 'Konte',
            'stir' => 'AB1326218',
            'bali' => 63
        ],
        [
            'name' => 'Messi',
            'stir' => 'AB1326218',
            'bali' => 113
        ],
        [
            'name' => 'Kaka',
            'stir' => 'AB1326218',
            'bali' => 62
        ],
        [
            'name' => 'Bruce',
            'stir' => 'AB1326218',
            'bali' => 86
        ],
        [
            'name' => 'McCarty',
            'stir' => 'AB1326218',
            'bali' => 93
        ],
        [
            'name' => 'Shelby',
            'stir' => 'AB1326218',
            'bali' => 154
        ],
        [
            'name' => 'Mata',
            'stir' => 'AB1326218',
            'bali' => 126
        ],
        [
            'name' => 'Tony',
            'stir' => 'AB1326218',
            'bali' => 118
        ],
        [
            'name' => 'Garry',
            'stir' => 'AB1326218',
            'bali' => 135
        ],
        [
            'name' => 'Germiona',
            'stir' => 'AB1326218',
            'bali' => 144
        ],
        [
            'name' => 'Grigory',
            'stir' => 'AB1326218',
            'bali' => 62
        ],

    ];

    return view('students',['students' => $students, 'g_bali' => $grand, 'c_bali' => $contract] );
});

Route::get('/students', function () {

    $students = [
        [
            'name' => 'Alex',
            'stir' => 'AC1954218',
            'bali' => 169
        ],
        [
            'name' => 'Anna',
            'stir' => 'AB1326218',
            'bali' => 156
        ],
        [
            'name' => 'Kane',
            'stir' => 'AB1326218',
            'bali' => 135
        ],
        [
            'name' => 'Ron',
            'stir' => 'AB1326218',
            'bali' => 145
        ],
        [
            'name' => 'Emma',
            'stir' => 'AB1326218',
            'bali' => 103
        ],
        [
            'name' => 'Elsa',
            'stir' => 'AB1326218',
            'bali' => 109
        ],
        [
            'name' => 'Nicol',
            'stir' => 'AB1326218',
            'bali' => 69
        ],
        [
            'name' => 'Eshly',
            'stir' => 'AB1326218',
            'bali' => 79
        ],
        [
            'name' => 'Rooney',
            'stir' => 'AB1326218',
            'bali' => 113
        ],
        [
            'name' => 'Pukki',
            'stir' => 'AB1326218',
            'bali' => 152
        ],
        [
            'name' => 'Jeyms',
            'stir' => 'AB1326218',
            'bali' => 164
        ],
        [
            'name' => 'Rodri',
            'stir' => 'AB1326218',
            'bali' => 96
        ],
        [
            'name' => 'Stiv',
            'stir' => 'AB1326218',
            'bali' => 83
        ],
        [
            'name' => 'Miycle',
            'stir' => 'AB1326218',
            'bali' => 92.9
        ],
        [
            'name' => 'Jordan',
            'stir' => 'AB1326218',
            'bali' => 71
        ],
        [
            'name' => 'S.Jobs',
            'stir' => 'AB1326218',
            'bali' => 91
        ],
        [
            'name' => 'Uilyams',
            'stir' => 'AB1326218',
            'bali' => 153
        ],
        [
            'name' => 'Antonio',
            'stir' => 'AB1326218',
            'bali' => 103
        ],
        [
            'name' => 'Keita',
            'stir' => 'AB1326218',
            'bali' => 182
        ],
        [
            'name' => 'Konte',
            'stir' => 'AB1326218',
            'bali' => 63
        ],
        [
            'name' => 'Messi',
            'stir' => 'AB1326218',
            'bali' => 113
        ],
        [
            'name' => 'Kaka',
            'stir' => 'AB1326218',
            'bali' => 62
        ],
        [
            'name' => 'Bruce',
            'stir' => 'AB1326218',
            'bali' => 86
        ],
        [
            'name' => 'McCarty',
            'stir' => 'AB1326218',
            'bali' => 93
        ],
        [
            'name' => 'Shelby',
            'stir' => 'AB1326218',
            'bali' => 154
        ],
        [
            'name' => 'Mata',
            'stir' => 'AB1326218',
            'bali' => 126
        ],
        [
            'name' => 'Tony',
            'stir' => 'AB1326218',
            'bali' => 118
        ],
        [
            'name' => 'Garry',
            'stir' => 'AB1326218',
            'bali' => 135
        ],
        [
            'name' => 'Germiona',
            'stir' => 'AB1326218',
            'bali' => 144
        ],
        [
            'name' => 'Grigory',
            'stir' => 'AB1326218',
            'bali' => 62
        ],

    ];

    return view('students',['students' => $students,] );
});

Route::get('/', function () {
    $data = [
        [
            'model' => 'samsung',
            'narxi' => '300$'
        ],
        [
            'model' => 'iphone',
            'narxi' => '500$'
        ],
        [
            'model' => 'miPhone',
            'narxi' => '200$'
        ],

    ];
    $name = "Alex";
    return view('home', ['data' => $data], ['ism' => $name]);
});


Route::get("/index", function () {
    return view('index');
});


Route::get('/salom', function () {
    return "salom dunyo";
});

Route::get('/phone/{price}', function ($price) {
    $phones = [
        [
            'model' => 'samsung',
            'price' => 300
        ],
        [
            'model' => 'iphone',
            'price' => 500
        ],
        [
            'model' => 'miPhone',
            'price' => 200
        ]
    ];
    $show = '';
    foreach ($phones as $phone) {
        if ($phone['price'] > $price) {
            $show .= $phone['model'] . ' ' . $phone['price'] . '<br>';
        }
    }

    return $show;
});

Route::get('/students/grand/{grand}/contract/{contract}', function ($grand,$contract){

    $name = ['Abdulla','Davron','Javoxir',"G'ani",'Asilbek','Doniyor','Xasan','Doniyor','Xasan','Xusan','Shoxrux','Qudrat','Xusan','Shoxrux','Qudrat'];
    $surname = ['Abdullayev','Davronov','Javoxirov',"G'aniyev",'Asilbekov','Doniyorov','Xasanov','Xusanov','Shoxruxov','Qudratov',"G'aniyev",'Asilbekov','Doniyorov','Xasanov'];



    for ($i = 0; $i<100; $i++){
        $random = rand(0,14);
        $random1 = rand(0,13);
        $student[$i]['name'] = $name[$random];
        $student[$i]['surname'] = $surname[$random1];
        $student[$i]['bali'] = rand(53,189);
    }


    usort($student, 'cmp');

    return view('students',['students' => $student, 'g_bali' => $grand, 'c_bali' => $contract] );
});

function cmp($a,$b){
    return strcmp($b['bali'],$a['bali']);
}

Route::get("/show", [UserController::class, 'show']);

Route::view("/form", 'form.index')->name('student.form');

Route::post('/store',[StudentController::class, 'store'])->name('student.store');

