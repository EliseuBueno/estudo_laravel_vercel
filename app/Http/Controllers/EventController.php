<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

use function GuzzleHttp\Promise\all;

class EventController extends Controller
{
    public function index(){
        $events = Event::all();
        return view('welcome', ['events' => $events]);
        // $x = 5;
        // $y = 6;
        // $z = $x + $y;
        // $arrDados = ['Eliseu', 'Maíra', 'Hillary', 'Lorena'];
        // return view('welcome', [
        //     'x' => $x, 
        //     'y' => $y, 
        //     'z' => $z, 
        //     'arrDados' => $arrDados
        // ]);
    }
    public function create(){
        return view('events.create');
    }

    public function store(Request $request){
        $event = new Event;

        $event->title = $request->title;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;

        $event->save();

        return redirect('/');

    }
}
