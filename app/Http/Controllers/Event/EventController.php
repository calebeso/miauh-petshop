<?php

namespace App\Http\Controllers\Event;

use App\Http\Controllers\Controller;
use App\Http\Requests\EventRequest;
use Illuminate\Http\Request;
use App\Model\Service;

class EventController extends Controller
{
   public function loadEvents(){
       $events = Service::all();

       return response()->json($events);
   }

   public function store(EventRequest $request)
   {
       Service::create($request->all());

       return response()->json(true);
   }

   public function update(EventRequest $request)
   {
       $event = Service::where('id', $request->id)->first();
       $event->fill($request->all());
       $event->save();

       return response()->json(true);
   }
}
