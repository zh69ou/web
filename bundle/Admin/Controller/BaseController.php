<?php

namespace Admin\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @Route("/admin")
 */
class BaseController extends Controller
{
	/**
	 * @Route("/", name="adminindex")
	 */
	public function index()
	{
		return $this->render('admin.index.twig');
	}
}