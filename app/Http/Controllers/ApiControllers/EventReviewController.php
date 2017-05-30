<?php

namespace App\Http\Controllers\ApiControllers;

use App\EventReview;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventReviewController extends Controller
{
    public function index(){
        $review = EventReview::all();
        return response()->json($review);
    }

    public function store(){

    }
}