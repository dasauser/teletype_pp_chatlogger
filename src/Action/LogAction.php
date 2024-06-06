<?php

namespace App\Action;

use yii\base\Action;

class LogAction extends Action
{
    public array $postData = [];

    public function run()
    {
        return "200";
    }
}