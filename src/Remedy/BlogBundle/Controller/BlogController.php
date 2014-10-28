<?php


namespace Remedy\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Blog controller.
 */
class BlogController extends Controller
{
    /**
     * Show a blog entry
     */
    public function showAction($id)
    {
        $blog = $this->get('doctrine_mongodb')
            ->getRepository('RemedyBlogBundle:Blog')
            ->find($id);

        if (!$blog) {
            throw $this->createNotFoundException('No blog found for id '.$id);
        }

        return $this->render('RemedyBlogBundle:Blog:show.html.twig', array(
            'blog'      => $blog,
        ));
    }
}