<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Booking;
use App\Models\User;
use App\Models\Package;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{

    public function storeFromWebsite(Request $request)
{
    $request->validate([
        'first_name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'travelers_count' => 'nullable|integer|min:1',
        'package' => 'required',
        'message' => 'nullable',
        'start_date' => 'nullable|date',
        'end_date' => 'nullable|date|after_or_equal:start_date',
        'no_of_rooms' => 'nullable|integer|min:1',
        'no_of_adults' => 'nullable|integer|min:1',
        'no_of_child_6_11' => 'nullable|integer|min:0',
        'no_of_child_11_above' => 'nullable|integer|min:0',
        'permit_status' => 'nullable|in:Applied,Not Applied,LTC',
        'permit_application_no' => 'nullable|string|max:255',
    ]);

    try {
        $data = $request->all();

        // Get user role ID for "Customer"
        $userRole = DB::table('user_roles')->where('role_name', 'tourist')->value('id');
        if (!$userRole) {
            return response()->json(['success' => false, 'message' => 'User role "Customer" not found. Please add it first.'], 400);
        }

        // Check if user already exists
        $user = User::where('email', $data['email'])->first();
        if (!$user) {
            $userId = User::insertGetId([
                'name' => $data['first_name'],
                'email' => $data['email'],
                'phone_number' => $data['phone'],
                'status' => 1,
                'user_role' => $userRole,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        } else {
            $userId = $user->id;
        }

        // Get package ID based on package name
        $package = Package::where('name', $data['package'])->first();
        if (!$package) {
            return response()->json(['success' => false, 'message' => 'Selected package is not available.'], 400);
        }

        // Create Booking with new fields
        $booking = new Booking();
        $booking->user_id = $userId;
        $booking->package_id = $package->id;
        $booking->subject = "Booking from Website";
        $booking->note = $request->input('message',null);
        $booking->travelers_count = $request->input('travelers_count', null);
        $booking->number_of_days = null;
        $booking->booking_type = "online";
        $booking->start_date = $request->input('start_date', null);
        $booking->end_date = $request->input('end_date', null);

        // New Fields
        $booking->no_of_rooms = $request->input('no_of_rooms', null);
        $booking->no_of_adults = $request->input('no_of_adults', null);
        $booking->no_of_child_6_11 = $request->input('no_of_child_6_11', null);
        $booking->no_of_child_11_above = $request->input('no_of_child_11_above', null);
        $booking->permit_status = $request->input('permit_status', null);
        $booking->permit_application_no = $request->input('permit_application_no', null);

        if ($booking->save()) {
            return response()->json(['success' => true, 'message' => 'Booking request submitted successfully!']);
        } else {
            return response()->json(['success' => false, 'message' => 'Failed to submit booking.'], 500);
        }

    } catch (\Exception $e) {
        return response()->json(['success' => false, 'message' => 'Something went wrong. ' . $e->getMessage()], 500);
    }
}



    
    
    

}
