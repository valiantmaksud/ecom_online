<?php

namespace App\Providers;

use App\Models\Supplier;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
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
        // Using view composer to set following variables globally

        // view()->composer('*', function ($view) {
        //     $view->with('dropdownSuppliers', Supplier::pluck('name', 'id')->toArray());
        // });


        // Str::macro('hasForeignKey', function ($table_name, $field_name) {
        //     $foreign_key_name = $table_name . '_' . $field_name . '_foreign';

        //     return count(DB::select(
        //         DB::raw(
        //             'SHOW KEYS
        //             FROM ' . $table_name . '
        //             WHERE Key_name=\'' . $foreign_key_name . '\''
        //         )
        //     )) > 0;
        // });
        // Model::preventLazyLoading(! $this->app->isProduction());
    }

}
