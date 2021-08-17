<?php
use Illuminate\Support\Facades\Route;

// Route::get('greeting', function () {
//     return 'Hi, this is your awesome package! rwra';
// });

// Route::get('Laws/test', 'EdgeWizz\Laws\Controllers\LawsController@test')->name('test');

Route::post('fmt/Laws/store', 'EdgeWizz\Laws\Controllers\LawsController@store')->name('fmt.laws.store');

Route::post('fmt/laws/update/{id}', 'EdgeWizz\Laws\Controllers\LawsController@update')->name('fmt.laws.update');

Route::post('fmt/laws/csv_upload', 'EdgeWizz\Laws\Controllers\LawsController@csv_upload')->name('fmt.laws.csv');
Route::any('fmt/laws/inactive/{id}',  'EdgeWizz\Laws\Controllers\LawsController@inactive')->name('fmt.laws.inactive');
Route::any('fmt/laws/active/{id}',  'EdgeWizz\Laws\Controllers\LawsController@active')->name('fmt.laws.active');
