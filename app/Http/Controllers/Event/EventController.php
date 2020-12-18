<?php

namespace App\Http\Controllers\Event;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Service;

class EventController extends Controller
{
   public function loadEvents(){
       $events = Service::all();

       return response()->json($events);
   }

   public function update(Request $request){
       $event = Service::where('id', $request->id)->first();
       $event->fill($request->all());
       $event->save();

       return response()->json(true);
   }
}
