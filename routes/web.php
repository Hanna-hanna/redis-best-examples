<?php

use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//    $visits = Redis::incr('visits');
//    //return $visits;
//    return view('welcome')->withVisits($visits);
// });

// Route::get('videos', function () {
//     //Redis::incrBy('visits', 5);
// });

Route::get('videos/{id}', function ($id) {
   //Redis::incrBy('visits', 5);

   // Followers
   // Number of video downloads
   // Number of blog article views

   $downloads = Redis::get("videos.{$id}.downloads");

   return view('welcome')->withDownloads($downloads);
});

Route::get('videos/{id}/downloads', function ($id) {

    // Prepare the download

    Redis::incr("videos.{$id}.downloads");

    return back();

 });