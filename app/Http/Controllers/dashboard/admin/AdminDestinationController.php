<?php

namespace App\Http\Controllers\dashboard\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Destination;
use Illuminate\Support\Facades\File;

class AdminDestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $destinations= Destination::all();
        return view('dashboard.destination.index')->with(compact('destinations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.destination.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'location' => 'required',
            'short_description' => 'required',
            'image' => 'nullable|mimes:jpg,jpeg,webp,png,svg,gif|max:2048',
            'status' =>'required'
        ]);
        try {
            $thumbnailImagePath = null;
            if ($request->hasFile('image')) {
                $thumbnailImagePath = $request->file('image')->store('uploads/images/Destinations', 'public');
            }

            $destination= new Destination();
            $destination->name = $request->input('name');
            $destination->location = $request->input('location');
            $destination->short_description = $request->input('short_description');
            $destination->status =  $request->has('status') ? 1 : 0;
            $destination->image = $request->file('image')? $thumbnailImagePath :NULL;
            $success = $destination->save();
            if($success){
                $message ='Destination added successfully ';
                return redirect()->back()->with(compact('message'));
            }
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Something went wrong. Please try again.'])->withInput($request->input());
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $destination = Destination::findOrFail($id);
        $existing_image = base_path($destination->image);
        if($request->file('image')){
            if(File::exists($existing_image)){
                File::delete($existing_image);
            }
            $file = $request->file('image');
           $thumbnailImagePath = $request->file('image')->store('uploads/images/Destinations', 'public');
        }
        $updated = $destination->update([
            'name' => $request->input('name')?: $destination->name,
            'location' => $request->input('location')?: $destination->location,
            'short_description' => $request->input('short_description')?: $destination->short_description,
            'status' =>  $request->has('status') ? $request->input('status') : $destination->status,
            'image' => $request->file('image')?$thumbnailImagePath:$destination->image,
        ]);
        if($updated){
            return redirect()->back()->with(['message' => 'Successfully updated']);
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $success = Destination::where('id',$id)->delete();
        if($success){
            return redirect()->back()->with(['message'=>'delete success']);
        }
    }
}
