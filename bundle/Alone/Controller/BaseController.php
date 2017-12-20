<?php

namespace Alone\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Admin\Entity\Aduser;
use User\Entity\User;

/**
 * @Route("/")
 */
class BaseController extends Controller
{
	/**
	 * @Route("/", name="index")
	 */
	public function index()
	{
		return $this->render('alone.index.twig');
	}
}