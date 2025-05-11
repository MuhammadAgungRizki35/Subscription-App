<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use App\Jobs\UpdateSubscriptionStatus;
use Illuminate\Http\Request;
use Carbon\Carbon;

class SubscriptionController extends Controller
{
    // Menampilkan form langganan
    public function showForm()
    {
        return view('subscribe');
    }

    // Menangani proses berlangganan
    public function subscribe(Request $request)
    {
        // Validasi input tanpa mengecek keberadaan user di tabel users
        $request->validate([
            'user_id' => 'required|numeric', // User ID bebas, hanya memastikan berupa angka
            'package' => 'required|in:A,B,C',
        ]);

        // Tentukan masa aktif berdasarkan paket yang dipilih
        $endDate = Carbon::now();
        switch ($request->package) {
            case 'A':
                $endDate->addDays(30);
                break;
            case 'B':
                $endDate->addDays(60);
                break;
            case 'C':
                $endDate->addDays(90);
                break;
        }

        // Buat langganan baru
        $subscription = Subscription::create([
            'user_id' => $request->user_id, // Bebas input ID
            'package' => $request->package,
            'start_date' => Carbon::now(),
            'end_date' => $endDate,
            'status' => 'active',
        ]);

        // Jalankan job untuk memeriksa status langganan
        UpdateSubscriptionStatus::dispatch($subscription);

        return redirect()->route('subscriptions')->with('success', 'Subscription successful');
    }

    // Menampilkan langganan aktif pengguna
    public function showSubscriptions()
    {
        $subscriptions = Subscription::where('status', 'active')->get();
        return view('subscriptions', compact('subscriptions'));
    }
}
