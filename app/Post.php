<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GrahamCampbell\Markdown\Facades\Markdown;
class Post extends Model
{
    public function author(){
        return $this->belongsTo(User::class);
    }
    public function getDateAttribute($value){
        return $this->created_at->diffForHumans();
    }
    public function getBodyHtmlAttribute($value){
        return Markdown::convertToHtml($this->body);
    }
    public function getExcerptHtmlAttribute($value){
        return Markdown::convertToHtml($this->excerpt);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
