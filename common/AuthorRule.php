<?php

namespace common;

use yii\rbac\Rule;

class AuthorRule extends Rule
{
    public $name = 'Author'; // Имя правила

    public function execute($user, $item, $params)
    {
//        echo '<pre>';
//        print_r($user_id);
//        echo '</pre>';die;
//        var_dump($user);die;
        return isset($params['blog']) ? $params['blog']->author == $user : false;
    }
}