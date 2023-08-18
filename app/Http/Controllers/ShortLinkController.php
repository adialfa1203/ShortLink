<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\ShortUrl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class ShortLinkController extends Controller
{
    public function shortLink(Request $request)
    {
        $builder = new \AshAllenDesign\ShortURL\Classes\Builder();
        $shortURLObject = $builder->destinationUrl($request->destination_url)->forwardQueryParams()->make();
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

        return response()->json($find);
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