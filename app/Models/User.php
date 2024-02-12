<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Cache;
use Illuminate\Notifications\Notifiable;
use Module\Permission\Models\Permission;
use Module\Permission\Models\PermissionUser;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    /**
     * Get the cart details for the user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */




    public function permissions()
    {
        return $this->belongsToMany(Permission::class)->where('status', 1);
    }



    
    public function cart()
    {
        return $this->hasOne(Cart::class);
    }


    public function delivery_address()
    {
        return $this->hasOne(DeliveryAddress::class, 'user_id')->where('status', 1);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }






    public static function hasAccess($slug)
    {
        $user_id = auth()->id();
        if ($user_id != 1) {
            $permission = Permission::where('slug', $slug)->first();
            if ($permission) {
                $permission_user = PermissionUser::where('permission_id', $permission->id)->where('user_id', $user_id)->first();
                if (!$permission_user) {
                    return false;
                }
                return true;
            } else {
                return false;
            }
        }
        return true;
    }


    public function isLoggedIn()
    {
        return Cache::has('logged-in-users-' . $this->id) ? '<span><i class="fa fa-circle green"></i></span>' : '';
    }
}
