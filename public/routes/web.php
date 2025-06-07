<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';

// FRONT ROUTES (public)
Route::get('home', [App\Http\Controllers\front\indexcontroller::class, 'home']);
Route::get('header_page', [App\Http\Controllers\front\layouts\header::class, 'header_page']);
Route::get('about_page', [App\Http\Controllers\front\indexcontroller::class, 'about_page']);
Route::get('resume_page', [App\Http\Controllers\front\indexcontroller::class, 'resume_page']);
Route::get('portfolio_page', [App\Http\Controllers\front\indexcontroller::class, 'portfolio_page']);
Route::get('blog_page', [App\Http\Controllers\front\indexcontroller::class, 'blog_page']);
Route::get('contact_page', [App\Http\Controllers\front\indexcontroller::class, 'contact_page']);
Route::get('details_blog', [App\Http\Controllers\front\blog_detailscontroller::class, 'details_blog']);
Route::get('blog_single_details{blog_id}', [App\Http\Controllers\front\blog_detailscontroller::class, 'blog_single_details']);

// ADMIN ROUTES (protected with auth middleware)
Route::middleware(['auth'])->group(function () {

    Route::get('index_view', [App\Http\Controllers\admin\indexcontroller::class, 'index_view']);

    Route::get('header_view', [App\Http\Controllers\admin\layouts\headercontroller::class, 'header_view']);
    Route::get('footer_view', [App\Http\Controllers\admin\layouts\sidebarcontroller::class, 'sidebar_view']);

    // Portfolio
    Route::get('portfolio_view', [App\Http\Controllers\admin\portfoliocontroller::class, 'portfolio_view']);
    Route::post('portfolio_add', [App\Http\Controllers\admin\portfoliocontroller::class, 'portfolio_add']);
    Route::get('portfolio_show', [App\Http\Controllers\admin\portfoliocontroller::class, 'portfolio_show']);
    Route::get('portfolio_delete{portfolio_id}', [App\Http\Controllers\admin\portfoliocontroller::class, 'portfolio_delete']);
    Route::get('portfolio_edit{portfolio_id}', [App\Http\Controllers\admin\portfoliocontroller::class, 'portfolio_edit']);
    Route::post('portfolio_update', [App\Http\Controllers\admin\portfoliocontroller::class, 'portfolio_update']);

    // Resume
    Route::get('pdf_view', [App\Http\Controllers\admin\resume_controller::class, 'pdf_view']);
    Route::get('download_pdf', [App\Http\Controllers\admin\resume_controller::class, 'download_pdf']);

    // Blog
    Route::get('blog_view', [App\Http\Controllers\admin\blogcontroller::class, 'blog_view']);
    Route::post('blog_add', [App\Http\Controllers\admin\blogcontroller::class, 'blog_add']);
    Route::get('blog_show', [App\Http\Controllers\admin\blogcontroller::class, 'blog_show']);
    Route::get('blog_delete{blog_id}', [App\Http\Controllers\admin\blogcontroller::class, 'blog_delete']);
    Route::get('blog_edit{blog_id}', [App\Http\Controllers\admin\blogcontroller::class, 'blog_edit']);
    Route::post('blog_update', [App\Http\Controllers\admin\blogcontroller::class, 'blog_update']);

    // Contact
    Route::get('contact_view', [App\Http\Controllers\admin\contactcontroller::class, 'contact_view']);
    Route::post('contact_add', [App\Http\Controllers\admin\contactcontroller::class, 'contact_add']);
    Route::get('contact_show', [App\Http\Controllers\admin\contactcontroller::class, 'contact_show']);
    Route::get('contact_delete{contact_id}', [App\Http\Controllers\admin\contactcontroller::class, 'contact_delete']);

    // Slider
    Route::get('slider_view', [App\Http\Controllers\admin\slidercontroller::class, 'slider_view']);
    Route::post('slider_add', [App\Http\Controllers\admin\slidercontroller::class, 'slider_add']);
    Route::get('slider_show', [App\Http\Controllers\admin\slidercontroller::class, 'slider_show']);
    Route::get('slider_delete{slider_id}', [App\Http\Controllers\admin\slidercontroller::class, 'slider_delete']);
    Route::get('slider_edit{slider_id}', [App\Http\Controllers\admin\slidercontroller::class, 'slider_edit']);
    Route::post('slider_update', [App\Http\Controllers\admin\slidercontroller::class, 'slider_update']);
});
