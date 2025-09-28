<?php

use App\Models\Skill;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\SocialLinkController;
use App\Http\Controllers\AchievementController;
use App\Http\Controllers\PageSettingController;
use App\Http\Controllers\SiteSettingController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\CertificationController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/miniprojects', function () {
    return view('mini-projects');
})->name('miniprojects');


// Admin Routes 
Route::prefix('admin')->group(function () {

    Route::controller(AdminController::class)->group(function () {
        Route::get('/home', 'showAdminDashboard')->name('admin.dashboard');
        Route::get('/personal-info', 'showPersonalInfo')->name('admin.personal.info');
    });

    Route::controller(SocialLinkController::class)->group(function () {
        Route::get('/social-links', 'index')->name('admin.social_links.index');
        Route::get('/social-links/create', 'create')->name('admin.social_links.create');
        Route::post('/social-links', 'store')->name('admin.social_links.store');
        Route::get('/social-links/{id}/edit', 'edit')->name('admin.social_links.edit');
        Route::put('/social-links/{id}', 'update')->name('admin.social_links.update');
        Route::delete('/social-links/{id}', 'destroy')->name('admin.social_links.delete');
    });

    Route::controller(SkillController::class)->group(function () {
        Route::get('/skills', 'index')->name('admin.skills.index');
        Route::get('/skills/create', 'create')->name('admin.skills.create');
        Route::post('/skills', 'store')->name('admin.skills.store');
        Route::get('/skills/{id}/edit', 'edit')->name('admin.skills.edit');
        Route::put('/skills/{id}', 'update')->name('admin.skills.update');
        Route::delete('/skills/{id}', 'destroy')->name('admin.skills.delete');
    });

    Route::controller(ProjectController::class)->group(function () {
        Route::get('/projects', 'index')->name('admin.projects.index');
        Route::get('/projects/create', 'create')->name('admin.projects.create');
        Route::post('/projects', 'store')->name('admin.projects.store');
        Route::get('/projects/{id}/edit', 'edit')->name('admin.projects.edit');
        Route::put('/projects/{id}', 'update')->name('admin.projects.update');
        Route::delete('/projects/{id}', 'destroy')->name('admin.projects.delete');
    });

    Route::controller(CertificationController::class)->group(function () {
        Route::get('/certifications', 'index')->name('admin.certifications.index');
        Route::get('/certifications/create', 'create')->name('admin.certifications.create');
        Route::post('/certifications', 'store')->name('admin.certifications.store');
        Route::get('/certifications/{id}/edit', 'edit')->name('admin.certifications.edit');
        Route::put('/certifications/{id}', 'update')->name('admin.certifications.update');
        Route::delete('/certifications/{id}', 'destroy')->name('admin.certifications.delete');
    });

    Route::controller(EducationController::class)->group(function () {
        Route::get('/educations', 'index')->name('admin.educations.index');
        Route::get('/educations/create', 'create')->name('admin.educations.create');
        Route::post('/educations', 'store')->name('admin.educations.store');
        Route::get('/educations/{id}/edit', 'edit')->name('admin.educations.edit');
        Route::put('/educations/{id}', 'update')->name('admin.educations.update');
        Route::delete('/educations/{id}', 'destroy')->name('admin.educations.delete');
    });

    Route::controller(ExperienceController::class)->group(function () {
        Route::get('/experiences', 'index')->name('admin.experiences.index');
        Route::get('/experiences/create', 'create')->name('admin.experiences.create');
        Route::post('/experiences', 'store')->name('admin.experiences.store');
        Route::get('/experiences/{id}/edit', 'edit')->name('admin.experiences.edit');
        Route::put('/experiences/{id}', 'update')->name('admin.experiences.update');
        Route::delete('/experiences/{id}', 'destroy')->name('admin.experiences.delete');
    });

    Route::controller(AchievementController::class)->group(function () {
        Route::get('/achievements', 'index')->name('admin.achievements.index');
        Route::get('/achievements/create', 'create')->name('admin.achievements.create');
        Route::post('/achievements', 'store')->name('admin.achievements.store');
        Route::get('/achievements/{id}/edit', 'edit')->name('admin.achievements.edit');
        Route::put('/achievements/{id}', 'update')->name('admin.achievements.update');
        Route::delete('/achievements/{id}', 'destroy')->name('admin.achievements.delete');
    });

    Route::controller(ContactController::class)->group(function () {
        Route::get('/contacts', 'index')->name('admin.contacts.index');
        Route::get('/contacts/create', 'create')->name('admin.contacts.create');
        Route::post('/contacts', 'store')->name('admin.contacts.store');
        Route::get('/contacts/{id}/edit', 'edit')->name('admin.contacts.edit');
        Route::put('/contacts/{id}', 'update')->name('admin.contacts.update');
        Route::delete('/contacts/{id}', 'destroy')->name('admin.contacts.delete');
    });

    Route::controller(TestimonialController::class)->group(function () {
        Route::get('/testimonials', 'index')->name('admin.testimonials.index');
        Route::get('/testimonials/create', 'create')->name('admin.testimonials.create');
        Route::post('/testimonials', 'store')->name('admin.testimonials.store');
        Route::get('/testimonials/{id}/edit', 'edit')->name('admin.testimonials.edit');
        Route::put('/testimonials/{id}', 'update')->name('admin.testimonials.update');
        Route::delete('/testimonials/{id}', 'destroy')->name('admin.testimonials.delete');
    });

    Route::controller(PageSettingController::class)->group(function () {
        Route::get('/page-settings', 'index')->name('admin.page_settings.index');
        Route::get('/page-settings/create', 'create')->name('admin.page_settings.create');
        Route::post('/page-settings', 'store')->name('admin.page_settings.store');
        Route::get('/page-settings/{id}/edit', 'edit')->name('admin.page_settings.edit');
        Route::put('/page-settings/{id}', 'update')->name('admin.page_settings.update');
        Route::delete('/page-settings/{id}', 'destroy')->name('admin.page_settings.delete');
    });

    Route::controller(SiteSettingController::class)->group(function () {
        Route::get('/site-settings', 'index')->name('admin.site_settings.index');
        Route::get('/site-settings/create', 'create')->name('admin.site_settings.create');
        Route::post('/site-settings', 'store')->name('admin.site_settings.store');
        Route::get('/site-settings/{id}/edit', 'edit')->name('admin.site_settings.edit');
        Route::put('/site-settings/{id}', 'update')->name('admin.site_settings.update');
        Route::delete('/site-settings/{id}', 'destroy')->name('admin.site_settings.delete');
    });

    Route::get('/logout', function() {
        // Perform logout logic here (e.g., Auth::logout())
        Auth::logout();
        return redirect()->route('home');
    })->name('admin.logout');
});