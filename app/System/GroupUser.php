<?php

namespace App\System;

use Illuminate\Database\Eloquent\Model;

class GroupUser extends Model
{
    protected $table = 'GroupUser';

    protected $primaryKey = 'GroupUserID';

    public function Group()
    {
        return $this->belongsTo('App\System\Group', 'GroupID', 'GroupID');
    }

    public function SysUser()
    {
        return $this->belongsTo('App\System\SysUser', 'UserID', 'UserID');
    }
}
