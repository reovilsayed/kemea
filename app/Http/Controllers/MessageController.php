<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function messages($id = null)
    {

        $allUnseenMessages = Message::where(function ($query) {
            $query->where('sender_id', auth()->id())
                ->orWhere('reciver_id', auth()->id());
        })
            ->where('seen', 0)
            ->get();
        if ($id) {

            $user = User::find($id);
            $massages = Message::where(function ($q) use ($user) {
                $q->where('sender_id', auth()->id())->where('reciver_id', $user->id);
            })->orWhere(function ($q) use ($user) {
                $q->where('sender_id', $user->id)->where('reciver_id', auth()->id());
            })->orderBy('id', 'asc')->get();

            $this->seenMassages($massages, $id);
        } else {
            $massage = Message::where(function ($q) {
                $q->where('sender_id', auth()->id())->Orwhere('reciver_id', auth()->id());
            })->latest()->first();
            if ($massage) {
                $userId = ($massage->reciver_id == auth()->id()) ? $massage->sender_id : $massage->reciver_id;

                return redirect()->route('agent.dashboard.messages', $userId);
            }
            $user = new User();
            $massages = [];
        }
        if (auth()->user()->role_id == 2) {

            $massageusers = Message::where('sender_id', auth()->id())->pluck('reciver_id')->unique();
        } else {
            $massageusers = Message::where('reciver_id', auth()->id())->pluck('sender_id')->unique();
        }


        $users = User::whereIn('id', $massageusers)->get();
        if (auth()->user()->role_id == 2) {

            return view('user.messages', compact('users', 'massages', 'user'));
        } else {


            return view('agent.pages.messages', compact('users', 'massages', 'user', 'allUnseenMessages'));
        }
    }

    public function store(Request $request,$id=null)
    {
        $request->validate([
            'message' => 'nullable',
            'property_id' => 'required',
        ]);
   
        $file=null;
        if($request->has('file')){
            $file=$request->file->store('chat_images','public');
            
        }
        $message = Message::create([
            'sender_id' => auth()->id(),
            'reciver_id' => $id,
            'message' => $request->message,
            'property_id'=>$request->property_id,
            'file'=>$file,
        ]);
     

        if (auth()->user()->role_id == 2) {

            return redirect()->route('user.messages', $id)->with('success', 'Message send successfull');
        } else {
            return redirect()->route('agent.dashboard.messages', $id)->with('success', 'Message send successfull');
        }
    }

    private function seenMassages($massages, $id)
    {


        if ($massages->count() > 0) {
            foreach ($massages as $massage) {
                if ($massage->sender_id == $id) {

                    $massage->update([
                        'seen' => true,
                    ]);
                }
            }
        }
    }
}
