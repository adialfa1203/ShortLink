<?php

namespace App\Http\Controllers;

use App\Models\ShortUrl;

class ArchiveLinkController extends Controller
{
    public function archiveLinkUser()
    {
        $urlshort = ShortUrl::orderBy('created_at', 'desc')->paginate(5);
        $data = ShortUrl::onlyTrashed()->paginate(5);

        return view('User.ArchiveLink', compact('data','urlshort'));
    }

    public function restore($id)
    {
        $data = ShortUrl::withTrashed()->find($id)->restore();

        return redirect()->back()->with('success', 'Link telah dipulihkan');
    }

}
