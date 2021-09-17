<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\UpdateAdminRequest;
use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Lesson;
use Illuminate\Support\Facades\Auth;
use Illuminate\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Spatie\Analytics\Period;
use Analytics;
use JavaScript;
use Carbon\Carbon;
use App\Operation;



class AdminController extends Controller
{
    /*  public function __construct()
    {
        $this->middleware('auth');

    }*/
    public function admin()
    {

        $operations = Operation::lastTen();
        return view('admin', compact('operations'));
    }

    public function show() {
        $metricsForUsers = 'ga:users';
        $metricsForPageViews = 'ga:pageviews';
        $metricsForUsersAndPageViews = 'ga:users,ga:pageviews';
        $metricsForSessionsDuration = 'ga:avgSessionDuration';
        $dimensionsByDate = 'ga:date';
        // Sorting descending
        $sortForUsers = '-ga:users';
        $othersForDate = array('dimensions' => $dimensionsByDate);

        //ALL DATA OF LAST SEVEN DAYS
        //Getting last seven days
        $seventhDay  = Carbon::now()->subDay(6)->locale('lt');
        $firtstDay = Carbon::now()->subDay(0)->locale('lt');
        $lastSevenDays = Period::create($seventhDay, $firtstDay);

        $analyticsDataSevenDays = Analytics::performQuery($lastSevenDays, $metricsForUsersAndPageViews, $othersForDate )->rows;
        foreach ($analyticsDataSevenDays as $analyticsDataSevenDaysvalue) {
                $sevenDaysVisitors[] = $analyticsDataSevenDaysvalue['1'];
                $sevenDaysPageViews[] = $analyticsDataSevenDaysvalue['2'];
        }

        //Date of week before last
        $startDateLastWeek = Carbon::now()->subDay(13)->locale('lt');
        $endDateLastWeek = Carbon::now()->subDay(7)->locale('lt');
        $lastWeek = Period::create($startDateLastWeek, $endDateLastWeek);
        $othersVisitsByDays = array('dimensions' => $dimensionsByDate);
        $analyticsDataLastWeek = Analytics::performQuery($lastWeek, $metricsForUsersAndPageViews, $othersForDate)->rows;
        foreach ($analyticsDataLastWeek as $analyticsDataLastWeekValue) {
                $usersLastWeekDates[] = Carbon::parse($analyticsDataLastWeekValue['0'])->locale('lt')->getTranslatedShortDayName();
                $lastWeekVisitors[] = $analyticsDataLastWeekValue['1'];
                $lastWeekPageViews[] = $analyticsDataLastWeekValue['2'];
            }

        $dimensionsForLocation = 'ga:country';
        $othersForLocation = array('dimensions' => $dimensionsForLocation, 'sort' => $sortForUsers);
        $locations = Analytics::performQuery($lastSevenDays, $metricsForUsers, $othersForLocation)->rows;
        if($locations !== null) {
            foreach ($locations as $location) {
                $countrys[] = [$location['0']];
                $visitorsByCountrys[] = [$location['1']];
            }
        }
        else {
            $countrys = 0;
            $visitorsByCountrys = 0;
        }

        $lessonsStatsLastMonth = Lesson::statsLastMonth();
        $postsStatsLastMonth = Post::statsLastMonth();
        //Getting data uploaded in last 7 days
        $upploadsLessonsInWeekGet = $lessonsStatsLastMonth['upploadsLessonsInWeekGet'];
        $upploadsPostsInWeekGet = $postsStatsLastMonth['upploadsPostsInWeekGet'];
        //Getting number of data uploads in last 7 days
        $upploadsInWeek = $lessonsStatsLastMonth['upploadsLessonsInWeekSum'] + $postsStatsLastMonth['upploadsPostsInWeekSum'];

        //Getting number of data innactive now
        $inactiveNow = $lessonsStatsLastMonth['inactiveLessonsSum'] + $postsStatsLastMonth['inactivePostsSum'];
        //Getting data innactive now
        $inactiveLessons =  $lessonsStatsLastMonth['inactiveLessons'];
        $inactivePosts = $postsStatsLastMonth['inactivePosts'];

        $lastThreePosts = Post::lastThree();
        $lastThreeLessons = Lesson::lastThree();
        $operations = Operation::lastTen()->take(5);

         JavaScript::put([
          'sevenDaysVisitors' => $sevenDaysVisitors,
          'sevenDaysPageViews' => $sevenDaysPageViews,
          'usersLastWeekDates' => $usersLastWeekDates,
          'lastWeekVisitors' => $lastWeekVisitors,
          'lastWeekPageViews' => $lastWeekPageViews,
          'countrys' => $countrys,
          'visitorsByCountrys' => $visitorsByCountrys,

        ]);

        return view('admin.admin', compact('upploadsLessonsInWeekGet', 'upploadsPostsInWeekGet', 'upploadsInWeek', 'inactiveNow', 'inactiveLessons', 'inactivePosts', 'lastThreePosts', 'lastThreeLessons', 'operations'));
    }


    public function adminconmanager(Auth $user, Post $post) {

        $con_by_author = Post::with('user')->get();
        $con_last_ten = Lesson::orderBy('id', 'desc')->take(10)->get();

        return view('admin.content_manager', compact('con_by_author', 'con_last_ten'));
    }

    public function profile() {

        $user = User::findorfail(Auth::user()->id);
        $posts = Post::with('user')->get();
        $lessons = Lesson::with('user')->get();

        return view('admin/profile', compact('posts', 'lessons'))->withUser($user);

    }

    public function update(UpdateAdminRequest $request) {

        $validate = $request->validate();

        if($validate) {

        $user = Auth::user();
        $user->name = Request('name');
        $user->b_date = Request('b_date');
        $user->phone_number = Request('phone_number');
        $user->personal_phone_number = Request('personal_phone_number');
        $user->address = Request('address');

        $user->save();

        return redirect()->route('admin.profile')->with('success', 'Jūsų profilio informacija atnaujinta sėkmingai');
        }
        else {
            return redirect()->route('admin.profile')->with('error', 'Klaida! Pateikėti neteisingus duomenis, patikrinkite duomenis ir pabandykite operaciją atlikti iš naujo');
        }

    }

        public function updateimage(Request $request) {

        $user = Auth::user();

        $user->image = Request('image');

        if($request->hasFile('image')) {
            //get filename with extension
            $filenamewithextension = $request->file('image')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $request->file('image')->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;

            //Upload File
            //$request->file('image')->storeAs(['disk' => 'my_files'], $filenametostore);
            //$request->file('image')->storeAs('toPath', $filenametostore);
            Storage::disk('public_images')->putFileAs('toPath', $user->image, $filenametostore);

            $user->image = $filenametostore;
            $user->save();
        }
        return redirect()->route('admin.profile')->with('success', 'Jūsų profilio nuotrauka atnaujinta sėkmingai');
    }

    public function changePassword(ChangePasswordRequest $request) {

        $validate = $request->validate();

         $user = Auth::user();

         if($user){
            if(Hash::check($request['oldPassword'], $user->password)){
                $user->password = Hash::make($request['newPassword']);
                $user->password_updated_at = Carbon::now()->toDateTimeString();

                $user->save();
               return redirect()->route('admin.profile')->with('success', 'Slaptažodis pakeistas sėkmingai');
            }
            else {
                return redirect()->route('admin.profile')->with('error', 'Jūsų pateiktas slaptažodis nesutampa su jūsų dabartiniu slaptažodžiu!');
            }
         }
    }

    public function settings() {

        $user = Auth::user();

        return view('admin.settings.settings', compact('user'));
    }

    public function statistics() {
        //Getting data for contentByMonthChart
        for ($month=1; $month < 13; $month++) {
            $lessonsByMonth[] = [Lesson::whereMonth('created_at', '=', date($month))->count()];
            $postsByMonth[] = [Post::whereMonth('created_at', '=', date($month))->count()];
        }
        //Getting number of data uploads in last 30 days
        $lessonsStatsLastMonth = Lesson::statsLastMonth();
        $postsStatsLastMonth = Post::statsLastMonth();
        //Getting number of data uploads in last 30 days
        $upploadsInMonth = $lessonsStatsLastMonth['upploadedLessonsLastMonth'] + $postsStatsLastMonth['upploadedPostsLastMonth'];
        //Getting data uploaded in last 30 days
        $upploadsLessonsInMonthGet = $lessonsStatsLastMonth['upploadsLessonsInMonthGet'];
        $upploadsPostsInMonthGet = $postsStatsLastMonth['upploadsPostsInMonthGet'];
        //Getting data uploaded in last 7 days
        $upploadsLessonsInWeekGet = $lessonsStatsLastMonth['upploadsLessonsInWeekGet'];
        $upploadsPostsInWeekGet = $postsStatsLastMonth['upploadsPostsInWeekGet'];
        //Getting number of data uploads in last 7 days
        $upploadsInWeek = $lessonsStatsLastMonth['upploadsLessonsInWeekSum'] + $postsStatsLastMonth['upploadsPostsInWeekSum'];
        //Getting number of data innactive now
        $inactiveNow = $lessonsStatsLastMonth['inactiveLessonsSum'] + $postsStatsLastMonth['inactivePostsSum'];
        //Getting data innactive now
        $inactiveLessons =  $lessonsStatsLastMonth['inactiveLessons'];
        $inactivePosts = $postsStatsLastMonth['inactivePosts'];
        //Counting Posts and Lessons uploaded in last 30 days
        $lessonsUpploadedInMonth = Lesson::where('created_at', '>=', Carbon::now()->subDays(30))->count();
        $postsUpploadedInMonth = Post::where('created_at', '>=', Carbon::now()->subDays(30))->count();

        //Google analytics API
        //Metrics and dimensions for google analytics API
        $metricsForUsers = 'ga:users';
        $metricsForPageViews = 'ga:pageviews';
        $metricsForUsersAndPageViews = 'ga:users,ga:pageviews';
        $metricsForSessionsDuration = 'ga:avgSessionDuration';
        $dimensionsByDate = 'ga:date';
        // Sorting descending
        $sortForUsers = '-ga:users';
        $othersForDate = array('dimensions' => $dimensionsByDate);

        //ALL DATA OF LAST SEVEN DAYS
        //Getting last seven days
        $seventhDay  = Carbon::now()->subDay(6)->locale('lt');
        $firtstDay = Carbon::now()->subDay(0)->locale('lt');
        $lastSevenDays = Period::create($seventhDay, $firtstDay);
        //Getting page visitors and pageviews in last 7 days
        $analyticsDataSevenDays = Analytics::performQuery($lastSevenDays, $metricsForUsersAndPageViews, $othersForDate )->rows;
        foreach ($analyticsDataSevenDays as $analyticsDataSevenDaysvalue) {
                $sevenDaysVisitors[] = $analyticsDataSevenDaysvalue['1'];
                $sevenDaysPageViews[] = $analyticsDataSevenDaysvalue['2'];
        }
        //Getting sum of page views and visitors in last 7 days
        $usersByDaySumSevenDays = array_sum($sevenDaysVisitors);
        $pageViewsSevenDaysSum = array_sum($sevenDaysPageViews);

        //Getting page visitors by browsers in last 7 days
        $maxResultsForBrowser = 8;
        $analyticsDataSevenDaysBrowser = Analytics::fetchTopBrowsers($lastSevenDays, $maxResultsForBrowser);
        foreach ($analyticsDataSevenDaysBrowser as $browserAndSessions) {
            $sevenDaysBrowser[] = [$browserAndSessions['browser']];
            $sevenDaysBrowserSessions[] = [$browserAndSessions['sessions']];

        }
        //Most visited pages and page views
        $pageViews = Analytics::fetchMostVisitedPages($lastSevenDays)->where('pageTitle', '=', 'Arduinopagalba.lt');
        //Page views by referres
        $visitorsByReferres = Analytics::fetchTopReferrers($lastSevenDays);

        //getting user by device
        $dimensionsForDevice = 'ga:deviceCategory';
        $othersForDevice = array('dimensions' => $dimensionsForDevice);
        $device = Analytics::performQuery($lastSevenDays, $metricsForUsers, $othersForDevice)->rows;
        foreach ($device as $userWithDevice) {
             $devices[] = [$userWithDevice['0']];
             $deviceWithUsers[] = [$userWithDevice['1']];
        }

        //Getting users by location
        //By country
        $dimensionsForLocation = 'ga:country';
        $othersForLocation = array('dimensions' => $dimensionsForLocation, 'sort' => $sortForUsers);
        $locations = Analytics::performQuery($lastSevenDays, $metricsForUsers, $othersForLocation)->rows;
        foreach ($locations as $location) {
            $countrys[] = [$location['0']];
            $visitorsByCountrys[] = [$location['1']];
        }
        //By citys
        $replacementCity = 'Nenustatyta';
        $dimensionsForCitys = 'ga:city';
        $othersForCitys = array('dimensions' => $dimensionsForCitys, 'sort' => $sortForUsers);
        $allcitys = Analytics::performQuery($lastSevenDays, $metricsForUsers, $othersForCitys)->rows;
        foreach($allcitys as $allcity) {
            $allclearedCitys[] = array_replace($allcity,
            array_fill_keys(
            array_keys($allcity, '(not set)'),
            $replacementCity
            )
            );
        }
        foreach ($allclearedCitys as $allclearedCity) {
            $citys[] = $allclearedCity['0'];
            $visitorsFromCitys[] = $allclearedCity['1'];
        }

        //getting to users activity by hours in last 7 days
        $dimensionsForUsersActivity = 'ga:hour';
        $othersForUsersActivity = array('dimensions' => $dimensionsForUsersActivity);
        $usersActivity = Analytics::performQuery($lastSevenDays, $metricsForUsers, $othersForUsersActivity)->rows;
        foreach ($usersActivity as $activeUser) {
            $hours[] = $activeUser['0'];
            $activeUsers[] = $activeUser['1'];
        }
        //getting users types in last 7 days
        $dimensionsForUsersTypes = 'ga:userType';
        $othersForUsersTypes = array('dimensions' => $dimensionsForUsersTypes);
        $usersTypes = Analytics::performQuery($lastSevenDays, $metricsForUsers, $othersForUsersTypes)->rows;
        foreach ($usersTypes as $usersType) {
           $userTypesArr[] = [$usersType['0']  => $usersType['1']];
           $userTypeKey[] = $usersType['0'];
           $userTypeValue[] = $usersType['1'];

        }
        //Getting sum of visits for last 7 days
        $othersVisitsByDays = array('dimensions' => $dimensionsByDate);
        $usersByDays = Analytics::performQuery($lastSevenDays, $metricsForUsers, $othersVisitsByDays)->rows;
        foreach ($usersByDays as $usersByDay) {
           $usersByDayValues[] =  $usersByDay['1'];
        }

        //Getting all sessions duration for last 7 days
        $sessionsDurationSevenDays = Analytics::performQuery($lastSevenDays, $metricsForSessionsDuration)->rows['0'];
        //Getting  sessions duration average  for one user
        $sessionsDurationAverage = round($sessionsDurationSevenDays['0'] / 60, 1);

        //Date of week before last
        $startDateLastWeek = Carbon::now()->subDay(13)->locale('lt');
        $endDateLastWeek = Carbon::now()->subDay(7)->locale('lt');
        $lastWeek = Period::create($startDateLastWeek, $endDateLastWeek);
        $othersVisitsByDays = array('dimensions' => $dimensionsByDate);
        $analyticsDataLastWeek = Analytics::performQuery($lastWeek, $metricsForUsersAndPageViews, $othersForDate)->rows;
        foreach ($analyticsDataLastWeek as $analyticsDataLastWeekValue) {
                $usersLastWeekDates[] = Carbon::parse($analyticsDataLastWeekValue['0'])->locale('lt')->getTranslatedShortDayName();
                $lastWeekVisitors[] = $analyticsDataLastWeekValue['1'];
                $lastWeekPageViews[] = $analyticsDataLastWeekValue['2'];
            }
        //Getting totals sums of page views and visitors in last week
        $lastWeekVisitorsSum = array_sum($lastWeekVisitors);
        $pagesViewsLastWeekSum = array_sum($lastWeekPageViews);

        //Getting all sessions duration
        $sessionsDurationLastWeek = Analytics::performQuery($lastWeek, $metricsForSessionsDuration)->rows['0'];
        //Getting  sessions duration avarege
        $sessionsDurationLastWeekAvg = round($sessionsDurationLastWeek['0'] / 60, 1);
        //Page views by referres
        $visitorsByReferresLastWeek = Analytics::fetchTopReferrers($lastWeek);


        JavaScript::put([
        //Lessons
            'Arduino' => Lesson::where('type', 'Arduino')->count(),
            'Elektronika' => Lesson::where('type', 'Elektronika')->count(),
            'Automatika' => Lesson::where('type', 'Automatika')->count(),
            'Robotika' => Lesson::where('type', 'Robotika')->count(),
            //Posts
            'ArduinoP' => Post::where('type', 'Arduino')->count(),
            'ElektronikaP' => Post::where('type', 'Elektronika')->count(),
            'AutomatikaP' => Post::where('type', 'Automatika')->count(),
            'RobotikaP' => Post::where('type', 'Robotika')->count(),
            //Data for contentByMonthChart
            'LessonsByMonth' => $lessonsByMonth,
            'PostsByMonth' => $postsByMonth,
            //Posts and Lessons uploaded in last 30 days
            'lessonsUpploadedInMonth' => $lessonsUpploadedInMonth,
            'postsUpploadedInMonth' => $postsUpploadedInMonth,
            //Page visitors and pageviews in last 7 days
            'analyticsDataSevenDays' => $analyticsDataSevenDays,
            'sevenDaysVisitors' => $sevenDaysVisitors,
            'sevenDaysPageViews' => $sevenDaysPageViews,
            //Page visitors by browsers in last 7 days
            'sevenDaysBrowser' => $sevenDaysBrowser,
            'sevenDaysBrowserSessions' => $sevenDaysBrowserSessions,
            //Page visitors by devices in last 7 days
            'devices' => $devices,
            'deviceWithUsers' => $deviceWithUsers,
            //Page visitors by countrys in last 7 days
            'countrys' => $countrys,
            'visitorsByCountrys' => $visitorsByCountrys,
            //Page visitors by citys in last 7 days
            'citys' => $citys,
            'visitorsFromCitys' => $visitorsFromCitys,
            //Users activity by hours in last 7 days
            'hours' => $hours,
            'activeUsers' => $activeUsers,
            //Users types ratio in last 7 days
            'userTypeKey' => $userTypeKey,
            //Users types values in last 7 days
            'userTypeValue' => $userTypeValue,
            'usersByDayValues' => $usersByDayValues,
            'usersLastWeekDates' => $usersLastWeekDates,
            'lastWeekVisitors' => $lastWeekVisitors,
            'lastWeekPageViews' => $lastWeekPageViews,

        ]);

       return view('admin.statistics.statistics', compact('upploadsInMonth', 'upploadsInWeek', 'inactiveNow', 'upploadsLessonsInMonthGet', 'upploadsPostsInMonthGet', 'upploadsLessonsInWeekGet', 'upploadsPostsInWeekGet', 'inactiveLessons', 'inactivePosts', 'pageViews', 'visitorsByReferres', 'device', 'locations', 'allclearedCitys', 'userTypesArr', 'usersByDaySumSevenDays', 'pageViewsSevenDaysSum', 'sessionsDurationAverage', 'lastWeekVisitorsSum', 'pagesViewsLastWeekSum', 'sessionsDurationLastWeekAvg', 'visitorsByReferresLastWeek'));

    }

    public function statisticsLastMonth() {

        //Google analytics API
        //Metrics and dimensions for google analytics API
        $metricsForUsers = 'ga:users';
        $metricsForPageViews = 'ga:pageviews';
        $metricsForUsersAndPageViews = 'ga:users,ga:pageviews';
        $metricsForSessionsDuration = 'ga:avgSessionDuration';
        $dimensionsByDate = 'ga:date';
        $dimensionsForDevice = 'ga:deviceCategory';
        $dimensionsForLocation = 'ga:country';
        $dimensionsForCitys = 'ga:city';
        $dimensionsForUsersActivity = 'ga:hour';
        // Sorting descending
        $sortForUsers = '-ga:users';
        $othersForDate = array('dimensions' => $dimensionsByDate);

        //Getting last month
        $firstDayOfMonth  = Carbon::now()->subDay(30)->locale('lt');
        $lastDayOfMonth = Carbon::now()->subDay(0)->locale('lt');
        $lastMonth = Period::create($firstDayOfMonth, $lastDayOfMonth);

         //Getting page views and visitors of last month
        $analyticsDataLastMonth = Analytics::performQuery($lastMonth, $metricsForUsersAndPageViews, $othersForDate)->rows;
        foreach ($analyticsDataLastMonth as $analyticsDataLastMonthValue) {
                $allLastMonthDays[] = ucwords(Carbon::parse($analyticsDataLastMonthValue['0'])->isoFormat('MMMM D'));
                $lastMonthVisitors[] = $analyticsDataLastMonthValue['1'];
                $lastMonthPageViews[] = $analyticsDataLastMonthValue['2'];
        }

        //Getting page views by referrers
        $visitorsByReferresLastMonth = Analytics::fetchTopReferrers($lastMonth)
        ;
        //Most visited pages and page views
        $pageViewsLastMonth = Analytics::fetchMostVisitedPages($lastMonth)->where('pageTitle', '=', 'Arduinopagalba.lt');

        //Getting visitors by devices
        $othersForDevice = array('dimensions' => $dimensionsForDevice);
        $devicesLastMonth = Analytics::performQuery($lastMonth, $metricsForUsers, $othersForDevice)->rows;
        foreach ($devicesLastMonth as $deviceLastMonth) {
            $deviceLastMonthArr[] = $deviceLastMonth['0'];
            $deviceLastMonthValues[] = $deviceLastMonth['1'];
        }

        //Getting visitos by country
        $othersForLocation = array('dimensions' => $dimensionsForLocation, 'sort' => $sortForUsers);
        $lastMonthLocations = Analytics::performQuery($lastMonth, $metricsForUsers, $othersForLocation)->rows;
        foreach ($lastMonthLocations as $lastMonthLocation) {
            $lastMonthCountrys[] = [$lastMonthLocation['0']];
            $lastMonthVisitorsByCountrys[] = [$lastMonthLocation['1']];
        }
        //Getting visitors by citys
        $replacementCity = 'Nenustatyta';
        $othersForCitys = array('dimensions' => $dimensionsForCitys, 'sort' => $sortForUsers);
        $allcitysLastMonth = Analytics::performQuery($lastMonth, $metricsForUsers, $othersForCitys)->rows;
        foreach($allcitysLastMonth as $allcityLastMonth) {
            $allclearedLastMonthCitys[] = array_replace($allcityLastMonth,
            array_fill_keys(
            array_keys($allcityLastMonth, '(not set)'),
            $replacementCity
            )
            );
        }

            foreach ($allclearedLastMonthCitys as $allclearedLastMonthCity) {
            $lastMonthCitys[] = $allclearedLastMonthCity['0'];
            $lastMonthVisitorsFromCitys[] = $allclearedLastMonthCity['1'];
        }

        //Getting most populars visitors browsers in last moth
        $maxResultsForBrowser = 8;
        $analyticsLastMonthBrowsers = Analytics::fetchTopBrowsers($lastMonth, $maxResultsForBrowser);
        foreach ($analyticsLastMonthBrowsers as $analyticsLastMonthBrowser) {
            $lastMonthbrowsers[] = $analyticsLastMonthBrowser['browser'];
            $lastMonthSessionsByBrowser[] = $analyticsLastMonthBrowser['sessions'];
        }

        //Getting all sessions duration
        $sessionsDurationLastMonth = Analytics::performQuery($lastMonth, $metricsForSessionsDuration)->rows['0'];
        //Getting  sessions duration avarege
        $sessionsDurationLastMonthAvg = round($sessionsDurationLastMonth['0'] / 60, 1);
        //Page views by referres
        $visitorsByReferresLastMonth = Analytics::fetchTopReferrers($lastMonth);

        //Getting totals sums of page views and visitors in last week
        $lastMonthVisitorsSum = array_sum($lastMonthVisitors);
        $pagesViewsLastMonthSum = array_sum($lastMonthPageViews);


        $othersForUsersActivity = array('dimensions' => $dimensionsForUsersActivity);
        $usersLastMonthActivity = Analytics::performQuery($lastMonth, $metricsForUsers, $othersForUsersActivity)->rows;
        foreach ($usersLastMonthActivity as $userLastMonthActivity) {
            $lastMonthHours[] = $userLastMonthActivity['0'];
            $lastMonthActiveUsers[] = $userLastMonthActivity['1'];
        }

        JavaScript::put([
            //All last month days
            'allLastMonthDays' => $allLastMonthDays,
            //Last month visitors and page views
            'lastMonthVisitors' => $lastMonthVisitors,
            'lastMonthPageViews' => $lastMonthPageViews,
            //Visitors by devices
            'deviceLastMonthArr' => $deviceLastMonthArr,
            'deviceLastMonthValues' => $deviceLastMonthValues,
            //Visitors by countrys
            'lastMonthCountrys' => $lastMonthCountrys,
            'lastMonthVisitorsByCountrys' => $lastMonthVisitorsByCountrys,
            //Visitors by citys
            'lastMonthCitys' => $lastMonthCitys,
            'lastMonthVisitorsFromCitys' => $lastMonthVisitorsFromCitys,
            //Visitors by browsers
            'lastMonthbrowsers' => $lastMonthbrowsers,
            'lastMonthSessionsByBrowser' => $lastMonthSessionsByBrowser,
            //Visitors activity by hours in last month
            'lastMonthHours' => $lastMonthHours,
            'lastMonthActiveUsers' => $lastMonthActiveUsers,
            ]);

        return view('admin.statistics.statisticsLastMonth', compact('visitorsByReferresLastMonth', 'pageViewsLastMonth', 'devicesLastMonth', 'lastMonthLocations', 'allclearedLastMonthCitys', 'allclearedLastMonthCitys', 'analyticsLastMonthBrowsers', 'lastMonthVisitorsSum', 'pagesViewsLastMonthSum', 'sessionsDurationLastMonthAvg', 'visitorsByReferresLastMonth'));
    }

    public function lastyear() {

        $firstDayOfYear  = Carbon::now()->subDay(365)->locale('lt');
        $lastDayOfYear = Carbon::now()->subDay(0)->locale('lt');
        $lastYear = Period::create($firstDayOfYear, $lastDayOfYear);

        //Google analytics API
        //Metrics and dimensions for google analytics API
        $metricsForUsers = 'ga:users';
        $metricsForPageViews = 'ga:pageviews';
        $metricsForUsersAndPageViews = 'ga:users,ga:pageviews';
        $metricsForPageViewsAndSessions = 'ga:pageviews,ga:sessions';
        $metricsForSessionsDuration = 'ga:avgSessionDuration';
        $dimensionsByDate = 'ga:date';
        $dimensionsByMonth = 'ga:month';
        $dimensionsForDevice = 'ga:deviceCategory';
        $dimensionsForLocation = 'ga:country';
        $dimensionsForCitys = 'ga:city';
        // Sorting descending
        $sortForUsers = '-ga:users';
        $othersForMonths = array('dimensions' => $dimensionsByMonth);
        //Getting sessions and page views in the last year by months
        $analyticsDataLastYear = Analytics::performQuery($lastYear, $metricsForPageViewsAndSessions, $othersForMonths)->rows;
        foreach ($analyticsDataLastYear as $analyticsDataLastYearValues) {
            $lastYearMonths[] = $analyticsDataLastYearValues['0'];
            $pageViewsLastYear[] = $analyticsDataLastYearValues['1'];
            $sessionsLastYear[] = $analyticsDataLastYearValues['2'];
        }
        //Getting top referrers in the last year
        $visitorsByReferresLastYear = Analytics::fetchTopReferrers($lastYear);
        //Getting sum of page views
        $viewsOfPagesLastYear = Analytics::fetchMostVisitedPages($lastYear)->where('pageTitle', '=', 'Arduinopagalba.lt');
        //Getting visitos device
        $othersForDevice = array('dimensions' => $dimensionsForDevice);
        $devicesLastYear = Analytics::performQuery($lastYear, $metricsForUsers, $othersForDevice)->rows;
        foreach ($devicesLastYear as $deviceLastYear) {
            $deviceLastYearArr[] = $deviceLastYear['0'];
            $deviceLastYearValues[] = $deviceLastYear['1'];
        }

        //Getting visitos by country
        $othersForLocation = array('dimensions' => $dimensionsForLocation, 'sort' => $sortForUsers);
        $lastYearLocations = Analytics::performQuery($lastYear, $metricsForUsers, $othersForLocation)->rows;
        foreach ($lastYearLocations as $lastYearLocation) {
            $lastYearCountrys[] = [$lastYearLocation['0']];
            $lastYearVisitorsByCountrys[] = [$lastYearLocation['1']];
        }

        //Getting visitors by citys
        $replacementCity = 'Nenustatyta';
        $othersForCitys = array('dimensions' => $dimensionsForCitys, 'sort' => $sortForUsers);
        $allcitysLastYear = Analytics::performQuery($lastYear, $metricsForUsers, $othersForCitys)->rows;
        foreach($allcitysLastYear as $allcityLastYear) {
            $allclearedLastYearCitys[] = array_replace($allcityLastYear,
            array_fill_keys(
            array_keys($allcityLastYear, '(not set)'),
            $replacementCity
            )
            );
        }
            foreach ($allclearedLastYearCitys as $allclearedLastYearCity) {
            $lastYearCitys[] = $allclearedLastYearCity['0'];
            $lastYearVisitorsFromCitys[] = $allclearedLastYearCity['1'];
        }
        //Getting users visits by browsers
        $maxResultsForBrowser = 8;
        $analyticsLastYearBrowsers = Analytics::fetchTopBrowsers($lastYear, $maxResultsForBrowser);
        foreach ($analyticsLastYearBrowsers as $analyticsLastYearBrowser) {
            $lastYearbrowsers[] = $analyticsLastYearBrowser['browser'];
            $lastYearSessionsByBrowser[] = $analyticsLastYearBrowser['sessions'];
        }

        //Getting all sessions duration
        $sessionsDurationLastYear = Analytics::performQuery($lastYear, $metricsForSessionsDuration)->rows['0'];
        //Getting  sessions duration avarege
        $sessionsDurationLastYearAvg = round($sessionsDurationLastYear['0'] / 60, 1);
        //Page views by referres
        $visitorsByReferresLastYear = Analytics::fetchTopReferrers($lastYear);

        //Getting totals sums of page views and visitors in last week
        $lastYearPageViewsSum = array_sum($pageViewsLastYear);
        $sessionsLastYearSum = array_sum($sessionsLastYear);

         JavaScript::put([
        //Sessions and page views in the last year by months
          'lastYearMonths' => $lastYearMonths,
          'pageViewsLastYear' => $pageViewsLastYear,
          'sessionsLastYear' => $sessionsLastYear,
          'deviceLastYearArr' => $deviceLastYearArr,
          'deviceLastYearValues' => $deviceLastYearValues,
          'lastYearCountrys' => $lastYearCountrys,
          'lastYearVisitorsByCountrys' => $lastYearVisitorsByCountrys,
          'lastYearCitys' => $lastYearCitys,
          'lastYearVisitorsFromCitys' => $lastYearVisitorsFromCitys,
          'lastYearbrowsers' => $lastYearbrowsers,
          'lastYearSessionsByBrowser' => $lastYearSessionsByBrowser,
        ]);



        return view('admin.statistics.lastYear', compact('visitorsByReferresLastYear', 'viewsOfPagesLastYear', 'devicesLastYear', 'lastYearLocations', 'allclearedLastYearCitys', 'analyticsLastYearBrowsers', 'sessionsDurationLastYearAvg', 'visitorsByReferresLastYear', 'lastYearPageViewsSum', 'sessionsLastYearSum'));
    }

    public function getAnalyticsData() {
        $metricsForUsers = 'ga:users';
        $dimensionsForCitys = 'ga:city';
        $othersForCitys = array('dimensions' => $dimensionsForCitys);
        $getData = Analytics::performQuery($lastweek, $metricsForusers, $othersForCitys)->rows;

    }
     public function enableTwoFactor() {

        $user = auth()->user();
        $user->enableTwoFactor();

        return redirect()->back()->withMessage('Dviejų veiksnių autentifikacija įjungta');
     }


}
