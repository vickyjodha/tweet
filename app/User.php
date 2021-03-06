<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable,Followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
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
   public function timeline(){
       $friends=$this->follows()->pluck('id');
      // $ids->push($this->id);
       return Tweet::whereIn('user_id',$friends)
                   ->orWhere('user_id',$this->id)
                   ->withLikes()
                    ->latest()->get();
   }
     public function getAvatarAttribute(){
         return "https://i.pravatar.cc/150?u=".$this->email;
     }
     public function setPasswordAttribute($value){
        //$this->alldata['password']=bcrypt($value);
        $this->attributes['password'] = bcrypt($value);
    }
     public function tweets(){
         return $this->hasMany(Tweet::class)->latest();
     }
   
}
