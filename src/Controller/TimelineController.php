<?php

/**
 *
 * @package    App
 * @subpackage Controller
 * @author     Matijs de Jong <mjong@magnafacta.nl>
 * @copyright  Copyright (c) 2019 MagnaFacta B.V.
 * @license    No free license, do not copy
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 *
 * @package    App
 * @subpackage Controller
 * @copyright  Copyright (c) 2019, Erasmus MC and MagnaFacta B.V.
 * @license    No free license, do not copy
 * @copyright  Copyright (c) 2019 MagnaFacta B.V.
 *
 * @Route("/timeline", name="timeline_index")
 */
class TimelineController extends AbstractController
{
    /**
     * @Route("/", name="timeline")
     * @Route("/index", name="timeline_index")
     */
     public function index()
    {
         return new Response(
            '<html><body>hello</body></html>'
        );
    }

}
