<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

protected $fillable = [
    'message', 'user_id', 'topic_id', 'date'
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