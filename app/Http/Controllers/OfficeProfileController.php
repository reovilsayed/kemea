<?php

namespace App\Http\Controllers;

use App\Models\OfficeProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class OfficeProfileController extends Controller
{
    public function officeProfill()
    {
        return view('agent.pages.agent_office_management.create_office_profile');
    }

    public function officeProfile_store(Request $request)
    {
        $logo=auth()->user()->officeProfile ? auth()->user()->officeProfile->logo :null;
        $images=auth()->user()->officeProfile ? json_decode(auth()->user()->officeProfile->images) :[];
      
        if ($request->hasFile('logo')) {
            if (auth()->user()->officeProfile && storage::exists(auth()->user()->officeProfile->logo)) {
                Storage::delete(auth()->user()->officeProfile->logo);
            }
            $logo = $request->file('logo')->store('profiles', 'public');
        }
        if ($request->images) {
            if (auth()->user()->officeProfile && auth()->user()->officeProfile->image) {
                $oldImages = json_decode(auth()->user()->officeProfile->image, true);
        
                if (is_array($oldImages)) {
                    foreach ($oldImages as $oldImage) {
                        if (Storage::exists($oldImage)) {
                            Storage::delete($oldImage);
                        }
                    }
                }
            }
            
            foreach ($request->images as $image) {
                $images[] = $image->store('profiles', 'public');
            }
        }
        $uniqueId = substr(Str::uuid()->toString(8), 0, 10);

        OfficeProfile::updateOrCreate([
            'user_id' => auth()->id()
        ], [
            'name' => $request->name,
            'slug'=>$uniqueId,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'details' => $request->details,
            'logo' => $logo,
            'images' => json_encode($images),
        ]);

      
        return redirect()->route('agent.dashboard.officeProfile')->with('success', 'Office Profile saved successfully!');
    }

}
