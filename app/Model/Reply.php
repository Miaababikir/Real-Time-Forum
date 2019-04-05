<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $guarded = [];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function like()
    {
        return $this->hasMany(Like::class);
    }

    public function likeIt()
    {
        $this->like()->create([
            'user_id' => '1'
        ]);
    }

    /**
     * @throws \Exception
     */
    public function unLikeIt()
    {
        $this->like()->where('user_id', '1')->first()->delete();
    }
}
