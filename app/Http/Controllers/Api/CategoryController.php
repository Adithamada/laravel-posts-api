<?php

namespace App\Http\Controllers\Api;

use Exception;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        try {
            $category = Category::all();
            if (!$category) {
                return response()->json([
                    "code" => "404",
                    "data" => null,
                    "message" => "Tidak ada post!"
                ]);
            }
            return response()->json([
                "code" => "200",
                "data" => $category,
                "message" => "Sukses mengambil data category"
            ]);
        } catch (Exception $e) {
            return response()->json([
                "code" => "500",
                "data" => null,
                "message" => "Gagal mengambil data category"
            ]) . $e->getMessage();
        }
    }
    public function store(Request $request)
    {
        try {
            $request->validate(
                [
                    "category_name" => "required",
                ],
                [
                    "category_name.required" => "Field category tidak boleh kosong!",
                ]
            );

            $category = Category::create($request->only(['category_name']));

            return response()->json([
                "code" => "200",
                "data" => $category,
                "message" => "Sukses menambah data category!"
            ]);
        } catch (Exception $e) {
            return response()->json([
                "code" => "500",
                "data" => null,
                "message" => "Gagal menambah data category: " . $e->getMessage()
            ]);
        }
    }

    public function show(String $id)
    {
        try {
            $category = Category::findOrFail($id);
            if (!$category) {
                return response()->json([
                    "code" => "500",
                    "data" => null,
                    "message" => "Category tidak ada!"
                ]);
            }
            return response()->json([
                "code" => "200",
                "data" => $category,
                "message" => "Sukses mengambil data category!"
            ]);
        } catch (Exception $e) {
            return response()->json([
                "code" => "500",
                "data" => null,
                "message" => "Gagal mengambil data category"
            ]) . $e->getMessage();
        }
    }
    public function update(Request $request, String $id)
    {
        try {
            $category = Category::findOrFail($id);
            if (!$category) {
                return response()->json([
                    "code" => "500",
                    "data" => null,
                    "message" => "Post tidak ada!"
                ]);
            }
            $request->validate(
                [
                    "category_name" => "required",
                ],
                [
                    "category_name.required" => "Field category tidak boleh kosong!",
                ]
            );

            $category->update($request->only(['category_name']));

            return response()->json([
                "code" => "200",
                "data" => $category,
                "message" => "Sukses update data category!"
            ]);
        } catch (Exception $e) {
            return response()->json([
                "code" => "500",
                "data" => null,
                "message" => "Gagal update data category"
            ]) . $e->getMessage();
        }
    }
    public function destroy(String $id)
    {
        try {
            $category = Category::findOrFail($id);
            if (!$category) {
                return response()->json([
                    "code" => "500",
                    "data" => null,
                    "message" => "Post tidak ada!"
                ]);
            }
            $category->delete();
            return response()->json([
                "code" => "200",
                "data" => $category,
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
