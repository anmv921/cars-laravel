<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Product;

use Illuminate\Support\Facades\Route;

use App\Rules\Uppercase;

use App\Http\Requests\CreateValidationRequest;
use App\Http\Requests\EditValidationRequest;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::all();
        return view("cars.index", [
            'cars' => $cars
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("cars.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( Request $request )
    {
        $request->validate([
            'name' => 'required',
            'founded' => 'required|integer|min:0|max:2021',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        $newImageName = time() . '-' . $request->name . '.' . 
            $request->image->extension();
        $request->image->move(public_path('images'), $newImageName);

        $car = Car::create([
            'name' => $request->input("name"),
            'founded' => $request->input("founded"),
            'description' => $request->input("description"),
            'image_path' => $newImageName
        ]);
        
        return redirect()->route('cars.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $car = Car::find($id);
        return view('cars.show')->with('car', $car);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {   


        $car = Car::find($id);

        return view("cars.edit")->with("car", $car);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EditValidationRequest $request, string $id)
    {
        $request->validated();

        $newImageName = time() . '-' . $request->name . '.' . 
            $request->image->extension();
        $request->image->move(public_path('images'), $newImageName);

        $car = Car::where("id", $id)
        ->update([
            'name' => $request->input("name"),
            'founded' => $request->input("founded"),
            'description' => $request->input("description"),
            'image_path' => $newImageName
        ]);

        return redirect()->route('cars.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        $car->delete();

        return redirect()->route('cars.index');
    }
}

// $cars = Car::where('name', '=', 'Audi')
// ->get();

// $cars = Car::chunk(2, function($cars) {
//     foreach ($cars as $car) {
//         print_r($car);
//     }
// });

// dd($cars);

// ->toJson();
// $cars = json_decode($cars);

// $car = new Car;
// $car->name = $request->input("name");
// $car->founded = $request->input("founded");
// $car->description = $request->input("description");
// $car->save();

// $request->validate([
//     'name' => ['required', 'unique:cars', new Uppercase],
//     'founded' => 'required|integer|min:0|max:2021',
//     'description' => 'required'
// ]);

// $request->validated();
// dd($request->all());

// Methods we can use on $request
// guessExtension()
// getMimeType()
// store()
// asStore()
// storePublicly()
// move()
// getClientOriginalName()
// guessClientExtension()
// getSize()
// getError()

// $test = $request->file('image')->guessExtension();
// $test = $request->file('image')->getClientOriginalName();
// dd($test);

// CreateValidationRequest $request,

// $products = Product::find($id);