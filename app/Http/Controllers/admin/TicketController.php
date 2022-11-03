<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{

    public function participant_listing($id)
    {
        $ticket= Ticket::where('id' , $id)->first();
        return view('admin_dashboard.content_management.content_management', compact('ticket'));
    }
    public function ticket_listings()
    {

        $ticket = Ticket::get();
        return view('admin_dashboard.Ticket_management.ticket_management', compact('ticket'));
    }

    function upload_files($file)
    {
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('public/ticket/', $fileName);
        $loadPath = storage_path('app/public/') . '/' . $fileName;
        return $fileName;
    }

    public function add_ticket(Request $request)
    {


        $this->validate($request, [
            'club_name' => 'required',
            'total_number' => 'required',
            'subject' => 'required',
            'meet_up_date' => 'required',
            'last_date' => 'required',
            'number_of_gathering' => 'required',
            'meet_now' => 'required',
            'tag_1' => 'required',
            'tag_2' => 'required',
            'description' => 'required',
            'sub_description' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg',
        ]);
        $file = $this->upload_files($request['image']);
        $ticket = Ticket::create([
            'club_name' => $request['club_name'],
            'number' => $request['total_number'],
            'subject' => $request['subject'],
            'meet_up_date' => $request['meet_up_date'] ,//2022-11-21 02:10:02
            'date_last_meeting' => $request['last_date'],
            'gatherings' => $request['number_of_gathering'],
            'meetups' => $request['meet_now'],
            'tag_1' => $request['tag_1'],
            'tag_2' => $request['tag_2'],
            'description' => $request['description'],
            'sub_description' => $request['sub_description'],
            'image' =>  $file,
        ]);
        if ($ticket) {
            return json_encode([
                'error' => false,
                'message' => 'Ticket has been added successfully.'
            ]);
        } else {
            return json_encode([
                'error' => false,
                'message' => 'Something went wrong Please try again.'
            ]);
        }
    }

    public function delete_ticket(Request $request)
    {
        $ticket = Ticket::where('id', $request['id'])->delete();
        if ($ticket) {
            return redirect()->back()->with('msg', 'Ticket has been deleted Successfully.');
        } else {
            return redirect()->back()->with('error', 'Something went wrong, please try again');
        }
    }

    // public function edit_ticket(Request $request)
    // {
    //     dd($request->all());
    //     $this->validate($request, [
    //         'club_name' => 'required',
    //         'total_number' => 'required',
    //         'subject' => 'required',
    //         'meet_up_date' => 'required',
    //         'last_date' => 'required',
    //         'number_of_gathering' => 'required',
    //         'meet_now' => 'required',
    //         'tag_1' => 'required',
    //         'tag_2' => 'required',
    //         'description' => 'required',
    //         'sub_description' => 'required',
    //     ]);
    //     if ($request['image'] == null) {
    //         $file = $this->upload_files($request['image']);
    //         $ticket = Ticket::where('id', $request['id'])->update([
    //             'club_name' => $request['club_name'],
    //             'number' => $request['total_number'],
    //             'subject' => $request['subject'],
    //             'meet_up_date' => $request['meet_up_date'],
    //             'date_last_meeting' => $request['last_date'],
    //             'gatherings' => $request['number_of_gathering'],
    //             'meetups' => $request['meet_now'],
    //             'tag_1' => $request['tag_1'],
    //             'tag_2' => $request['tag_2'],
    //             'description' => $request['description'],
    //             'sub_description' => $request['sub_description'],
    //             'image' =>  $file,
    //         ]);
    //     }else{
    //         $ticket = Ticket::where('id', $request['id'])->update([
    //             'club_name' => $request['club_name'],
    //             'number' => $request['total_number'],
    //             'subject' => $request['subject'],
    //             'meet_up_date' => $request['meet_up_date'],
    //             'date_last_meeting' => $request['last_date'],
    //             'gatherings' => $request['number_of_gathering'],
    //             'meetups' => $request['meet_now'],
    //             'tag_1' => $request['tag_1'],
    //             'tag_2' => $request['tag_2'],
    //             'description' => $request['description'],
    //             'sub_description' => $request['sub_description'],
    //         ]);
    //     }
    //     if ($ticket) {
    //         return json_encode([
    //             'error' => false,
    //             'message' => 'Ticket has been update successfully.'
    //         ]);
    //     } else {
    //         return json_encode([
    //             'error' => false,
    //             'message' => 'Something went wrong Please try again.'
    //         ]);
    //     }
    // }
}
