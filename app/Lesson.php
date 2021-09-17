<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class lesson extends Model
{
    protected $guarded = [];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public static function statsLastMonth() {
    	$upploadsLessonsInMonthGet = Lesson::where('created_at', '>=', Carbon::now()->subDays(30))->get();
    	$upploadedLessonsLastMonth = $upploadsLessonsInMonthGet->count();
    	//Last week data
    	$upploadsLessonsInWeekGet = $upploadsLessonsInMonthGet->where('created_at', '>=', Carbon::now()->subDays(7));
    	$upploadsLessonsInWeekSum = $upploadsLessonsInWeekGet->count();
    	//Getting inactive lessons
    	$inactiveLessons = Lesson::where('status', '=', 'suspended')->get();
    	$inactiveLessonsSum = $inactiveLessons->count();

    	return compact('upploadedLessonsLastMonth', 'upploadsLessonsInMonthGet', 'upploadsLessonsInWeekGet', 'upploadsLessonsInWeekSum', 'inactiveLessons', 'inactiveLessonsSum');
    }


    public static function lastThree() 
    {
    	return Lesson::orderBy('id', 'desc')->take(3)->get();
    }

        public static function firstlesson() 
    {
        return Lesson::min('id');
    }
    
}
