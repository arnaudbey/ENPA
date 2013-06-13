<?php

namespace Innova\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use DrWatt\Bundle\BackBundle\Entity\Step;

/**
 * WorkspaceManagerController.
 *
 */
class TestController extends Controller
{
    /**
     * @Route("/test/")
     * @Template()
     */
    public function indexAction()
    {
        $manager = $this->getDoctrine()->getManager();
        $repository = $manager->getRepository("InnovaLearningPathBundle:Step");

        //TODO WTF ?
        $step = $repository->find('1');

        $options = array(
            'decorate' => true,
            'rootOpen' => '<ul class="sortable ui-sortable">',
            'rootClose' => '</ul>',
            'childOpen' => '<li>',
            'childClose' => '</li>'
        );

        $htmlTree = $repository->childrenHierarchy(
            $step,
            false,
            $options,
            true
        );

        return array('htmlTree' => $htmlTree);
    }

    /**
     * @Route("/test2/")
     * @Template()
     */
    public function test2Action()
    {
       
        $fruits = array (
            "fruits"  => array("a" => "orange", "b" => "banana", "c" => "apple"),
            "numbers" => array(1, 2, 3, 4, 5, 6),
            "holes"   => array("first", 5 => "second", "third")
        );

        $json =  json_encode($fruits);
        echo $json;

        return array('json'=>$json);
    }


     /**
    * @Route("/ajaxSaveTree", name="ajaxSaveTree")
    * @Method({"POST"})
    */
    public function ajaxSaveTreeAction(Request $request)
    {
        
        if ($request->getMethod() == 'POST') {
            $json = $request->get('json');
            die($json);
           
        }

        $manager = $this->getDoctrine()->getManager();
        $repository = $manager->getRepository("InnovaLearningPathBundle:Step");

        return array('htmlTree' => $htmlTree);
    }
}
