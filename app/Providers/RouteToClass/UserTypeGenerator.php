<?php

namespace App\Providers\RouteToClass;

use Zschuessler\RouteToClass\Generators\GeneratorAbstract;

class UserTypeGenerator extends GeneratorAbstract
{
    public function generateClassName()
    {
        $userType = 'admin';

        return 'user-' . $userType;
    }
}