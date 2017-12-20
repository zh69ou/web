<?php

namespace User\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @Route("/user")
 */
class BaseController extends Controller
{
	/**
	 * @Route("/", name="userindex")
	 */
	public function index()
	{
		return $this->render('user.index.twig');
	}
}