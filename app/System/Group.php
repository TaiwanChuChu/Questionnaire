<?php

namespace App\System;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'Group';

    protected $primaryKey = 'GroupID';

    public function GroupMenu()
    {
        return $this->hasMany('App\System\GroupMenu');
    }

    public function GroupUser()
    {
        return $this->hasMany('App\System\GroupUser');
    }
}
