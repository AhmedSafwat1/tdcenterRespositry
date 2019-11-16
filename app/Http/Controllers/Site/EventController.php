<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\{
    Event,
    Program
};
use Illuminate\Support\Facades\App;

class EventController extends Controller
{
    public function index(Request $request){

        $lang = App::getLocale();
        $programs = Program::all();
        $events  = Event::with("program")->whereDate("event_start" , ">=", Carbon::now());
        $user    = auth()->user();
        if($user){
            $events= $events->whereDoesntHave("users",function ($query) use($user){
                $query->where("user_id",$user->id)->where("status","accept");;
            });
        }
        $events = $events->withCount("users")->latest("event_start")->get();
        return view('front.pages.test',compact("events","lang","programs"));
    }


    public function main(Request $request){
        $data    = Carbon::parse($request->date_search);
        $program = $request->program_id;
        $lang    = App::getLocale();
        $user    = $request->user_id;
        $events  = Event::with("program")->where("program_id",$program)->whereDate("event_start" , ">=", $data);
        if($user){
            $events= $events->whereDoesntHave("users",function ($query) use($user){
                $query->where("user_id",$user)->where("status","accept");
            });
        }
        $events      = $events->latest("event_start")->get();

        $html        = view("Ajex.search")->with(["events"=>$events,"lang"=>$lang])->render();
        return response()->json([
            "key" => 1 ,
            "data"=> $html
        ]);
    }


    public function details(Request $request, $id){
        $event   =  Event::with("program")->withCount("users")->findOrFail($id);
        $lang    = App::getLocale();
        return view('front.pages.detailsEvent',compact("event","lang"));
    }

    public function booking(Request $request, $id){
        $event     = Event::withCount("users")->with("users")->findOrFail("id");
        $lang      = App::getLocale();
        if($event->users_count == $event->capacity){
            $msg =  $lang == "ar"? "لقد تم  اكتمال عدد فى الحدث"  : " The Event is full now";
        }
    }

}
