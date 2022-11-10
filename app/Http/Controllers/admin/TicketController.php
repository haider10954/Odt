<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Request;

class TicketController extends Controller
{

    public function participant_listing($id)
    {
        $ticket = Ticket::where('id', $id)->first();
        $reserve = Reservation::paginate(5);
        $confirmed_reservations = Reservation::where('status', 'completed')->count();
        $user = User::get();
        return view('admin_dashboard.content_management.content_management', compact('ticket', 'reserve', 'user', 'confirmed_reservations'));
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
        $tag1 = collect(json_decode($request->tag_1))->pluck('value');
        $tag2 = collect(json_decode($request->tag_2))->pluck('value');
        $ticket = Ticket::create([
            'club_name' => $request['club_name'],
            'number' => $request['total_number'],
            'subject' => $request['subject'],
            'meet_up_date' => $request['meet_up_date'], //2022-11-21 02:10:02
            'date_last_meeting' => $request['last_date'],
            'gatherings' => $request['number_of_gathering'],
            'meetups' => $request['meet_now'],
            'tag_1' => $tag1,
            'tag_2' => $tag2,
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

    public function edit_ticket_form($id)
    {
        $ticket = Ticket::where('id', $id)->first();
        return view('admin_dashboard.Ticket_management.edit_ticket', compact('ticket'));
    }

    public function edit_ticket(Request $request)
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
        ]);
        $tag1 = collect(json_decode($request->tag_1))->pluck('value');
        $tag2 = collect(json_decode($request->tag_2))->pluck('value');
        if ($request->hasFile('image')) {
            $file = $this->upload_files($request['image']);
            $ticket = Ticket::where('id', $request['id'])->update([
                'club_name' => $request['club_name'],
                'number' => $request['total_number'],
                'subject' => $request['subject'],
                'meet_up_date' => $request['meet_up_date'],
                'date_last_meeting' => $request['last_date'],
                'gatherings' => $request['number_of_gathering'],
                'meetups' => $request['meet_now'],
                'tag_1' => $tag1,
                'tag_2' => $tag2,
                'description' => $request['description'],
                'sub_description' => $request['sub_description'],
                'image' =>  $file,
            ]);
        } else {
            $ticket = Ticket::where('id', $request['id'])->update([
                'club_name' => $request['club_name'],
                'number' => $request['total_number'],
                'subject' => $request['subject'],
                'meet_up_date' => $request['meet_up_date'],
                'date_last_meeting' => $request['last_date'],
                'gatherings' => $request['number_of_gathering'],
                'meetups' => $request['meet_now'],
                'tag_1' => $tag1,
                'tag_2' => $tag2,
                'description' => $request['description'],
                'sub_description' => $request['sub_description'],
            ]);
        }
        if ($ticket) {
            return json_encode([
                'error' => false,
                'message' => 'Ticket has been update successfully.'
            ]);
        } else {
            return json_encode([
                'error' => false,
                'message' => 'Something went wrong Please try again.'
            ]);
        }
    }

    public function delete_ticket_image(Request $request)
    {


        $picture = explode('/', $request->image);

        $image_name = $picture[count($picture) - 1];
        $data['image'] = $request->image;
        $ticket = Ticket::where('id', $request->id)->update($data);

        $filePath = storage_path('app/public/ticket/' . $image_name);
        if (file_exists($filePath)) {
            @unlink($filePath);
        }

        if ($ticket) {
            return response()->json([
                'success' => true,
                'message' => 'Ticket image deleted Successfully'
            ]);
        } else {

            return response()->json([
                'success' => false,
                'message' => 'Something went wrong, Please try again'
            ]);
        }
    }

    public function update_status(Request $request)
    {
        $status = $request->post('status');
        $id = $request->post('id');
        $ticket_status = Reservation::where('id', $id)->update([
            'status' => $status,
        ]);

        if ($ticket_status) {
            return response()->json([
                'success' => true,
                'message' => 'Ticket Reservation Status Updated Successfully'
            ]);
        } else {

            return response()->json([
                'success' => false,
                'message' => 'Something went wrong, Please try again'
            ]);
        }
    }
}
