<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class MovieController extends Controller
{
    public function showDetailPage($id){
        $movie = Movie::find($id);

        return view('detail', compact('movie'));
    }

    public function search(Request $request){
        $keyword = $request->keyword;

        // SELECT * FROM movies WHERE name LIKE '%$keyword%'
//        $movies = Movie::where('title', 'LIKE', '%'.$keyword.'%');
        $movies = Movie::where('title', 'LIKE', "%$keyword%")
            ->paginate(3)
            ->appends(['keyword' => $keyword]);

        return view('movies', compact('movies'));
    }

    public function showMovies(){
        // SELECT * FROM movies
//        $movies = Movie::all();
        $movies = Movie::paginate(4);

        return view('movies', compact('movies'));
//        return view('home', ['m' => $movies]);
    }


    public function insertMovie(Request $request){
        // validation
        // associative array [key -> value]
        $rules = [
            'title' => 'required|min:5',
            'description' => 'required',
            'image' => 'required'
        ];

        // iluminate/support/facade
        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){
            return back()->withErrors($validator);
            // back enggak refresh
        }

        $movie = new Movie(); // jangan lupa use
//        $movie->id = $request->id;
        $movie->title = $request->title;
        $movie->description = $request->description;

        $file = $request->file('image');
        // [waktu sekarang].jpg (ext asli file)
        $imageName = time().'.'.$file->getClientOriginalExtension();
        Storage::putFileAs('public/images', $file, $imageName);

        $movie->image = 'images/'.$imageName;

        $movie->save();

        return redirect()->back();
    }

    public function updateMovie(Request $request){
        $rules = [
            'id' => 'required|exist:movies,id',
        ];

        // iluminate/support/facade
        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){
            return back()->withErrors($validator);
            // back enggak refresh
        }

        $movie = Movie::find($request->id);

        $movie->title = $request->title != null ? $request->title : $movie->title;
        $movie->description = $request->description != null ? $request->description : $movie->description;

        $file = $request->file('image');

        if($file != null){
            // [waktu sekarang].jpg (ext asli file)
            $imageName = time().'.'.$file->getClientOriginalExtension();

            Storage::putFileAs('public/images', $file, $imageName);

            Storage::delete('public/'.$movies->image);

            $movie->image = 'images/'.$imageName;
        }


        $movie->save();

        return redirect()->back();
    }

    public function deleteMovie($id){
        $movie = Movie::find($id);

        Storage::delete('public/'.$movie->image);

        $movie->delete();

        return redirect()->back();
    }
}
