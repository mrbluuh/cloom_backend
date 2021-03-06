<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class GroupGrade extends Model
{
    use Notifiable;

    protected $fillable = [
        'name',
    ];
    
    protected $table = 'group_grades';
    public $primaryKey = 'id';
    public $timestamps = true;

}
