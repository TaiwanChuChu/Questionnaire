<?php

namespace App\System;

use Illuminate\Database\Eloquent\Model;

class GroupMenu extends Model
{
    protected $table = 'GroupMenu';

    protected $primaryKey = 'GroupMenuID';

    public function Menu()
    {
        return $this->belongsTo('App\System\Menu');
    }

    public function Group()
    {
        return $this->belongsTo('App\System\Group');
    }
}
