<?php

namespace Admin\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Security\Csrf\CsrfTokenManager;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;
use Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator;
use Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage;

/**
 * @Route("/admin")
 */
class SecurtyController extends Controller
{
	/**
	 * @Route("/login", name="adminlogin", methods={"GET"})
	 */
	public function login(SessionInterface $session,CsrfTokenManagerInterface $csrfManager)
	{
		// $csrfGenerator = new UriSafeTokenGenerator();
		// $csrfStorage = new SessionTokenStorage($session);
		// $csrfManager = new CsrfTokenManager($csrfGenerator, $csrfStorage);
		$token=$csrfManager->getToken('adlandcsrf')->getValue();
		return $this->render('admin.login.twig',array('tokenstring'=>$token));
	}

	/**
	 * @Route("/land", name="adminland", methods={"POST"})
	 */
	public function land()
	{
	}

	/**
	 * @Route("/logout", name="adminlogout", methods={"GET"})
	 */
	public function logout()
	{
	}
}