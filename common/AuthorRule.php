<?php

namespace app\rbac;

use yii\rbac\Rule;

class AuthorRule extends Rule
{
    public $name = 'isAuthor'; // Имя правила

    public function execute($user_id, $item, $params)
    {
        return isset($params['blog']) ? $params['blog']->createdBy == $user_id : false;
    }
}