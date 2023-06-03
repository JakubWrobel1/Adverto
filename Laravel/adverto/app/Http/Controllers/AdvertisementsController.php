<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advertisement;
use App\Models\Category;
use App\Models\Location;

class AdvertisementsController extends Controller
{
    public function showByCategory($categoryId)
    {
        $category = Category::findOrFail($categoryId);
        $advertisements = Advertisement::where('category_id', $categoryId)->get();

        return view('advertisements.index', compact('advertisements', 'category'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:100',
            'description' => 'required',
            'price' => 'required|numeric',
            'category_id' => 'required',
            'location_id' => 'required',
        ]);

        $advertisement = new Advertisement();
        $advertisement->title = $validatedData['title'];
        $advertisement->description = $validatedData['description'];
        $advertisement->price = $validatedData['price'];
        $advertisement->user_id = auth()->user()->id; // Assuming you have user authentication
        $advertisement->category_id = $validatedData['category_id'];
        $advertisement->location_id = $validatedData['location_id'];
        $advertisement->is_active = true; // Assuming the ad is active by default

        $advertisement->save();

        return redirect()->back()->with('success', 'Advertisement added successfully.');
    }

    public function show($id)
    {
        $advertisement = Advertisement::findOrFail($id);

        return view('advertisements.show', compact('advertisement'));
    }

}