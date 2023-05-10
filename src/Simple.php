<?php
namespace Wt\ArrayMenu;

use Wt\ArrayMenu\Controller\ArrayMenuController;

class Simple extends ArrayMenuController
{

    /**
     * @param array $array_menu
     */
    public function __construct(array $array_menu)
    {
        $this->setArrayMenu($array_menu);
    }

    public function __toString()
    {
        return $this->start()->show();
    }

}
