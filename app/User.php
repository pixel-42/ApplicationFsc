<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

// 
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
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


//    public function roles(){
//        return $this->belongsToMany('App\Models\Role', 'user_roles', 'user_id', 'role_id');
//    }
//    /**
//     * Проверка на принадлежность пользователя какой-дибо роли
//     *
//     *
//     */
//    public function isEmployee(){
//        $roles = $this->roles()->toArray();
//        return !empty($roles);
//    }
//    /**
//     * Проверка, имеет ли пользоватеь определенную роль
//     *
//    */
//    public function hasRole($check){
//        return in_array($check, array_pluck($this->roles()->toArray(), 'name'));
//    }
//    /**
//     * Получение идентификатора роли
//     *
//     */
//    public function getIdInArray($array, $term){
//        foreach ($array as $key => $value){
//            if ($value == $term){
//                return $key + 1;
//            }
//        }
//        return false;
//
//    }
//    /**
//     * Добавление роли пользователю
//     *
//     *
//     */
//    public function makeEmployee($title){
//        $assigned_roles = array();
//        $roles = array_pluck(Role::all()->toArray(), 'name');
//
//        switch ($title){
//            case 'admin':
//                $assigned_roles[] = $this->getIdInArray($roles, 'admin');
//            case 'inspecting':
//                $assigned_roles[] = $this->getIdInArray($roles, 'inspecting');
//            case 'client':
//                $assigned_roles[] = $this->getIdInArray($roles, 'client');
//                break;
//            default:
//                $assigned_roles[] = false;
//        }
//        $this->roles()->attach($assigned_roles);
//    }






    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];




    public function isAdmin(){
        return $this->role === 'admin';
    }
    public function isInspecting(){
        return $this->role === 'inspecting';
    }
    public function isClient(){
        return $this->role === 'client';
    }
}
