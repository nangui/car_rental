<?php

namespace App\Providers;

use App\User;
use App\Compte;
use App\Setting;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        if (User::all()->count() === 0) {
            $user = User::create([
                'name' => 'Adonai Nangui',
                'email' => 'adonainangui03@gmail.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
            ]);

            Compte::create([
                'user_id' => $user->id,
                'active' => 1,
                'is_admin' => 1
            ]);
        }

        if (Setting::all()->count() === 0) {
            Setting::create([]);
        }
    }
}
