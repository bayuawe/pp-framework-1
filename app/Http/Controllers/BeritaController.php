<?php

namespace App\Http\Controllers;

class BeritaController extends Controller
{
    public function getBeritaByJudul()
    {
        // Logika untuk mengambil data berita berdasarkan judul
        return view('berita.show', ['judul' => 'Judul Berita']);
    }

    public function getBeritaByPembuat($userId)
    {
        // Logika untuk mengambil data berita berdasarkan pembuat
        return view('berita.show', ['judul' => 'Judul Berita', 'userId' => $userId]);
    }

    public function getBeritaByTanggal($tanggal)
    {
        // Logika untuk mengambil data berita berdasarkan tanggal
        return view('berita.show', ['judul' => 'Judul Berita', 'tanggal' => $tanggal]);
    }

    public function getBeritaByKategori($kategoriId)
    {
        // Logika untuk mengambil data berita berdasarkan kategori
        return view('berita.show', ['judul' => 'Judul Berita', 'kategoriId' => $kategoriId]);
    }
}
