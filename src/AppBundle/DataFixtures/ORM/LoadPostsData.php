<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Posts;

class LoadPostsData implements  FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {

        for($i = 0; $i < 50; $i++){
            $posts = new Posts();
            $posts->setTitle('Post #'.$i);
            $posts->setText('I am post #'.$i.' from fixture.');
            $manager->persist($posts);
        }

        $manager->flush();
    }
}

