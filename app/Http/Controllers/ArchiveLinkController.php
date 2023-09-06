<?php

namespace App\Http\Controllers;

use App\Models\ShortUrl;

class ArchiveLinkController extends Controller
{
    public function archiveLinkUser()
    {
        // $urlshort = ShortUrl::orderBy('created_at', 'desc')->paginate(5);
        $user = auth()->user(); // Mengambil objek User saat ini
        $user_id = $user->id;
        $data = ShortUrl::where('user_id', $user_id)->onlyTrashed()->paginate(5);

        return view('User.ArchiveLink', compact('user','data'));
    }

    public function restore($id)
    {
        $data = ShortUrl::withTrashed()->find($id)->restore();

        return redirect()->back()->with('success', 'Link telah dipulihkan');
    }

}
