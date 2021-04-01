<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{
    /**
     * @Route("/lucky/number", name="lucky")
     */
    public function number()
    {
        $title = 'Lucky Number';
        $number = random_int(0, 100);
        $lotto =[];

        for ($n = 0; $n < 6; $n++) {
            $num = random_int(1,49);
            array_push($lotto, $num);
        }

        return $this->render('lucky/number.html.twig', array(
            'page_title' => $title,
            'number' => $number,
            'lotto' => $lotto
        ));
    }
}
