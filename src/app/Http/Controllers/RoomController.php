<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index(Request $room) {
        $item = [
            'roomnumber' => $room ->room,
            'idnumber' => $room ->id
        ];
        return view('room',$item);
    }
}
