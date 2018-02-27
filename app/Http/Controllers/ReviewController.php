<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
class ReviewController extends Controller
{
    // без доступа в контроллер не попасть
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('review',[
            'reviews' => Review::all_review(),
        ]);
    }

    public function create(){

        return view('review.create');

    }

    public function edit(Request $request){

        $id = $request->input('id');
        $review = Review::find($id);
        return view('review.edit',[
            'review' => $review
        ]);

    }

    public function update(Request $request, $id){

        $review = Review::find($id);

        $review->name = $request->get('name');
        $review->social_icon = $request->get('social_icon');
        $review->text = $request->get('text');
        foreach ($request->file() as $file) {
            $file_name = time().'_'.$file->getClientOriginalName();
            $file->move(storage_path('../public/img/content/review'), $file_name);
            $review->avatar = $file_name;
        }

        $review->save();

        return redirect()->route('review');
    }

    public function destroy($id){

        Review::find($id)->delete();
        return redirect()->route('review');

    }

    public function upload(Request $request)
    {

        $review = new Review;
        foreach ($request->file() as $file) {
            $file_name = time().'_'.$file->getClientOriginalName();
            $file->move(storage_path('../public/img/content/review'), $file_name);
            $review->avatar = $file_name;
        }

        $review->name = $request->get('name');
        $review->social_icon = $request->get('social_icon');
        $review->text = $request->get('text');

        $review->save();

        return redirect()->route('review');
    }
}
