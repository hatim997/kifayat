<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UrduClassChapter extends Model
{
    use HasFactory;

    protected $fillable = [
        'urdu_class_id',
        'name',
        'slug',
        'description',
        'worksheet',
    ];

    public function urduClass()
    {
        return $this->belongsTo(UraanUrduClass::class, 'urdu_class_id');
    }

    public function chapterContents()
    {
        return $this->hasMany(UrduChapterContent::class, 'urdu_chapter_id');
    }
}
