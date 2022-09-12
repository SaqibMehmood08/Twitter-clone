<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [ ];

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

    public static function boot()
    {
    parent::boot();
    static::created(function($user){
    $user->profile()->create([
    'username'=>'No Username yet',
    'location'=>'No location yet',
    'Bio'=> 'No Bio set',
    'website'=> 'No Link added',
    'profile'=> 'profile/GVDOm56qQIsXUMEGooef6LaeQXo6gNFgEYBXaMjY.jpg',
    'cover'=>'profile/cfbYfOR5nTj6GALrIZzCi3XGmYzMrGU5UUsz78j0.jpg',
    ]);
    }
    );
    }
 public function posts()
  {
  return $this->hasMany(Post::class)->orderBy('created_at','DESC');
  }
  public function following()
 {
   return $this->BelongsToMany(Profile::class);
 }
     public function profile()     {
       return $this->hasOne(Profile::class);
    }
}
