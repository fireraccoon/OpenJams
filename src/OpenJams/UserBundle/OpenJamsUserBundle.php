<?php

namespace OpenJams\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;


class OpenJamsUserBundle extends Bundle
{
    public function getParent(){
        return 'FOSUserBundle';
    }
}
