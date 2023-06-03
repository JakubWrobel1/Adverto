<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advertisement;
use App\Models\Category;

class AdvertisementsController extends Controller
{
    public function showByCategory($categoryId)
    {
        $category = Category::findOrFail($categoryId);
        $advertisements = Advertisement::where('category_id', $categoryId)->get();

        return view('advertisements.index', compact('advertisements', 'category'));
    }
}