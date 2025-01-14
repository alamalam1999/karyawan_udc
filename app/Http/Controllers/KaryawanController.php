<?php

namespace App\Http\Controllers;

use App\Models\EmployeeA;
use App\Models\EmployeeB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class KaryawanController extends Controller
{

    public function allEmployees()
    {
        $employees = EmployeeA::select('nik', 'nama_karyawan', 'tanggal_lahir')
            ->union(
                EmployeeB::select('nik', 'nama_karyawan', 'tanggal_lahir')
            )
            ->get();

        return response()->json($employees);
    }

    // Karyawan di Kedua Tabel (Intersection)
    public function commonEmployees()
    {
        $employees = EmployeeA::select('nik', 'nama_karyawan', 'tanggal_lahir')
            ->whereIn('nik', EmployeeB::select('nik'))
            ->get();

        return response()->json($employees);
    }

    public function sendData()
    {
        // Data yang akan dikirim
        $data = [
            'nama' => 'Adi Alam',
            'alamat' => 'Jl. Raya Cinere No. 123, Jakarta',
            'hobi' => 'Bersepeda'
        ];

        // URL tujuan
        $url = 'https://dipa.udc.co.id/api-core/karyawan/set';

        // Kirim data menggunakan HTTP POST
        $response = Http::post($url, $data);

        // Tampilkan respons
        if ($response->successful()) {
            return response()->json([
                'status' => 'success',
                'response' => $response->json()
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'response' => $response->body()
            ]);
        }
    }
}
