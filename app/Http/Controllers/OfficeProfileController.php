<?php

namespace App\Http\Controllers;

use App\Models\OfficeProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class OfficeProfileController extends Controller
{
    public function officeProfill()
    {
        return view('agent.pages.agent_office_management.create_office_profile');
    }

    public function officeProfile_store(Request $request)
    {
      
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
            $images = []; 
            foreach ($request->images as $image) {
                $images[] = $image->store('profiles', 'public');
            }
        }

        OfficeProfile::updateOrCreate([
            'user_id' => auth()->id()
        ], [
            'name' => $request->name,
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
