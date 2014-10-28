<?php

namespace Remedy\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Remedy\BlogBundle\Entity\Enquiry;
use Remedy\BlogBundle\Form\EnquiryType;
use Remedy\BlogBundle\Document\Blog;
use Symfony\Component\HttpFoundation\Response;

class PageController extends Controller
{
    public function indexAction()
    {
        $blogs = $this->get('doctrine_mongodb')
            ->getManager()
            ->getRepository('RemedyBlogBundle:Blog')
            ->findAll();

        return $this->render('RemedyBlogBundle:Page:index.html.twig', array(
            'blogs' => $blogs
        ));
    }


    public function aboutAction()
    {
        return $this->render('RemedyBlogBundle:Page:about.html.twig');
    }

    public function contactAction()
    {
        $enquiry = new Enquiry();
        $form = $this->createForm(new EnquiryType(), $enquiry);

        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $form->bind($request);

            if ($form->isValid()) {
                $message = \Swift_Message::newInstance()
                    ->setSubject('Contact enquiry from Remedy Partners')
                    ->setFrom('rosedawson1218@gmail.com')
                    ->setTo($this->container->getParameter('remedy_blog.emails.contact_email'))
                    ->setBody($this->renderView('RemedyBlogBundle:Page:contactEmail.txt.twig', array('enquiry' => $enquiry)));
                $this->get('mailer')->send($message);


                // Redirect - This is important to prevent users re-posting
                // the form if they refresh the page
                return $this->redirect($this->generateUrl('RemedyBlogBundle_contact'));
            }
        }

        return $this->render('RemedyBlogBundle:Page:contact.html.twig', array(
            'form' => $form->createView()
        ));
    }






}