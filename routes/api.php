<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\CampaignController;
use App\Http\Controllers\API\PartnerController;
use App\Http\Controllers\API\DonorController;
use App\Http\Controllers\API\VolunteerController;

// Users
Route::get('users', [UserController::class, 'index']);
Route::post('users', [UserController::class, 'store']);
Route::get('users/{id}', [UserController::class, 'show']);
Route::put('users/{id}', [UserController::class, 'update']);
Route::delete('users/{id}', [UserController::class, 'destroy']);

// Campaigns
Route::get('campaigns', [CampaignController::class, 'index']);
Route::post('campaigns', [CampaignController::class, 'store']);
Route::get('campaigns/{id}', [CampaignController::class, 'show']);
Route::put('campaigns/{id}', [CampaignController::class, 'update']);
Route::delete('campaigns/{id}', [CampaignController::class, 'destroy']);

// Partners
Route::get('partners', [PartnerController::class, 'index']);
Route::post('partners', [PartnerController::class, 'store']);
Route::get('partners/{id}', [PartnerController::class, 'show']);
Route::put('partners/{id}', [PartnerController::class, 'update']);
Route::delete('partners/{id}', [PartnerController::class, 'destroy']);

// Donors
Route::get('donors', [DonorController::class, 'index']);
Route::post('donors', [DonorController::class, 'store']);
Route::get('donors/{id}', [DonorController::class, 'show']);
Route::put('donors/{id}', [DonorController::class, 'update']);
Route::delete('donors/{id}', [DonorController::class, 'destroy']);

// Volunteers
Route::get('volunteers', [VolunteerController::class, 'index']);
Route::post('volunteers', [VolunteerController::class, 'store']);
Route::get('volunteers/{id}', [VolunteerController::class, 'show']);
Route::put('volunteers/{id}', [VolunteerController::class, 'update']);
Route::delete('volunteers/{id}', [VolunteerController::class, 'destroy']);
