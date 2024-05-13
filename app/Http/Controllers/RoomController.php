<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\Object_;

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

    }
    public function createRoomAdmin(){

        $room= new Room();
        $room->num = 12;
        $room->floor = 0;
        $room->description = "tesztelés admin";
        $room->img_dir = "tesztelés admin";
        $room->climatic=false;
        $room->window=false;
        $room->mirror=false;
        $room->price=2500;
        $room->save();

    }

    public function getRoom(string $id): Object {
        $room = Room::find($id);
        return response()->json($room);
    }

    public function updateRoom(string $id,Request $request):Object{
        $room = Room::find($id);
        $room->update($request->all());
        return response()->json($room);
    }
}

