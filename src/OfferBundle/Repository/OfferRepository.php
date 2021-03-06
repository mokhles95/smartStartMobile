<?php

namespace OfferBundle\Repository;
use OfferBundle\Entity\Offer;

/**
 * OfferRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class OfferRepository extends \Doctrine\ORM\EntityRepository
{
    public function findWaitingOffers()
    {
        $dql   = "SELECT o FROM OfferBundle:Offer o WHERE o.status='En Attente'";
        $query = $this->getEntityManager()->createQuery($dql);
        return $query->execute();
    }
}
