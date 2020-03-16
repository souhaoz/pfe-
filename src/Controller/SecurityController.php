<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{

  /**
     * @Route("/login", name="app_login")
     * @param AuthenticationUtils $authenticationUtils
     * @return Response
     */

    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        /*$json = json_encode(array(
            'error' => $error,
            'lastUsername' => $lastUsername));
                $response= new Response();
        $response->headers->set('Content-Type', 'application/ld+json');
        $response->setContent($json);

        return $response;*/

        error_log($this->getUser());
        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername,
            'is_authenticated' => json_encode(!empty($this->getUser())),
            'error' => $error
        ]);
    }

    /**     * @Route("/logout", name="app_logout")
     */
    public function logout()
    {


        //throw new \Exception('This method can be blank - it will be intercepted by the logout key on your firewall');
        return $this->render('security/login.html.twig');
    }
}
