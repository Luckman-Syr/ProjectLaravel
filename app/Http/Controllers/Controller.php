<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Admin;
use CreateAdminsTable;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index()
    {
        $admin = Admin::get();
        dd($admin);
    }
    public function create()
    {
        $post = new Admin;
        Request()->validate([
            'title' => 'required|unique:posts,title|max:255',
            'body' => 'required',
            'image' => 'nullable|mimes:jpeg, jpg, bmp, png|max:1024',
        ]);
        $file = Request()->image;
        $filename = Request()->title . '.' . $file->extension();
        $file->move(public_path('image'), $filename);
        $data = [
            'title' => Request()->title,
            'body' => Request()->body,
            'image' => $filename,
        ];

        $post->createPost($data);
        return redirect()->route('posts')->with('pesan', 'Post berhasil ditambahkan !!');
    }
}
