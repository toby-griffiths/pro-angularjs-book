<?php
/**
 * Created by PhpStorm.
 * User: toby
 * Date: 20/02/15
 * Time: 14:28
 */

namespace TobyGriffiths\Training\AngularJS\Controller;

use CubicMushroom\Annotations\Routing\Annotation as API;

class TestController
{

    /**
     * @API\Route("/abc/:id", methods="GET")
     */
    public function action($id)
    {
        echo '/abc/' . $id;
    }
}