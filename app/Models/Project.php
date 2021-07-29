<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'category_id',
        'project_title', 
        'project_thumbnail',
        'project_description',
        'project_github_link',
        'project_video_link'
    ];

    public function category() {
        return $this->belongsTo('App\Models\Category');
    }
}
