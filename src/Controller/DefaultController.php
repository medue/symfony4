<?php
/**
 * Created by PhpStorm.
 * User: he
 * Date: 18-6-14
 * Time: 下午3:48
 */

namespace App\Controller;

use Doctrine\Bundle\DoctrineBundle\Registry;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class DefaultController
 * @package App\Controller
 */
class DefaultController extends Controller
{

    /**
     * @return JsonResponse
     */
    public function index()
    {
        $doctrine = $this->get('doctrine');
        $doctrine instanceof Registry && null;
        return new JsonResponse(['code' => 0, 'msg' => 'the is default controller']);
    }

}