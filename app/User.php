<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Profile;
use App\Company;
use App\Job;
use App\Role;
class User extends Authenticatable implements MustVerifyEmail  
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','user_type'
    ];

    /**4
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * there are some funcationalities for the user which 
     * help the user to feel the better understand the project
     */

    public function profile(){
        return $this->hasOne(Profile::class);
    }
    
    public function company(){
        return $this->hasOne(Company::class);
    }
    public function favorites(){
        return $this->belongsToMany(Job::class,'favourites','user_id','job_id')->withTimeStamps();
    }

    public function roles(){
        return $this->belongsToMany(Role::class);
    }

    


    
}