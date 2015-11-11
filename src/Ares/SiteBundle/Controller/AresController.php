<?php
/**
 * Created by PhpStorm.
 * User: gassama
 * Date: 11/11/15
 * Time: 10:53
 */

namespace Ares\SiteBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AresController extends Controller{

    public function indexAction()
    {
        return $this->render('AresSiteBundle:Ares:index.html.twig');
    }
}