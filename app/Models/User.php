<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Traits\HandlesLabelsTrait;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use CrudTrait;
    use HasFactory, Notifiable;
    use HandlesLabelsTrait;

    const IS_ADMIN = 1;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'mobile',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function getLabels(): array
    {
        return [
            'id' => __('labels.id'),
            'user_id' => __('labels.user_id'),
            'firstname' => __('labels.firstname'),
            'lastname' => __('labels.lastname'),
            'mobile' => __('labels.mobile'),
            'email' => __('labels.email'),
            'password' => __('labels.password'),
            'created_at' => __('labels.created_at'),
            'updated_at' => __('labels.updated_at'),
        ];
    }

    /**
     * Check if a specific model can be deleted.
     *
     * @param  int  $id
     * @return bool
     */
    public static function canBeDeleted(int $id): bool
    {
        $model = self::find($id);

        return (empty($model))
                ? false
                : true;
    }
    
    /**
     * Increment the login attempts for a specific email.
     *
     * @param  string  $email
     * @return bool
     */
    public static function incrementLoginAttempts(string $email, int $isAdmin = 0): bool
    {
        if ($isAdmin === self::IS_ADMIN) {
            $user = self::where('email', $email)->where('is_admin', self::IS_ADMIN)->first();
        } else {
            $user = self::where('email', $email)->first();
        }
        
        if ($user) {
            $user->login_attempts = $user->login_attempts + 1;
            return $user->save();
        }
        return false;
    }

    /**
     * Clear user login attempts.
     *
     * @return void
     */
    public function clearLoginAttempts(): void
    {
        if ($this->login_attempts > 0) {
            $this->login_attempts = 0;
            $this->save();
        }
    }

    /**
     * Accesor to get the user's full name.
     *
     * @return string
     */
    public function getFullNameAttribute(): string
    {
        return "{$this->lastname} {$this->firstname}";
    }

    /**
     * Create a random password for the user.
     *
     * @return string
     */
    public static function createPassword(): string
    {
        return Hash::make(date('Y-m-d H:i:s') . Str::random(10));
    }

    /**
     * Notify user when his account has been created.
     *
     * @return void
     */
    public static function notifyUserUponCreation(): void
    {

    }

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    public function adUserVisits()
    {
        return $this->hasMany('App\Models\AdUserVisits', 'user_id', 'id');
    }

}
