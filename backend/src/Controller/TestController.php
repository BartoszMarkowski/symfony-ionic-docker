<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    public $c =3;
    /**
     * @Route("/test", name="test")
     */
    public function index()
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/TestController.php',
        ]);
    }

    /**
     * @Route("/test2", name="test2")
     */
    public function index2()
    {
        $a = 2;
        $b = $a*3;
        return phpinfo();
    }
}
