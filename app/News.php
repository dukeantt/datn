<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class News
 * @package App
 * @method static \Illuminate\Database\Eloquent\Builder where()
 */
class News extends Model
{
    //
    protected $table = 'news';

    public function comment(){
        return $this->hasMany('App\Comment','id_news');
    }
}
