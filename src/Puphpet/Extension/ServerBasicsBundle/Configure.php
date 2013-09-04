<?php

namespace Puphpet\Extension\ServerBasicsBundle;

use Puphpet\MainBundle\Extension;

class Configure extends Extension\ExtensionAbstract implements Extension\ExtensionInterface
{
    public function getName()
    {
        return 'Server Basics';
    }

    public function getMainController()
    {
        return $this->container->get('puphpet_extension_serverbasics_main_controller');
    }
}
