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
        if ($request->hasFile('image')) {
            if (auth()->user()->officeProfile && storage::exists(auth()->user()->officeProfile->image)) {
                Storage::delete(auth()->user()->officeProfile->image);
            }
            $image = $request->file('image')->store('profiles', 'public');
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
            'image' => $image,
        ]);


        return redirect()->route('officeProfile')->with('success', 'Office Profile saved successfully!');
    }

}
