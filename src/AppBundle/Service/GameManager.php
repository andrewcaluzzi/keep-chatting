<?php

namespace AppBundle\Service;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Security\Acl\Domain\DoctrineAclCache;

class GameManager
{
    private $entityManager;

    public function __construct(EntityManager $doctrine)
    {
        $this->entityManager = $doctrine;
    }
}
