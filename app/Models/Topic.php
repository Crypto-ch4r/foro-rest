<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model {

protected $fillable = [
    'title', 'user_id',
];

/**
 * The attributes excluded from the model's JSON form.
 *
 * @var string[]
 */
protected $hidden = [
    'created_at', 'update_at',
];
}