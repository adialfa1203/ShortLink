<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class DataUserController extends Controller
{
    public function dataUser() {
        $data = User::role('user')->get();
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
