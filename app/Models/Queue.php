<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Queue extends Model
{
    use HasFactory;
    protected $connection = 'BARQCMS_mysql';
    protected $table = 'queue';
    protected $fillable = [
        'id',
        'operation_date',
        'serv',
        'token',
        'service_name',
        'etisalat',
        'app',
        'delay',
        'status',
        'msg',
        'operation_time',
        'sign',
        'info'
    ];
}
