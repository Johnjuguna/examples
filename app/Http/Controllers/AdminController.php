<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Event;
use App\Models\Booking;
use App\Models\Gallery;
use App\Models\Contact;
use App\Models\Register;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }



    public function home()
    {
        $events = Event::all();
        return view('home.index', ['events' => $events]);
    }

    public function create_event()
    {
        return view('admin.create_event');
    }

    public function add_event(Request $request)
    {
        $data = new Event();
        $data->event_name = $request->name;
        $data->event_description = $request->event_description;
        $data->location = $request->location;
        $data->date = date('Y-m-d', strtotime($request->date));
        $data->start_time = $request->start_time;
        $data->organizer = $request->organizer;
        $image = $request->image;

        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('event', $imagename);
            $data->image = $imagename;
        }

        $data->save();
        return redirect()->back();
    }

    public function view_event()
    {
        $data = Event::all();
        return view('admin.view_event', compact('data'));
    }

    public function event_delete($id)
    {
        $data = Event::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function event_update($id)
    {
        $data = Event::find($id);
        return view('admin.update_event', compact('data'));
    }

    public function edit_event(Request $request, $id)
    {
        $data = Event::find($id);
        $data->category = $request->category;
        $data->event_name = $request->name;
        $data->event_description = $request->event_description;
        $data->location = $request->location;
        $data->date = $request->date;
        $data->start_time = $request->start_time;
        $image = $request->image;

        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('event', $imagename);
            $data->image = $imagename;
        }

        $data->save();
        return redirect()->back();
    }
}

// The following sections remain commented as requested:

// public function bookings(){
//     $data = Booking::all();
//     return view('admin.booking' , compact('data'));
// }

// public function delete_booking($id){
//     $data = Booking::find($id);
//     $data->delete();
//     return redirect()->back();
// }

// public function approve_book($id)
// {
//     $booking = Booking::find($id);
//     if(!$booking){
//         return redirect()->back();
//     }
//     $booking->status = 'approve';
//     $booking->save();
//     return redirect()->back();
// }

// public function reject_book($id){
//     $booking = Booking::find($id);
//     if(!$booking){
//         return redirect()->back();
//     }
//     $booking->status = 'reject';
//     $booking->save();
//     return redirect()->back();
// }

// public function gallery(){
//     $images = Gallery::all();
//     return view('admin.gallery', compact('images'));
// }

// public function upload_gallery(Request $request){
//     $data = new Gallery;
//     $image = $request->image;
//     if ($image) {
//         $imagename = time() . '.' . $image->getClientOriginalExtension();
//         $request->image->move('gallery', $imagename);
//         $data->image=$imagename;
//         $data->save();
//         return redirect()->back();
//     }
// }

