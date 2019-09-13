<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Principal extends Model
{
    private static function padrao()
    {
        $data['menuTopoAtivo'] = 'Principal';
        return $data;
    }
    public static function indexValues()
    {
        $data = self::padrao();
        $data['scriptName'] = 'layouts.block.script';
        $data['viewName'] = 'site.home';
        $data['tituloPagina'] = 'Principal';

        return $data;
    }
}
