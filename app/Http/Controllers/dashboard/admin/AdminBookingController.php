<?php

namespace App\Http\Controllers\dashboard\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\User;
use App\Models\Package;
use App\Models\Note;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use App\Exports\BookingExport;
use Maatwebsite\Excel\Facades\Excel;
class AdminBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
        public function index(Request $request)
        {
        $query = Booking::query();

        // Apply date filtering if both start_date and end_date are provided
        if ($request->has('start_date') && $request->has('end_date')) {
            $startDate = $request->start_date;
            $endDate = $request->end_date;

            $query->whereBetween('start_date', [$startDate, $endDate]);
        }

        $bookings = $query->get();
        $booking_main = [];

        foreach ($bookings as $item) {
            $user = User::where('id', $item->user_id)->first();
            $package = Package::where('id', $item->package_id)->first();

            $booking_main[] = [
                'id' => $item->id,
                'tourist_name' => $user->name ?? null,
                'package_name' => $package->title ?? null,
                'package_price' => $package->price ?? null,
                'email' => $user->email ?? null,
                'phone_number' => $user->phone_number ?? null,
                'status' => $item->status,
                'start_date' => $item->start_date,
            ];
        }

        // Sort the filtered bookings by start_date
        usort($booking_main, function ($a, $b) {
            return strtotime($a['start_date']) - strtotime($b['start_date']);
        });

        return view('dashboard.booking.index', compact('booking_main'));
        }



    public function export() {
        return Excel::download(new BookingExport, 'Booking.xlsx');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $packages=Package::all();
        return view('dashboard.booking.add')->with(compact('packages'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'phone_number' => 'required',
        'email' => 'required|email',
        'package_id' => 'required',
        'subject' => 'required',
        'start_date' => 'required|date',
        'end_date' => 'required|date|after_or_equal:start_date',
        'travelers_count' => 'nullable|integer|min:1',
        'no_of_rooms' => 'nullable|integer|min:1',
        'no_of_adults' => 'nullable|integer|min:1',
        'no_of_child_6_11' => 'nullable|integer|min:0',
        'no_of_child_11_above' => 'nullable|integer|min:0',
        'permit_status' => 'nullable|in:Applied,Not Applied,LTC',
        'permit_application_no' => 'nullable|string|max:255',
    ]);

    try {
        $data = $request->all();

        // Check if user already exists
        $user = DB::table('users')->where('email', $data['email'])->first();
        if (!$user) {
            $userId = DB::table('users')->insertGetId([
                'name' => $data['name'] ?? NULL,
                'phone_number' => $data['phone_number'] ?? NULL,
                'email' => $data['email'],
                'status' => isset($data['status']) ? 1 : 0,
                'user_role' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        } else {
            $userId = $user->id;
        }

        // Calculate number of days
        $startDate = Carbon::parse($data['start_date']);
        $endDate = Carbon::parse($data['end_date']);
        $numberOfDays = $startDate->diffInDays($endDate) + 1;

        // Create Booking with new fields
        $booking = new Booking();
        $booking->user_id = $userId;
        $booking->package_id = $data['package_id'] ?? NULL;
        $booking->subject = $data['subject'] ?? NULL;
        $booking->note = $data['note'] ?? NULL;
        $booking->number_of_days = $data['number_of_days'] ?? $numberOfDays;
        $booking->start_date = $startDate;
        $booking->end_date = $endDate;
        $booking->booking_type = "offline";
        $booking->travelers_count = $data['travelers_count'] ?? NULL;
        $booking->no_of_rooms = $data['no_of_rooms'] ?? NULL;
        $booking->no_of_adults = $data['no_of_adults'] ?? NULL;
        $booking->no_of_child_6_11 = $data['no_of_child_6_11'] ?? NULL;
        $booking->no_of_child_11_above = $data['no_of_child_11_above'] ?? NULL;
        $booking->permit_status = $data['permit_status'] ?? NULL;
        $booking->permit_application_no = $data['permit_application_no'] ?? NULL;

        if ($booking->save()) {
            return redirect()->route('booking.add')->with('message', 'Booking added successfully');

        } else {
            return redirect()->back()->withErrors(['message' => 'Failed to add Booking.'])->withInput($request->input());
        }

    } catch (\Exception $e) {
        return redirect()->back()->withErrors(['error' => 'Something went wrong. ' . $e->getMessage()])->withInput($request->input());
    }
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $booking= Booking::findOrFail($id);
        if ($booking) {
            $user=User::where('id',$booking->user_id)->first();
            $package=Package::where('id',$booking->package_id)->first();
            $notes=Note::where('booking_id',$id)->get();
            return view('dashboard.booking.view')->with(compact('booking','user','notes','package'));
        }else {
            return redirect()->back()->withErrors(['message' => 'Failed to load Booking.'])->withInput($request->input());
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $booking = Booking::findOrFail($id);
        $updated = $booking->update([
            'status' =>  $request->has('status') ? $request->input('status') : $booking->status,
        ]);
        $note= new Note();
        $note->booking_id = $booking->id;
        $note->note = $request->input('note')? : NULL;
        $success = $note->save();
        if($success) {
            $message = 'Booking status added successfully';
            return redirect()->back()->with(compact('message'));
        } else {
            $message = 'Failed to add Booking status. Please try again.';
            return redirect()->back()->withErrors(compact('message'));
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Note::where('booking_id', $id)->delete();
        $success = Booking::where('id', $id)->delete();

        if ($success) {
            return redirect()->back()->with(['message' => 'Delete success']);
        } else {
            return redirect()->back()->withErrors(['message' => 'Delete failed.']);
        }
    }

}
