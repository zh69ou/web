<?php

namespace Alone\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Admin\Entity\Aduser;
use User\Entity\User;

/**
 * @Route("/install")
 */
class InstallController extends Controller
{
	/**
	 * @Route("/", name="installone")
	 */
	public function index()
	{
            $auser = new Aduser();
            $auser->setUsername('admin');
            $auser->setEmail('zhou69.1@eyou.com');
            $auser->setPhone('18680885691');
            $auser->setHimg('');
            $auser->setRegtime();
            $auser->setState(1);
            $auser->setRoles(array('ROLE_ADMIN'));
            $encoder = $this->container->get('security.password_encoder');
            $auser->setPassword($encoder->encodePassword($auser,'123456'));
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($auser);
            $manager->flush();

            $user = new User();
            $user->setUsername('user');
            $user->setEmail('zhou69.1@qq.com');
            $user->setPhone('18680885691');
            $user->setHimg('');
            $user->setRegtime();
            $user->setApprove(1);
            $user->setState(1);
            $user->setRoles(array("ROLE_USER","index_webset","index_indexset","index_navset","index_fodderlist","index_fodderadd","index_fodderdel","index_sueradd","index_suserup","index_suserdel","index_suserclist","index_suserslist","index_suserllist","index_suserzlist","index_suserplist"));
            $encoder = $this->container->get('security.password_encoder');
            $user->setPassword($encoder->encodePassword($user,'123456'));
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($user);
            $manager->flush();
            exit;
	}
}