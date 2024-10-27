<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\Categories;
use Validator;

class CategoriesController extends Controller
{
    public function storeCategories(Request $request)
    {
        $category = new Categories();
        $validation = Validator::make($request->all(), $category->rules());
        if($validation->fails()) {
            return redirect()->back()->withErrors($validation)->withInput();
        } else {
            if (Categories::checkIfCategoryExists($request->name)) {
                return redirect()->back()->with('error', 'Category name already exists');
            }
            $category->edit();
            return redirect()->route('admin.categories')->with('success', 'Category created successfully');
        }
        
    }

    public function tempUpload(Request $request)
    {
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('file')) {
            // Save file to a temporary location
            $filePath = $request->file('file')->store('categories_temp', 'public');
            return response()->json(['file_path' => $filePath]);
        }

        return response()->json(['error' => 'File upload failed'], 400);
    }
}
