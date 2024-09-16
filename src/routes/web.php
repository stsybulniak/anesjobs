<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $jobs = ['jobs' => [(object)['name' => 'Anesthesiologist Jobs', 'cnt' => '500'], (object)['name' => 'CRNA Jobs', 'cnt' => '3100'], (object)['name' => 'CAA Jobs', 'cnt' => '234']]];
    return view('home', $jobs);
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/sign-up', function () {
    return view('sign-up');
});

Route::get('password-verify', function () {
    return view('password-verify');
});

Route::get('/advertise', function () {
    $data = [
        'features' => [
            (object)['name' => 'Job Posted', 'cnt' => '20,583', 'img' => '/images/briefcase.svg'],
            (object)['name' => 'Successful Hires', 'cnt' => '3,896', 'img' => '/images/like.svg'],
            (object)['name' => 'Verified Companies', 'cnt' => '581', 'img' => '/images/verify.svg'],
            (object)['name' => 'Monthly Visits', 'cnt' => '100K', 'img' => '/images/chart-2.svg'],
        ],
        'faqs' => [
            (object)['name' => 'How can I post a free job opening on Jobs?', 'text' => 'Nisi interdum nisl est elementum tortor. Tellus vitae donec faucibus et ac sed facilisis egestas viverra. Facilisis mauris varius pellentesque convallis non leo. Dictum urna enim suspendisse venenatis porttitor nibh tempor id varius. Sit quis pharetra ac in egestas lectus.'],
            (object)['name' => 'What\'s the cost to post a featured job opening on Jobs?', 'text' => 'Nisi interdum nisl est elementum tortor. Tellus vitae donec faucibus et ac sed facilisis egestas viverra. Facilisis mauris varius pellentesque convallis non leo. Dictum urna enim suspendisse venenatis porttitor nibh tempor id varius. Sit quis pharetra ac in egestas lectus.'],
            (object)['name' => 'Are there bulk discounts for featured job openings?', 'text' => 'Nisi interdum nisl est elementum tortor. Tellus vitae donec faucibus et ac sed facilisis egestas viverra. Facilisis mauris varius pellentesque convallis non leo. Dictum urna enim suspendisse venenatis porttitor nibh tempor id varius. Sit quis pharetra ac in egestas lectus.'],
            (object)['name' => 'How long does it take to get a free job opening approved?', 'text' => 'Nisi interdum nisl est elementum tortor. Tellus vitae donec faucibus et ac sed facilisis egestas viverra. Facilisis mauris varius pellentesque convallis non leo. Dictum urna enim suspendisse venenatis porttitor nibh tempor id varius. Sit quis pharetra ac in egestas lectus.'],
        ],
        'trusted' => [
            (object)['name' => 'Dr. Geidt', 'text' => "AnesJobs connected me with my dream position at a top hospital, and the entire process was seamless.\nHighly recommend!", 'img' => '/images/dr-rosser.svg'],
            (object)['name' => 'Dr. Rosser', 'text' => "AnesJobs connected me with my dream position at a top hospital, and the entire process was seamless.\nHighly recommend!", 'img' => '/images/dr-geidt.svg'],
        ]
    ];
    return view('advertise', $data);
});

Route::get('faqs', function () {
    $data = [
        'faqs' => [
            (object)['name' => 'Do I Need To pay To Make An Account?', 'text' => 'Making an account is free, all job listings can be viewed for free, saving favorites and receiving updates of new posts is free.'],
            (object)['name' => 'Can I Save My Favorite Job Listings?', 'text' => 'Yes'],
            (object)['name' => "Do you email updates of new posts?", 'text' => "Yes we will send new posts that fit the criteria you are looking for. \nPut in the parameters as narrow or as wide as you like for new posts."],
        ],
        'posters' => [
            (object)['name' => "How can I post a free job listing?", 'text' => "1. Click on the “Add Job” button at the top of the page.\n2. Log-in or make an account\n3. Begin posting"],
            (object)['name' => "Can I prioritize my job listing?", 'text' => "1. Log-in or make an account\n2. After you login, click on “Prioritize my posts” in the top left corner.\n3. Follow payment options and complete credit card information.\n4. Select the posts that you want to prioritize."],
        ]
    ];
    return view('faqs', $data);
});

Route::get('/search', function () {
    $jobs = ['jobs' => [(object)['name' => 'All Jobs', 'cnt' => '3100'], (object)['name' => 'Anesthesiologist Jobs', 'cnt' => '500'], (object)['name' => 'CRNA Jobs', 'cnt' => '3100'], (object)['name' => 'CAA Jobs', 'cnt' => '234']]];
    return view('search', $jobs);
});
