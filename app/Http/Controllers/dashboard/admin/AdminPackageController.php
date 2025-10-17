<?php

namespace App\Http\Controllers\dashboard\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\PackageDetail;
use App\Models\PackageMedia;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class AdminPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $packages=Package::all();
        return view('dashboard.package.index')->with(compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.package.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'title'=>'required',
            'price' => 'required',
            'short_description' => 'required',
            'image' => 'nullable|mimes:jpg,jpeg,png,webp,svg,gif',
            'status' =>'required'
        ]);
        try {
            $thumbnailImagePath = null;
            if ($request->hasFile('image')) {
                $thumbnailImagePath = $request->file('image')->store('uploads/images/Packages', 'public');
            }

            $package= new Package();
            $package->name = $request->input('name');
            $package->title = $request->input('title');
            $package->price = $request->input('price');
            $package->short_description = $request->input('short_description');
            $package->status =  $request->has('status') ? 1 : 0;
            $package->image = $request->file('image')? $thumbnailImagePath :NULL;
            $package->locations = $request->input('locations') ?: NULL;

            $success = $package->save();
            if($success){
                $message ='Package added successfully ';
                return redirect()->back()->with(compact('message'));
            }
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Something went wrong. Please try again.'])->withInput($request->input());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request,string $id)
    {
        $package = Package::findOrFail($id);
        $details = PackageDetail::where('package_id',$package->id)->first();
        $package_media=PackageMedia::where('package_id',$package->id)->get();

        $package_main = [];
        $package_main[] = [
            'package_id' => $package->id,
            'id' => $details->id ?? null,
            'title' => $package->title ?? null,
            'description' => $details->description ?? null,
            'shortdescription' => $details->shortdescription ?? null,
            'inclusion' => $details->inclusion ?? null,
            'exclusion' => $details->exclusion ?? null,
            'note' => $details->note ?? null,
        ];

        //dump($package_media);
        return view('dashboard.package.view')->with(compact('package_main','package_media','package'));
    }

    public function storeMedia(Request $request,$id)
    {
        $request->validate([
            'image' => 'required|mimes:jpg,jpeg,webp,png,svg,gif|max:2048',
        ]);

        try {
            $thumbnailImagePath = null;
            if ($request->hasFile('image')) {
                $thumbnailImagePath = $request->file('image')->store('uploads/images/PackageMedia/images', 'public');

            }
            $package = Package::findOrFail($id);
            $details = PackageDetail::where('package_id',$package->id)->first();
            // if (!$details) {
            //     return redirect()->back()->withErrors(['error' => 'Package details not found.'])->withInput($request->input());
            // }
            $media = new PackageMedia();
            $media->package_id  = $package->id;
            $media->package_detail_id  = $details->id ?? null;
            $media->media_type = "IMAGE";
            $media->media_url = $thumbnailImagePath;
            $media->deleted_at = null;
            \Log::info('Saving Media:', $media->toArray());
            $success = $media->save();
            \Log::info('Save result:', ['success' => $success]);
            if($success){
                $message ='Media added successfully ';
                return redirect()->back()->with(compact('message'));
            }
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Something went wrong. Please try again.'])->withInput($request->input());
        }
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
        $package = Package::findOrFail($id);
        $existing_image = base_path($package->image);
        if($request->file('image')){
            if(File::exists($existing_image)){
                File::delete($existing_image);
            }
            $file = $request->file('image');
           $thumbnailImagePath = $request->file('image')->store('uploads/images/Packages', 'public');
        }
        $updated = $package->update([
            'name' => $request->input('name')?: $package->name,
            'title' => $request->input('title')?: $package->title,
            'price' => $request->input('price')?: $package->price,
            'short_description' => $request->input('short_description')?: $package->short_description,
            'status' =>  $request->has('status') ? $request->input('status') : $package->status,
            'image' => $request->file('image')?$thumbnailImagePath:$package->image,
            'locations' => $request->input('locations')?: $package->locations,

        ]);
        if($updated){
            return redirect()->back()->with(['message' => 'Successfully updated']);
        }
    }

    public function storeDetail(Request $request, string $id)
    {
        $package = Package::findOrFail($id);
        $package_detail = PackageDetail::where('package_id',$package->id)->first();
        if($package_detail) {
            $updated = $package_detail->update([
                'description' => $request->input('description')?: $package_detail->description,
                'inclusion' => $request->input('inclusion')?: $package_detail->inclusion,
                'exclusion' => $request->input('exclusion')?: $package_detail->exclusion,
                'note' => $request->input('note')?: $package_detail->note,
            ]);
            if($updated){
                return redirect()->back()->with(['message' => 'Successfully updated']);
            }
        }
        else {
            $request->validate([
                'description'=>'required',
                'inclusion'=>'required',
                'exclusion' => 'required',
                'note' => 'required',
            ]);
            $detail= new PackageDetail();
            $detail->package_id  = $package->id;
            $detail->description = $request->input('description');
            $detail->inclusion = $request->input('inclusion');
            $detail->exclusion = $request->input('exclusion');
            $detail->note = $request->input('note');
            $success = $detail->save();
            if($success){
                $message ='Package added successfully ';
                return redirect()->back()->with(compact('message'));
            }
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $success = Package::where('id',$id)->delete();
        if($success){
            return redirect()->back()->with(['message'=>'delete success']);
        }
    }

    public function destroyMedia($id)
    {
        $success = PackageMedia::where('id',$id)->delete();
        if($success){
            return redirect()->back()->with(['message'=>'delete success']);
        }
    }

}
