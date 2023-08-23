<?php

namespace App\Http\Controllers;

use App\Models\ShortUrl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LinkController extends Controller
{
    public function Link()
    {
        $urlshort = ShortUrl::orderBy('created_at', 'desc')->paginate(5);
        return view('User.Link', compact('urlshort'));
    }

    public function archive($id)
    {
        $link = ShortUrl::find($id);
        $link->delete();
        return redirect()->back()->with('success', 'Link telah diarsipkan');
    }

    public function activeLink(Request $request)
    {
        // $Visits = \AshAllenDesign\ShortURL\Models\ShortURL::find(1);
        // $visits = $Visits->visits;

        $builder = new \AshAllenDesign\ShortURL\Classes\Builder();
        $shortURLObject = $builder->destinationUrl($request->destination_url)
                        ->make();
        $shortURL = $shortURLObject->default_short_url;

        // dd($shortURLObject);

        $find = ShortUrl::query()->where('url_key', $shortURLObject->url_key)->first();

        $find->update([
            'user_id' => auth()->id(),
            'default_short_url' => $shortURL,
            'password' => Hash::make($request->password),
            'active' => $request->active,
            'deleted_add' => $request->deleted_add,
            'click_count' => $request->click_count,
            'qr_code' => $request->qr_code,
            'title' => $request->title,
            'deactivated_at' => $request->deactivated_at
        ]);

        return redirect()->back()->with('success', 'link berhasil terpotong');
    }
    public function archiveLink(Request $request)
    {

        $builder = new \AshAllenDesign\ShortURL\Classes\Builder();
        $shortURLObject = $builder->destinationUrl($request->destination_url)
                        ->make();
        $shortURL = $shortURLObject->default_short_url;

        $find = ShortUrl::query()->where('url_key', $shortURLObject->url_key)->first();

        $find->update([
            'user_id' => auth()->id(),
            'default_short_url' => $shortURL,
            'password' => Hash::make($request->password),
            'active' => '1',
            'deleted_add' => $request->deleted_add,
            'click_count' => $request->click_count,
            'qr_code' => $request->qr_code,
            'title' => $request->title,
            'deactivated_at' => $request->deactivated_at
        ]);

        return redirect()->back()->with('success', 'link berhasil terpotong');
    }
}
