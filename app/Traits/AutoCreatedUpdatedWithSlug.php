<?php

namespace App\Traits;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\App;

trait AutoCreatedUpdatedWithSlug
{

    public static function boot()
    {
        parent::boot();

        if (!App::runningInConsole()) {
            /**
             * Auto create created_by field when create anything through model
             */
            static::creating(function ($model) {
                $slug = request()->slug ?: Str::slug(request()->name);
                $slug .= '-'.$model::max('id') + 1;

                $model->fill([
                    'created_by'    => auth()->id() ?? 1,
                    'slug'          =>  $slug,
                ]);
            });





            /**
             * Auto update updated_by field when update anything of the model data
             */
            static::updating(function ($model) {
                $slug = request()->slug ?: $model->slug;
                $model->fill([
                    'updated_by'    => auth()->id() ?? 1,
                    // 'slug'          => $slug,
                ]);
            });
        }
    }





    public function scopeUserLog($query)
    {
        return $query->with('created_user', 'updated_user');
    }





    public function created_user()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }




    public function updated_user()
    {
        return $this->belongsTo(User::class, 'updated_by', 'id');
    }
}
