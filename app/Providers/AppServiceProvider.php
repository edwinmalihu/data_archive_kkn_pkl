<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\User;
use App\Models\Kkn;
use App\Models\Pkl;
use App\Models\Pkltext;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\View;

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
        Gate::define('admin', function (User $user) {
            if ($user->status == 1) {
                return $user->id;
            }
        });

        Gate::define('mhs', function (User $user) {
            if ($user->status == 2) {
                return $user->id;
            }
        });

        Gate::define('mhs_dosen', function (User $user) {
            if ($user->status == 2 || $user->status == 3) {
                return $user->id;
            }
        });

        $jml_kkn = Kkn::all()->count();
        
        $jml_pkl = Pkltext::all()->count();
        View::share('count_kkn', $jml_kkn);
        View::share('count_pkl', $jml_pkl);

    }
}
