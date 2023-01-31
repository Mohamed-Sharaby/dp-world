<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Notifications\AdminEmail;
use App\Notifications\UserEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;

class HomeController extends Controller
{
    public function save(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
           // 'pledge' => 'required|string',
           // 'location' => 'required|string|in:JAFZA-14,JAFZA-17',
        ]);
        try {

            DB::beginTransaction();

            $data = User::create([
                'name' => $request->name,
                'email' => $request->email,
//                'phone' => null,
//                'company_name' => null,
//                'pledge' => $request->pledge,
//                'image' => $request->image,
//                'location' => $request->location,
            ]);

           // $adminEmail = $request->location == 'JAFZA-14' ? 'sustainability.uae@dpworld.com' : 'sustainability@dpworld.com';
            Notification::route('mail', 'admin@admin.com')->notify(new AdminEmail($data));
            Notification::route('mail', $request->email)->notify(new UserEmail($data));

            DB::commit();

            return response()->json(['message' => 'Saved & Emails Send.'], 200);

        } catch (\Exception $e) {
            //return $e;
            return response()->json(['message' => 'Something went wrong.'], 404);
        }


    }
}
