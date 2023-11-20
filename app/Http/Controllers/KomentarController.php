<?php

namespace App\Http\Controllers;

class KomentarController extends Controller
{
    public function getKomentarByPost($postId)
    {
        // Logika untuk mengambil data komentar berdasarkan post
        return view('komentar.index', ['postId' => $postId]);
    }
}

