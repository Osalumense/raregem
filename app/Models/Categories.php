<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Categories extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'status',
        'image_path'
    ];

    // public function products()
    // {
    //     return $this->belongsToMany(Product::class);
    // }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'description' => 'sometimes|nullable',
            'image_path' => 'file|image|mimes:jpeg,png,gif,webp',
        ];
    }

    public static function get($id)
    {
        return Categories::find($id);
    }

    public function edit()
    {
        $postData = request()->except(['id']);
        unset($postData['_token']);
        unset($postData['image_path']);
        $postData['slug'] = Str::slug($postData['name']);
        $this->forceFill($postData);
        $this->save();

        $category = Categories::get($this->id);
        if ($category instanceof Categories) {
            $image = request()->file('image_path');
            if(!empty($image)){
                $filename = $postData['slug'] . '.' . $image->getClientOriginalExtension();
                $category->image_path = $filename;
                $image->move('images/categories/', $filename);
                $category->save();
            }
        }
    }

    public static function checkIfCategoryExists($name)
    {
        return Categories::where('name', $name)->exists();
    }

    public static function getAllCategories()
    {
        return Categories::all();
    }

}
