<?php

namespace App\System;

use Illuminate\Database\Eloquent\Model;

class SysUser extends Model
{
    protected $table = 'SysUser';

    protected $primaryKey = 'UserID';

    public function GroupUser()
    {
        return $this->hasMany('App\System\GroupUser', 'UserID', 'UserID');
    }
}
