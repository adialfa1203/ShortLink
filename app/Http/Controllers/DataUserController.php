<?php

namespace App\Http\Controllers;

use App\Mail\BlokirEmail;
use App\Mail\unblockEmail;
use App\Models\ShortUrl;
use App\Models\Takedown;
use App\Models\User;
use AshAllenDesign\ShortURL\Models\ShortURLVisit;
use Illuminate\Support\Facades\Mail;


class DataUserController extends Controller
{
    public function dataUser() {
        $data = User::where('is_banned', 0)->role('user')
        ->paginate(2);

        $totalUser = User::where('email', '!=', 'admin@gmail.com')
                    ->where('is_banned', '!=', '1')
                    ->count();

        $totalUrl = ShortUrl::where('archive', '!=', 'yes')->count();
        $d=$data;
        $totalMicrosite = ShortUrl::whereNotNull('microsite_uuid')->count();

        $totalVisits = ShortURLVisit::query()
                            ->whereRelation('shortURL', 'archive', '!=', 'yes')
                            ->count();

        $totaldiblokir = User::where('is_banned', 1)->count();

        $users = User::where('email', '!=', 'admin@gmail.com')->get();
        $count = [];
        foreach ($users as $user) {
            $count[$user->id] = ShortUrl::where('user_id', $user->id)->count();
        }

        // Mengurutkan data berdasarkan jumlah pengunjung
        arsort($count);
        return view('Admin.DataUserAdmin', compact('d','data','totalUser', 'totalUrl', 'totalVisits', 'users', 'count','totalMicrosite', 'totaldiblokir'));
    }


    public function banUser($userId)
    {
        $user = User::findOrFail($userId);

        if (!$user->ban()) {
            $takedownUser = ShortUrl::where('user_id', $user->id)->get();

            foreach ($takedownUser as $takedown) {
                Takedown::create([
                    'destination_url' => $takedown->destination_url,
                    'url_key' => $takedown->url_key,
                    'user_id' => $takedown->user_id,
                    'microsite_uuid' => $takedown->microsite_uuid,
                    'custom_name' => $takedown->custom_name,
                    'title' => $takedown->title,
                    'password' => $takedown->password,
                    'qr_code' => $takedown->qr_code,
                    'deleted_add' => $takedown->deleted_add,
                    'default_short_url' => $takedown->default_short_url,
                    'single_use' => $takedown->single_use,
                    'forward_query_params' => $takedown->forward_query_params,
                    'click_count' => $takedown->click_count,
                    'archive' => $takedown->archive,
                    'track_visits' => $takedown->track_visits,
                    'redirect_status_code' => $takedown->redirect_status_code,
                    'track_ip_address' => $takedown->track_ip_address,
                    'track_operating_system' => $takedown->track_operating_system,
                    'track_operating_system_version' => $takedown->track_operating_system_version,
                    'track_browser' => $takedown->track_browser,
                    'track_browser_version' => $takedown->track_browser_version,
                    'track_referer_url' => $takedown->track_referer_url,
                    'track_device_type' => $takedown->track_device_type,
                    'activated_at' => $takedown->activated_at,
                    'deactivated_at' => $takedown->deactivated_at,
                ]);
                $takedown->delete();
            }
            // Proses pemblokiran berhasil, kirim email
            Mail::to($user->email)->send(new BlokirEmail());

            // Update semua tautan pendek yang dimiliki oleh pengguna ke status diblokir
            $userShortUrls = ShortUrl::where('user_id', $user->id)->get();
            foreach ($userShortUrls as $shortUrl) {
                $shortUrl->update(['deactivated_at' => now()]);
            }

            return redirect()->back()->with('success', 'Akun berhasil di blokir');
        } else {
            // Proses pemblokiran gagal, berikan pesan kesalahan
            return redirect()->back()->with('error', 'Gagal memblokir akun');
        }
    }

    public function unbanUser($userId) {
        $user = User::findOrFail($userId);

        if (!$user->unban()) {
            $takedownUser = Takedown::where('user_id', $user->id)->get();

            foreach ($takedownUser as $takedown) {
                ShortUrl::create([
                    'destination_url' => $takedown->destination_url,
                    'url_key' => $takedown->url_key,
                    'user_id' => $takedown->user_id,
                    'microsite_uuid' => $takedown->microsite_uuid,
                    'custom_name' => $takedown->custom_name,
                    'title' => $takedown->title,
                    'password' => $takedown->password,
                    'qr_code' => $takedown->qr_code,
                    'deleted_add' => $takedown->deleted_add,
                    'default_short_url' => $takedown->default_short_url,
                    'single_use' => $takedown->single_use,
                    'forward_query_params' => $takedown->forward_query_params,
                    'click_count' => $takedown->click_count,
                    'archive' => $takedown->archive,
                    'track_visits' => $takedown->track_visits,
                    'redirect_status_code' => $takedown->redirect_status_code,
                    'track_ip_address' => $takedown->track_ip_address,
                    'track_operating_system' => $takedown->track_operating_system,
                    'track_operating_system_version' => $takedown->track_operating_system_version,
                    'track_browser' => $takedown->track_browser,
                    'track_browser_version' => $takedown->track_browser_version,
                    'track_referer_url' => $takedown->track_referer_url,
                    'track_device_type' => $takedown->track_device_type,
                    'activated_at' => $takedown->activated_at,
                    'deactivated_at' => $takedown->deactivated_at,
                ]);
                $takedown->delete();
            }

            // Proses unban berhasil, kirim email
            Mail::to($user->email)->send(new unblockEmail());

            // Hapus tanggal deactivated_at dari semua tautan pendek milik pengguna
            $userShortUrls = ShortUrl::where('user_id', $user->id)->get();
            foreach ($userShortUrls as $shortUrl) {
                $shortUrl->update(['deactivated_at' => null]);
            }

            return redirect()->back()->with('success', 'Akun berhasil dilepaskan dari blokir');
        } else {
            // Proses unban gagal, berikan pesan kesalahan
            return redirect()->back()->with('error', 'Gagal melepaskan akun dari blokir');
        }
    }

}
