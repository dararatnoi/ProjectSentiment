<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function show()
    {
        $reviews = Review::where('is_sentiment_comment', true)->get();

        return view('compare', [
            'reviews' => $reviews
        ]);
    }
}
