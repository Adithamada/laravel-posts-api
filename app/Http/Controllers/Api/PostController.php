<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Exception;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        try {
            $post = Post::all();
            if (!$post) {
                return response()->json([
                    "code" => "404",
                    "data" => null,
                    "message" => "Tidak ada post!"
                ]);
            }
            return response()->json([
                "code" => "200",
                "data" => $post,
                "message" => "Sukses mengambil data post"
            ]);
        } catch (Exception $e) {
            return response()->json([
                "code" => "200",
                "data" => null,
                "message" => "Sukses mengambil data post"
            ]) . $e->getMessage();
        }
    }
}
