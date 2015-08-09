<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{

    /**
     * @return array|ViewModel
     */
    public function indexAction()
    {
        return new ViewModel(array(
        ));
    }

    /**
     * @return array|ViewModel
     */
    public function pageAction()
    {
        return new ViewModel(array(
        ));
    }
     
}
