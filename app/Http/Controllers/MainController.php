<?php

namespace App\Http\Controllers;

use App\BikeImage;
use App\Bikes;
use App\Services\Operations;
use App\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $id = session('user.id');

        if($id){
            $bikes = User::find($id)
                        ->bike()
                        ->get()
                        ->toArray();
        }else{
            // Não logado → mostra todas as motos
            $bikes = Bikes::all();
        }
          $bikes = Bikes::with('images')->get()->toArray();

        return view('catalog', ['bikes' => $bikes], compact('bikes'));
    }

    public function showBikes()
    {
        $bikes = Bikes::with('images')->get();
        return view('bike', compact('bikes'));
    }

    public function newBike()
    {
        return view('new_bike');
    }

    public function newBikeSubmit(Request $request)
    {
            $request->validate([

                'text_mark' => 'required|min:3|max:20',
                'text_model' => 'required|min:3|max:20',
                'text_year' => 'required|min:3|max:20',
            ],
            [
                'text_mark.required' => 'Esse campo é obtigatório',
                'text_model.required' => 'Esse campo é obtigatório',
                'text_year.required' => 'Esse campo é obtigatório',

                'text_mark.min' => 'Esse campo deve ter no minimo 3 caracteres',
                'text_model.min' => 'Esse campo deve ter no minimo 3 caracteres',
                'text_year.min' => 'Esse campo deve ter no minimo 3 caracteres',

                'text_mark.max' => 'Esse campo deve ter no máximo 20 caracteres',
                'text_model.max' => 'Esse campo deve ter no máximo 20 caracteres',
                'text_year.max' => 'Esse campo deve ter no máximo 20 caracteres',

            ]);

            $id = session('user.id');

            $bike = new Bikes();
            $bike->user_id = $id;
            $bike->mark = $request->text_mark;
            $bike->model = $request->text_model;
            $bike->year = $request->text_year;
            $bike->km = $request->text_km;
            $bike->price = $request->text_price;

            $bike->save();

                $images = [];
                if ($request->hasFile('images')) {
                    $uploadedFiles = $request->file('images');
                    // Garante que é um array
                    if (!is_array($uploadedFiles)) {
                        $uploadedFiles = [$uploadedFiles];
                    }

                    foreach ($uploadedFiles as $image) {
                        // Verifica se é um arquivo válido
                        if ($image && $image->isValid()) {
                            $extension = $image->extension();
                            $imageName = md5($image->getClientOriginalName() . time()) . '.' . $extension;
                            $image->move(public_path('img/bikes'), $imageName);
                            BikeImage::create([
                                'bike_id' => $bike->id,
                                'image' => $imageName
                            ]);
                        }
                    }
                }
                     return redirect()->route('home');
        }

    public function bike()
    {
        return view('bike');
    }

    public function bikeDetails($id)
    {

        $id = Operations::decryptId($id);

        $bike = Bikes::findOrFail($id);

        return view('bike_details', ['bike' => $bike]);
    }

}