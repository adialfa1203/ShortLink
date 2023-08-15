<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class ShortLinkController extends Controller
{
    public function shortLink(Request $request)
    {
        $builder = new \AshAllenDesign\ShortURL\Classes\Builder();
        $shortURLObject = $builder->destinationUrl('https://www.google.com')->forwardQueryParams()->make();
        $shortURL = $shortURLObject->default_short_url;

        // $ShortLink = Link::create([
        //     'original_url' => $request->original_url,
        //     'short_code' => $shortURL,
        //     'creation_date' => $request->creation_date,
        //     'expiration_date' => $request->expiration_date,
        //     'click_count' => $request->click_count,
        //     'user_id' => Auth::user()->user_id,
        //     'qr_code' => $request->qr_code,
        //     'active' => $request->active,
        //     'password' => Hash::make($request->password),
        //     'deleted_add' => $request->deleted_add,                       
        // ]);
        // $request->original_url
        $ShortLink = Link::create([
            'original_url' => 'https://www.google.com',
            'short_code' => $shortURL,
            'creation_date' => '2023-08-11',
            'expiration_date' => '2023-08-12',
            'click_count' => '11',
            'user_id' => '1',
            'qr_code' => 'https://google.com',
            'active' => '1',
            'password' => Hash::make('12345'),
            'deleted_add' => 'yaaa',                     
        ]);
        // $request->original_url

        // $ShortLink = Link::create([
        //     'original_url' => 'https://open.spotify.com/intl-id',
        //     'short_code' => $shortURL,
        //     'creation_date' => '2023-08-11',
        //     'expiration_date' => '2023-08-12',
        //     'click_count' => '11',
        //     'user_id' => '1',
        //     'qr_code' => 'https://open.spotify.com/intl-id',
        //     'active' => '1',
        //     'password' => Hash::make('12345'),
        //     'deleted_add' => 'yaaa',                       
        // ]);
        $ShortLink->save();

        return redirect()->back()->with('success', 'Link berhasil terpotong');
    }
    public function accessShortLink(Request $request, $shortCode)
    {
        // Anda mungkin perlu menyesuaikan ini dengan metode yang digunakan oleh pustaka tautan pendek yang Anda gunakan.
        // Contoh permintaan HTTP ke tautan pendek yang telah Anda buat.
        $response = Http::get($shortCode);

        // Ambil parameter dari permintaan yang masuk.
        $parameterValue = $request->query('parameter_name'); // Ganti 'parameter_name' dengan nama parameter yang sesuai.

        // Lakukan apa pun yang diperlukan dengan $parameterValue atau $response.
        // Misalnya, tampilkan tautan asli dan parameter di view.
        return view('shortlink', [
            'originalLink' => $response->body(), // asumsi bahwa tautan asli dikembalikan dalam body response.
            'parameterValue' => $parameterValue,
        ]);
    }
}