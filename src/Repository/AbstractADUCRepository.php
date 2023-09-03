<?php

namespace Jimmeak\DoctrineBundle\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

abstract class AbstractADUCRepository extends ServiceEntityRepository
{
    public function createActiveQueryBuilder($alias, $indexBy = null, bool $active = true, bool $deleted = false)
    {
        return parent::createQueryBuilder($alias, $indexBy)
            ->andWhere($alias . '.active = :active')
            ->andWhere($alias . '.deleted = :deleted')
            ->setParameter('active', $active)
            ->setParameter('deleted', $deleted)
        ;
    }

    public function findActiveOneBy(array $criteria, array $orderBy = null): object|null
    {
        $criteria = $this->getActiveCriteria($criteria);

        return $this->findOneBy($criteria, $orderBy);
    }

    public function findActiveBy(array $criteria, array $orderBy = null, $limit = null, $offset = null): array
    {
        $criteria = $this->getActiveCriteria($criteria);

        return $this->findBy($criteria, $orderBy, $limit, $offset);
    }

    protected function getActiveCriteria(array $criteria): array
    {
        if (isset($criteria['active'])) {
            unset($criteria['active']);
        }

        if (isset($criteria['deleted'])) {
            unset($criteria['deleted']);
        }

        $columns = $this->getClassMetadata()->getColumnNames();

        if (in_array('active', $columns)) {
            $criteria = array_merge($criteria, ['active' => true]);
        }

        if (in_array('deleted', $columns)) {
            $criteria = array_merge($criteria, ['deleted' => false]);
        }

        return $criteria;
    }
}
