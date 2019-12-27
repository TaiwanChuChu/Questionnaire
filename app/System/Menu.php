<?php

namespace App\System;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{

    protected $table = 'Menu';

    protected $primaryKey = 'MenuID';

    protected $fillable = [
        'MenuNo', 'MenuName', 'UpperID', 'IsHide', 'Status', 'Sort', 'ApplyID', 'UpdateID', 'created_at', 'updated_at',
    ];

    public function GroupMenu()
    {
        return $this->hasMany('App\System\GroupMenu', 'MenuID', 'MenuID');
    }
}
