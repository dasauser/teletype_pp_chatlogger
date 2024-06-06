<?php

namespace App\Controller;

use yii\rest\Controller;

abstract class BaseController extends Controller
{
    public function behaviors(): array
    {
        $behaviors = parent::behaviors();
        // TODO: rateLimiter cause bugs when identityClass isn't set
        unset($behaviors['rateLimiter']);
        return $behaviors;
    }
}