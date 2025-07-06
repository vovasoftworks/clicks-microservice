<?php

namespace App\Models;

use Bavix\LaravelClickHouse\Database\Eloquent\Model;

class Click extends Model
{
    protected $fillable = [
        'id',
        'click_id',
        'offer_id',
        'source',
        'ip',
        'user_agent',
        'timestamp',
    ];
}
