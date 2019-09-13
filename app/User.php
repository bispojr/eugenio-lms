<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

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

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    private static function padrao()
    {
        $data['menuTopoAtivo'] = 'Usuário';
        $data['tituloPagina'] = 'Usuário';
        return $data;
    }
    public static function listarValues()
    {
        $data = self::padrao();
        $data['scriptName'] = 'layouts.block.script';
        $data['viewName'] = 'site.usuario.listar';
        $data['tituloPagina'] = ' - Listar';
        $data["users"] = self::all();

        return $data;
    }
}
