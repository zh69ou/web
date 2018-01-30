<?php

namespace Admin\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/admin")
 */
class BaseController extends Controller
{
	/**
	 * @Route("/", name="adminindex", options={"security": "admin"})
	 */
	public function index(Response $response)
	{
		return $this->render('admin.index.twig');
		// var_dump($this->render('admin.index.twig')->headers->getCookies());
	}
}