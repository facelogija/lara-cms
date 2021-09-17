<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
	protected $guarded = [];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

        public static function statsLastMonth() {
       	$upploadsPostsInMonthGet = Post::where('created_at', '>=', Carbon::now()->subDays(30))->get();
    	$upploadedPostsLastMonth = $upploadsPostsInMonthGet->count();
 		//Last week data
 	 	$upploadsPostsInWeekGet = $upploadsPostsInMonthGet->where('created_at', '>=', Carbon::now()->subDays(7));
 	 	$upploadsPostsInWeekSum = $upploadsPostsInWeekGet->count();
 	 	//Getting inactive posts
 	 	$inactivePosts = Post::where('status', '=', 'suspended')->get();
 	 	$inactivePostsSum = $inactivePosts->count();
    	
    	return compact('upploadedPostsLastMonth', 'upploadsPostsInMonthGet', 'upploadsPostsInWeekGet', 'upploadsPostsInWeekSum', 'inactivePosts', 'inactivePostsSum');
    }

    public static function lastThree() 
    {
    	return Post::orderBy('id', 'desc')->take(3)->get();
    }

    public static function firstpost()
    {
        return Post::min('id');
    }
}
