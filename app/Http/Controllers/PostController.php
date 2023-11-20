<?php

use App\Models\Post;
use Illuminate\Http\Request;

function store(Request $request)
{
    $data = $request->validate([
        'title' => 'required',
        'content' => 'required',
    ]);

    Post::create($data);

    return redirect()->route('nama_rute_yang_diinginkan')->with('success', 'Data berhasil disimpan!');
}
