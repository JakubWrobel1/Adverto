<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advertisement;
use App\Models\Category;
use App\Models\Location;
use Spatie\FlareClient\View;

class AdvertisementsController extends Controller
{
    public function showByCategory($categoryName)
    {
        $category = Category::where('name', $categoryName)->firstOrFail();
        $advertisements = Advertisement::where('category_id', $category->id)->get();

        return view('advertisements.index', compact('advertisements', 'category'));
    }

    public function showByNewest()
    {
        $advertisements = Advertisement::select('id', 'title', 'price', 'location_id')
        ->orderBy('created_at', 'desc')
        ->take(20)
        ->get();
        return view('welcome', compact('advertisements'));
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

    public function myAdvertisements()
    {
        $user = auth()->user();
        $advertisements = Advertisement::where('user_id', $user->id)->get();

        return view('advertisements.myAdvertisements', compact('advertisements'));
    }

    public function show($id)
    {
        $advertisement = Advertisement::findOrFail($id);

        return view('advertisements.show', compact('advertisement'));
    }
    public function search()
    {
        return view('advertisements.result-ad');
    }
    public function advertisementDelete(Advertisement $advertisement)
    {
        $advertisement->delete();
        return redirect('welcome');
    }
    public function advertisementSearch(Request $request)
    {
        $query = $request->input('query');
        
        $advertisements = Advertisement::where('title', 'like', "%$query%")
                    ->get();
        return view('advertisements.result-ad', compact('advertisements'));
    }

}