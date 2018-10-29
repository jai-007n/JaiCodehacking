<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use http\Url;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Post extends Model
{
    //
    use Sluggable;
    use SluggableScopeHelpers;
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
   protected $fillable=[
       'category_id',
       'User_id',
       'photo_id',
       'title',
       'body'

   ];

   public function user()
   {
       return $this->belongsTo('App\user');
   }
    public function photo()
    {
        return $this->belongsTo('App\Photo') ;

    }
    public function category()
    {
        return $this->belongsTo('App\Category') ;

    }

     public function comments()
     {
         return $this->hasMany('App\Comment');
     }

      public function photoPlaceholder()
          {
//              return "http://placehol.it/700x200";
              return "/images/question.jpg";

//              $filepath= '';
//              return $filepath;

          }
}
