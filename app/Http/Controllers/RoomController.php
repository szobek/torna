<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function listRooms(){
        $rooms = Room::all();
        // dd($rooms);
        return response()->json($rooms);
    }

    public function createRoom(){

        $room= new Room();
        $room->num = 12;
        $room->floor = 0;
        $room->description = "tesztelés";
        // $room->img_dir = "tesztelés";
        $room->climatic=false;
        $room->window=false;
        $room->mirror=false;
        $room->price=2500;
        $room->save();

        // dd($room);
    }
}

