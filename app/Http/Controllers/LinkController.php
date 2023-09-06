<?php

namespace App\Http\Controllers;

use App\Models\ShortUrl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request as HttpRequest;

class LinkController extends Controller
{

    public function showLink($shortCode)
    {
        $urlshort = ShortUrl::withCount('visits')->orderBy('created_at', 'desc')->paginate(5);
        return view('User.Link', compact('urlshort', 'shortCode'));
    }

    public function archive($id)
    {
        $link = ShortUrl::findOrFail($id);
        $link->delete();
        return redirect()->back()->with('success', 'Link telah diarsipkan');
    }

    public function updateDeactivated(HttpRequest $request, $keyTime)
    {
        $updateUrl = ShortUrl::where('url_key', $keyTime);

        if (!$updateUrl->exists()) {
            return response()->json(['error' => 'Short link not found'], 404);
        }

        // Memperbarui kolom deactivated_at
        $updateUrl->update([
            'deactivated_at' => $request->newTime,
        ]);

        // Mengirimkan respon ke JavaScript
        return response()->json(['message' => 'Deactivation status updated successfully']);
    }
}
