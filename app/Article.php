<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles'; //默认表名,注意 一定要protected;
    protected $primaryKey = 'id';   //默认主键
    protected $fillable = ['title','content'];
}
