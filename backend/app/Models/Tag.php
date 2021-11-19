<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $guarded = ['tag_target_id'];
    protected $fillable = ['tag_name', 'tag_genre_id'];
    #povotはレスポンスに必要ないので非表示
    protected $hidden = array('pivot');
    public $timestamps = false;

    # タグに紐づいたジャンルを取得
    public function genres()
    {
        return $this->belongsTo(TagGenre::class, 'id');
    }

    # タグに紐づいたターゲットを取得
    public function targets()
    {
        return $this->belongsTo(Tagtarget::class, 'id');
    }
}
