<?php

use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
   $visits = Redis::incr('visits');
   //return $visits;
   return view('welcome')->withVisits($visits);
});
