<?php

namespace DemoBundle\Controller;

use DemoBundle\Entity\Almacenes;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        /**
         * @var EntityManager $em
         */
        $em = $this->get("doctrine.orm.entity_manager");
        $repo = $em->getRepository("DemoBundle:Almacenes");

        $almacen = $repo->findBy(array("estado"=>"activo"));

        var_dump($almacen);

        return $this->render('DemoBundle:Default:index.html.twig');
    }
}
