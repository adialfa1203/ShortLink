<?php

namespace App\Http\Controllers;
use App\Models\User;

class DataUserController extends Controller
{
    public function dataUser() {
        $data = User::where('is_banned', 0)->role('user')->get();
        return view('Admin.DataUserAdmin', compact('data'));
    }
    

    public function banUser($userId) {
        $user = User::findOrFail($userId);
        $user->ban();
        return redirect()->back()->with('success', 'Anda telah mengBanned user ini');
    }

    public function unbanUser($userId) {
        $user = User::findOrFail($userId);
        $user->unban();
        return redirect()->back()->with('success', 'Anda telah mengUnbanned user ini');
    }

}
