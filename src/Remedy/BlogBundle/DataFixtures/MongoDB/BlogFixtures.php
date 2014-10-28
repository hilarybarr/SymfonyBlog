<?php
// src/Blogger/BlogBundle/DataFixtures/MongoDB/BlogFixtures.php

namespace Remedy\BlogBundle\DataFixtures\MongoDB;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Remedy\BlogBundle\Document\Blog;

class BlogFixtures implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $blog1 = new Blog();
        $blog1->setTitle('JavaScript');
        $blog1->setBlog('Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut velocity magna. Etiam vehicula nunc non leo hendrerit commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras el mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras elementum molestie vestibulum. Morbi id quam nisl. Praesent hendrerit, orci sed elementum lobortis, justo mauris lacinia libero, non facilisis purus ipsum non mi. Aliquam sollicitudin, augue id vestibulum iaculis, sem lectus convallis nunc, vel scelerisque lorem tortor ac nunc. Donec pharetra eleifend enim vel porta.');
        $blog1->setImage('web/images/beach.jpg');
        $blog1->setAuthor('Roy Ganor');
        $blog1->setTags('symfony2, php, javascript');
        $blog1->setCreated(new \DateTime());
        $blog1->setUpdated($blog1->getCreated());
        $manager->persist($blog1);

        $blog2 = new Blog();
        $blog2->setTitle('Macbooks Are the Best Computers');
        $blog2->setBlog('Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Na. Cras elementum molestie vestibulum. Morbi id quam nisl. Praesent hendrerit, orci sed elementum lobortis.');
        $blog2->setImage('web/images/pool_leak.jpg');
        $blog2->setAuthor('Hilary Barr');
        $blog2->setTags('macbooks');
        $blog2->setCreated(new \DateTime());
        $blog2->setUpdated($blog2->getCreated());
        $manager->persist($blog2);

        $blog3 = new Blog();
        $blog3->setTitle('Remedy Partners Rocks');
        $blog3->setBlog('Lorem ipsumvehicula nunc non leo hendrerit commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque.');
        $blog3->setImage('web/images/misdirection.jpg');
        $blog3->setAuthor('Hilary');
        $blog3->setTags('remedy');
        $blog3->setCreated(new \DateTime());
        $blog3->setUpdated($blog3->getCreated());
        $manager->persist($blog3);

        $blog4 = new Blog();
        $blog4->setTitle('Symfony is Our Framework');
        $blog4->setBlog('Lorem commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra.');
        $blog4->setImage('web/images/the_grid.jpg');
        $blog4->setAuthor('Max K');
        $blog4->setTags('remedy, symphony');
        $blog4->setCreated(new \DateTime());
        $blog4->setUpdated($blog4->getCreated());
        $manager->persist($blog4);

        $blog5 = new Blog();
        $blog5->setTitle('We are Using AngularJS');
        $blog5->setBlog('Lorem ipsum dolor sit amet, consectetur adipiscing elittibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque.');
        $blog5->setImage('web/images/one_or_zero.jpg');
        $blog5->setAuthor('Danny');
        $blog5->setTags('remedy, angular, computers');
        $blog5->setCreated(new \DateTime());
        $blog5->setUpdated($blog5->getCreated());
        $manager->persist($blog5);

        $manager->flush();
    }

}
