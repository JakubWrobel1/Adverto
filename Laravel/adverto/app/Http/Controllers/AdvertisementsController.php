<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Advertisement;
use App\Models\Category;
use App\Models\Location;
use App\Models\Image;
use Illuminate\Support\Facades\File; 
use Spatie\FlareClient\View;
use Illuminate\Support\Facades\Storage;
use GuzzleHttp\Client;
use Illuminate\Validation\ValidationException;
use GuzzleHttp\Exception\GuzzleException;

class AdvertisementsController extends Controller
{
    public function showByCategory($categoryName)
    {
        $category = Category::where('name', $categoryName)->firstOrFail();
        $advertisements = Advertisement::where('category_id', $category->id)->paginate(10);

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
            'price' => 'required|numeric|max:1000000',
            'category_id' => 'required',
            'user_autocomplete_address' => 'required',
            'locality' => 'required',
            'images' => ['array'],
            'images.*' => 'image|mimes:jpeg,png,jpg|max:5120',
        ], [
            'images.*.max' => 'Zdjęcie nie może przekraczać :max kilobajtów. (5 MB)',
            'locality.required' => 'Lokalizacja jest wymagana.',
        ]);

        $location = new Location();
        $location->city = $request->input('locality');
        $location->province = $request->input('administrative_area_level_1');
        $location->country = $request->input('country');
        $location->save();

        $advertisement = new Advertisement();
        $advertisement->title = $validatedData['title'];
        $advertisement->description = $validatedData['description'];
        $advertisement->price = $validatedData['price'];
        $advertisement->user_id = auth()->user()->id;
        $advertisement->category_id = $validatedData['category_id'];
        $advertisement->location_id = $location->id;
        $advertisement->is_active = true;

        $advertisement->save();
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = time().'.'.$image->extension();
                $image->move(public_path('images'), $imageName);

                $imageModel = new Image();
                $imageModel->url = $imageName;
                $imageModel->ad_id = $advertisement->id;
                $imageModel->save();
            }
        }

        return redirect()->route('advertisements.myAdvertisements')->with('success', 'Ogłoszenie dodane poprawnie.');
    } 

    public function myAdvertisements()
    {
        $user = auth()->user();
        $advertisements = Advertisement::with('images')->where('user_id', $user->id)->paginate(10);

        return view('advertisements.myAdvertisements', compact('advertisements'));
    }


    public function show($id)
    {
        $advertisement = Advertisement::findOrFail($id);
        $user = User::findOrFail($advertisement->user_id);
        return view('advertisements.show', compact('advertisement', 'user'));
    }
    public function search()
    {
        return view('advertisements.result-ad');
    }
    public function advertisementDelete(Advertisement $advertisement)
    {
        foreach ($advertisement->images as $image) {
            // Usuń plik z serwera
            $imagePath = public_path('images/' . $image->url);
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }
    
            // Usuń rekord z bazy danych
            $image->delete();
        }
    
        $advertisement->delete();
        return redirect()->route('advertisements.myAdvertisements')->with('success', 'Ogłoszenie usunięto poprawnie.');
    }
    public function advertisementSearch(Request $request)
    {
        $query = $request->input('query');
        
        $advertisements = Advertisement::where('title', 'like', "%$query%")
                    ->get();
        return view('advertisements.result-ad', compact('advertisements'));
    }
    public function edit($id)
{
    $advertisement = Advertisement::findOrFail($id);

    
    if ($advertisement->user_id !== auth()->user()->id) {
        abort(403, 'Nie masz uprawnień do edycji tego ogłoszenia.');
    }
    $advertisement = Advertisement::findOrFail($id);
    // Pobierz kategorie, lokalizacje, obrazy lub inne dane, które są potrzebne do wyświetlenia formularza edycji

    return view('advertisements.edit', compact('advertisement'));
}
public function update($id, Request $request)
{
    $validatedData = $request->validate([
        'title' => 'required|max:100',
        'description' => 'required',
        'price' => 'required|numeric',
        'category_id' => 'required',
        'user_autocomplete_address' => 'required',
        'locality' => 'required',
        'images' => 'array',
        'images.*' => 'image|mimes:jpeg,png,jpg|max:5120',
    ], [
        'images.*.max' => 'Zdjęcie nie może przekraczać :max kilobajtów. (5 MB)',
        'locality.required' => 'Lokalizacja jest wymagana.',
    ]);
    
    // Przeszukiwanie w poszukiwaniu lokalizacji w bazie
    $location = Location::where('city', $request->input('locality'))
        ->where('province', $request->input('administrative_area_level_1'))
        ->where('country', $request->input('country'))
        ->first();

    // Jeśli lokalizacji nie znaleziono, utwórz nowy rekord w bazie danych
    if (!$location) {
        $location = new Location();
        $location->city = $request->input('locality');
        $location->province = $request->input('administrative_area_level_1');
        $location->country = $request->input('country');
        $location->save();
    }

    $advertisement = Advertisement::findOrFail($id);
    
    $advertisement->title = $validatedData['title'];
    $advertisement->description = $validatedData['description'];
    $advertisement->price = $validatedData['price'];
    $advertisement->category_id = $validatedData['category_id'];
    $advertisement->location_id = $location->id;
    // Zaktualizuj pozostałe pola ogłoszenia
    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            $imageName = time().'.'.$image->extension();
            $image->move(public_path('images'), $imageName);

            $imageModel = new Image();
            $imageModel->url = $imageName;
            $imageModel->ad_id = $advertisement->id;
            $imageModel->save();
        }
    }
    $advertisement->save();

    return redirect()->route('advertisements.show', $advertisement->id)->with('success', 'Ogłoszenie zaktualizowane pomyślnie.');
}

}