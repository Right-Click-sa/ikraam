<?php

use App\Http\Controllers\Frontend\QuestionController;
use Tabuna\Breadcrumbs\Trail;

/*
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */

Route::get('/questions', [QuestionController::class, 'questions'])
   ->name('questions')
   ->breadcrumbs(function (Trail $trail) {
       $trail->push(__('Common Questions'), route('frontend.questions'));
   });

Route::get('/questions/one', [QuestionController::class, 'one'])
    ->name('questions.one')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Common Questions'), route('frontend.questions.one'));
    });

Route::get('/questions/two', [QuestionController::class, 'two'])
    ->name('questions.two')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Common Questions'), route('frontend.questions.two'));
    });

Route::get('/questions/three', [QuestionController::class, 'three'])
    ->name('questions.three')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Common Questions'), route('frontend.questions.three'));
    });

Route::get('/questions/four', [QuestionController::class, 'four'])
    ->name('questions.four')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Common Questions'), route('frontend.questions.four'));
    });

Route::get('/questions/five', [QuestionController::class, 'five'])
    ->name('questions.five')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Common Questions'), route('frontend.questions.five'));
    });

Route::get('/questions/six', [QuestionController::class, 'six'])
    ->name('questions.six')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Common Questions'), route('frontend.questions.six'));
    });

Route::get('/questions/seven', [QuestionController::class, 'seven'])
    ->name('questions.seven')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Common Questions'), route('frontend.questions.seven'));
    });

Route::get('/questions/eight', [QuestionController::class, 'eight'])
    ->name('questions.eight')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Common Questions'), route('frontend.questions.eight'));
    });

Route::get('/questions/nine', [QuestionController::class, 'nine'])
    ->name('questions.nine')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Common Questions'), route('frontend.questions.nine'));
    });

Route::get('/questions/ten', [QuestionController::class, 'ten'])
    ->name('questions.ten')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Common Questions'), route('frontend.questions.ten'));
    });
