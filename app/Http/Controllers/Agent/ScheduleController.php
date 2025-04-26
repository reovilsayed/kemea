<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function store(Request $request) {
        foreach ($request->schedule as $item) {
            if (!empty($item['from_time']) && !empty($item['to_time'])) {
               Schedule::updateOrCreate(
                    [
                        'user_id' => auth()->id(),
                        'days' => $item['day'],
                    ],
                    [
                        'from' => $item['from_time'],
                        'to' => $item['to_time'],
                    ]
                );
            }
        }
    
        return back()->with('success', 'Schedule saved successfully!');
    }
}
