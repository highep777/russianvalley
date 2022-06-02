<?php

namespace App\Models;

use App\Casts\FileUploadCast;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Article extends Pivot
{
    protected $fillable = [
        "title",
        "post_id",
        "description",
        "preview",
        "thumbnail",
    ];
    protected $casts = [
        "thumbnail" => FileUploadCast::class,
    ];
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
