<?php

namespace App\Providers;
use App\Models\Kelas;
use App\Models\KuisResult;
use App\Models\FeedbackGuru;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        view()->composer('*', function ($view) {

            if (Auth::check()) {
                $user = Auth::user();

                // jumlah kelas guru
                $jumlahKelasGuru = 0;
                if (strtolower($user->role) === 'guru') {
                    $jumlahKelasGuru = Kelas::where('pengguna_id', $user->id)->count();
                }

                $view->with('jumlahKelasGuru', $jumlahKelasGuru);
            } else {
                $view->with('jumlahKelasGuru', 0);
            }
        });
    }
}
