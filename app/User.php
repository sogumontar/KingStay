<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table ='users';
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
        protected $hidden = [
        'password', 'remember_token',
    ];

    public function role(){
        return $this->belongsTo('App\Role','role_id');
    }
    public function hasRole($roles){
        $this->have_rle= $this->getUserRole();
        if(is_array($roles)){
            foreach($roles as $need_role){
                if($this->cekUserRole($need_role)){
                    return true;
                }
            }
        }else{
            return $this->cekUserRole($roles);
        }
        return false;
    }

    private function getUserRole($roles){
        return $this->role()->getResults();
    }
    private function cekUserRole($role){
        return (strtolower($role)==strtolower($this->have_role->nama))? true : false;
    }
}
