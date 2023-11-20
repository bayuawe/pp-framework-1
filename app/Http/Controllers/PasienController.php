<?php

namespace App\Http\Controllers;

class PasienController extends Controller
{
    public function getDataPasien()
    {
        return view('pasien.data');
    }

    public function getPasienDetail($id)
    {
        // Logika untuk mengambil data pasien berdasarkan $id
        return view('pasien.detail', ['id' => $id]);
    }
}

