<?php

namespace App\Controller;

use App\Entity\Messages;
use App\Form\MessagesType;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MessagesController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function sendMessage(Request $request): Response
    {
        //on crée le commentaire
        $comment = new Messages();

        //on génère le formulaire
        $commentForm = $this->createForm(MessagesType::class, $comment);

        $commentForm->handleRequest($request);

        //Traitement du formulaire
        if ($commentForm->isSubmitted() && $commentForm->isValid()) {
            //dd($comment);
            $comment->setsendAt(new DateTime());

            //recuperation entity manager
            $em = $this->getDoctrine()->getManager();
            $em->persist($comment);
            $em->flush();

            $this->addFlash('message', 'votre commentaire a bien été envoyé');

            return  $this->redirect('main');
        }

        return $this->render('messages/contact.html.twig', [
            'commentForm' => $commentForm->createView(),
        ]);
    }

}
