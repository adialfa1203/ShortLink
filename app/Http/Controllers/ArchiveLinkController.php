<?php

namespace App\Http\Controllers;

use App\Models\ShortUrl;
use Illuminate\Http\Request;

class ArchiveLinkController extends Controller
{
    public function archiveLinkUser()
    {
        $data = ShortUrl::onlyTrashed()->paginate(5);

        return view('User.ArchiveLink', compact('data'));
    }

    public function restore($id)
    {
        $data = ShortUrl::withTrashed()->find($id)->restore();

        return redirect()->back()->with('success', 'Link telah dipulihkan');
    }

}
