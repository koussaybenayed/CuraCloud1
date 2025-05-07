<?php
// // src/Repository/StreamRepository.php
// namespace App\Repository;

// use App\Entity\Stream;
// use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
// use Doctrine\Persistence\ManagerRegistry;

// class StreamRepository extends ServiceEntityRepository
// {
//     public function __construct(ManagerRegistry $registry)
//     {
//         parent::__construct($registry, Stream::class);
//     }

//     /**
//      * Find an active stream by user.
//      *
//      * @param string $userId
//      *
//      * @return Stream|null
//      */
//     public function findActiveStreamByUser(string $userId): ?Stream
//     {
//         return $this->createQueryBuilder('s')
//             ->andWhere('s.user = :userId')
//             ->andWhere('s.isActive = true')
//             ->setParameter('userId', $userId)
//             ->getQuery()
//             ->getOneOrNullResult();
//     }

//     /**
//      * Find all active streams.
//      *
//      * @return Stream[]
//      */
//     public function findAllActiveStreams(): array
//     {
//         return $this->createQueryBuilder('s')
//             ->andWhere('s.isActive = true')
//             ->getQuery()
//             ->getResult();
//     }
// }

// src/Repository/StreamRepository.php
namespace App\Repository;

use App\Entity\Stream;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Psr\Log\LoggerInterface;

class StreamRepository extends ServiceEntityRepository
{
    private $logger;

    public function __construct(ManagerRegistry $registry, LoggerInterface $logger)
    {
        parent::__construct($registry, Stream::class);
        $this->logger = $logger;
    }

    /**
     * Find an active stream by user.
     *
     * @param string $userId
     *
     * @return Stream|null
     */
    public function findActiveStreamByUser(string $userId): ?Stream
    {
        try {
            return $this->createQueryBuilder('s')
                ->andWhere('s.user = :userId')
                ->andWhere('s.isActive = true')
                ->setParameter('userId', $userId)
                ->getQuery()
                ->getOneOrNullResult();
        } catch (\Exception $e) {
            $this->logger->error('Error finding active stream by user: ' . $e->getMessage());
            return null;
        }
    }

    /**
     * Find all active streams.
     *
     * @return Stream[]
     */
    public function findAllActiveStreams(): array
    {
        try {
            return $this->createQueryBuilder('s')
                ->andWhere('s.isActive = true')
                ->getQuery()
                ->getResult();
        } catch (\Exception $e) {
            $this->logger->error('Error finding all active streams: ' . $e->getMessage());
            return [];
        }
    }
}

