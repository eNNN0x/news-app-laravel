<?php

use App\Http\Controllers\Api\NewsController;

Route::apiResource('news', NewsController::class);