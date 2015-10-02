<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class PostsRepository extends EntityRepository
{
    public function getAllPagination($user_opt = array())
    {
        $option = array('limit' => 10, 'start' => 0, 'order' => 'ASC');
        $option = array_merge($option, $user_opt);

        $query = $this->createQueryBuilder('p')
            ->select('p')
            ->setMaxResults($option['limit'])
            ->setFirstResult($option['start'])
            ->orderBy('p.updated', $option['order'])
        ->getQuery()
        ->execute();

        return $query;
    }

    public function countPosts()
    {
        $query = $this->createQueryBuilder('p')
            ->select('count(p)')
            ->getQuery()
            ->getSingleScalarResult();
        return $query;
    }
}