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
                "code" => "500",
                "data" => null,
                "message" => "Gagal mengambil data post"
            ]) . $e->getMessage();
        }
    }
    public function store(Request $request)
    {
        try {
            $request->validate(
                [
                    "title" => "required",
                    "description" => "required",
                    "category_id" => "required",
                    "author" => "required",
                ],
                [
                    "title.required" => "Field title tidak boleh kosong!",
                    "description.required" => "Field description tidak boleh kosong!",
                    "category_id.required" => "Field category_id tidak boleh kosong!",
                    "author.required" => "Field author tidak boleh kosong!",
                ]
            );

            $post = Post::create($request->only(['title', 'description', 'category_id', 'author']));

            return response()->json([
                "code" => "200",
                "data" => $post,
                "message" => "Sukses menambah data!"
            ]);
        } catch (Exception $e) {
            return response()->json([
                "code" => "500",
                "data" => null,
                "message" => "Gagal menambah data: " . $e->getMessage()
            ]);
        }
    }

    public function show(String $id)
    {
        try {
            $post = Post::findOrFail($id);
            if (!$post) {
                return response()->json([
                    "code" => "500",
                    "data" => null,
                    "message" => "Post tidak ada!"
                ]);
            }
            return response()->json([
                "code" => "200",
                "data" => $post,
                "message" => "Sukses mengambil data!"
            ]);
        } catch (Exception $e) {
            return response()->json([
                "code" => "500",
                "data" => null,
                "message" => "Gagal mengambil data"
            ]) . $e->getMessage();
        }
    }
    public function update(Request $request, String $id)
    {
        try {
            $post = Post::findOrFail($id);
            if (!$post) {
                return response()->json([
                    "code" => "500",
                    "data" => null,
                    "message" => "Post tidak ada!"
                ]);
            }
            $request->validate([
                "title" => "required",
                "description" => "required",
                "category_id" => "required",
                "author" => "required",
            ],
            [
                "title.required" => "Field title tidak boleh kosong!",
                "description.required" => "Field description tidak boleh kosong!",
                "category_id.required" => "Field category_id tidak boleh kosong!",
                "author.required" => "Field author tidak boleh kosong!",
            ]);

            $post->update($request->only(['title', 'description', 'category_id', 'author']));

            return response()->json([
                "code" => "200",
                "data" => $post,
                "message" => "Sukses update data!"
            ]);
        } catch (Exception $e) {
            return response()->json([
                "code" => "500",
                "data" => null,
                "message" => "Gagal update data"
            ]) . $e->getMessage();
        }
    }
    public function destroy(String $id)
    {
        try {
            $post = Post::findOrFail($id);
            if (!$post) {
                return response()->json([
                    "code" => "500",
                    "data" => null,
                    "message" => "Post tidak ada!"
                ]);
            }
            $post->delete();
            return response()->json([
                "code" => "200",
                "data" => $post,
                "message" => "Sukses menghapus data!"
            ]);
        } catch (Exception $e) {
            return response()->json([
                "code" => "500",
                "data" => null,
                "message" => "Gagal menghapus data"
            ]) . $e->getMessage();
        }
    }
}
