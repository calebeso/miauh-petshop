<?php

namespace App\Http\Controllers\Event;

use App\Http\Controllers\Controller;
use App\Http\Requests\EventRequest;
use Illuminate\Http\Request;
use App\Model\Service;

class EventController extends Controller
{
   public function loadEvents(Request $request){
    $returnedColumns = ['id', 'title', 'start', 'end', 'color', 'description'];

    $start = (!empty($request->start)) ? ($request->start) : ('');
    $end = (!empty($request->end)) ? ($request->end) : ('');

    /** Retornaremos apenas os eventos ENTRE as datas iniciais e finais visiveis no calendário */
    $events = Service::whereBetween('start', [$start, $end])->get($returnedColumns);

       return response()->json($events);
   }

   public function store(Request $request)
   {
       Service::create($request->all());

       return response()->json(true);
   }

   public function update(Request $request)
   {
       $event = Service::where('id', $request->id)->first();
       $event->fill($request->all());
       $event->save();

       return response()->json(true);
   }
}
