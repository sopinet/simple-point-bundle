<?php

namespace Sopinet\Bundle\SimplePointBundle\ORM;

use Sopinet\SimplePointBundle\ORM\Type\SimplePoint;

trait SimplePointRepository
{
    public function findByDistanceQB(SimplePoint $point, $distanceMax)
    {
    	//SELECT e FROM ExampleEntity e WHERE DISTANCE(e.somePoint, POINT_STR(:point)) < 5
        return $this->createQueryBuilder('e')
            ->andWhere('DISTANCE(e.location, POINT_STR(:location)) <= :distanceMax')
            ->setParameter('location', $point)
            ->setParameter('distanceMax', $distanceMax)
        ;
    }

    public function findByDistance(SimplePoint $point, $distanceMax)
    {
        return $this->findByDistanceQB($point, $distanceMax)
            ->getQuery()
            ->execute()
        ;
    }
}

