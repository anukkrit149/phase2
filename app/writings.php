<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class writings extends Model
{
    use \Conner\Tagging\Taggable;

    protected $fillable = ['article_name','article_content',];

    public function creator()
    {
        return $this->belongsTo(User::class, 'user_id');
    }



}
