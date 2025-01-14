<?php

use App\Http\Controllers\KaryawanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/send-data', [KaryawanController::class, 'sendData']);

Route::get('/all-employees', [KaryawanController::class, 'allEmployees']);
Route::get('/common-employees', [KaryawanController::class, 'commonEmployees']);


Route::get('/prima', function (Illuminate\Http\Request $request) {
    function isPrime($num)
    {
        if ($num < 2) return false;
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) return false;
        }
        return true;
    }

    function primeNumbers($max)
    {
        $primes = [];
        for ($i = 2; $i <= $max; $i++) {
            if (isPrime($i)) {
                $primes[] = $i;
            }
        }
        return $primes;
    }

    $max = $request->query('max', 20);

    if (!is_numeric($max) || $max < 2) {
        return response()->json(['error' => 'Masukkan angka valid yang lebih besar dari 1'], 400);
    }

    $primes = primeNumbers((int)$max);

    return response()->json([
        'max' => $max,
        'primes' => $primes,
    ]);
});

Route::get('/deret2', function (Illuminate\Http\Request $request) {

    function deretUkur2($max)
    {
        $sum = 0;
        $result = [];
        $x = 1;

        for ($i = 0; $i < $max; $i++) {
            $result[] = $x;
            $result[] = $x * 2;
            $sum += $x + ($x * 2);

            $x++;
        }

        return ['deret' => $result, 'sum' => $sum];
    }

    $max = $request->query('max', 20);

    if (!is_numeric($max) || $max < 1) {
        return response()->json(['error' => 'Masukkan angka yang valid lebih besar dari 0'], 400);
    }

    $deret = deretUkur2($max);


    $result = $max;
    foreach ($deret['deret'] as $value) {
        echo $value;
        if ($value == $max) {
            break; // Stop when the current value equals the max
        }
        echo " + ";

        $result += $value;
    }

    echo "\nJumlah deret: " . $result . "\n";
});


Route::get('/deret1', function (Illuminate\Http\Request $request) {
    function deretUkur1($max)
    {
        $sum = 0;
        $result = [];

        for ($i = 2; $i <= $max; $i += 2) {
            $result[] = $i;
            $sum += $i;
        }

        return ['deret' => $result, 'sum' => $sum];
    }

    $max = $request->query('max', 20);


    if (!is_numeric($max) || $max < 2) {
        return response()->json(['error' => 'Masukkan angka yang valid lebih besar atau sama dengan 2'], 400);
    }


    $deret = deretUkur1($max);


    return response()->json([
        'max' => $max,
        'deret' => $deret['deret'],
        'sum' => $deret['sum']
    ]);
});
