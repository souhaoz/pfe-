<?php
namespace App\DataPersister;
use ApiPlatform\Core\DataPersister\DataPersisterInterface;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserDataPersister implements   DataPersisterInterface

{
    private $entityManager;
    private $userPasswordEncoder;
    public function supports($data): bool
    {
        return $data instanceof User;
    }

    public function __construct(EntityManagerInterface $entityManager,UserPasswordEncoderInterface $userPasswordEncoder)
    {
        $this->entityManager = $entityManager;
        $this->userPasswordEncoder = $userPasswordEncoder;
    }
    /**
     * @param User $data
     */
    public function persist($data)
         {
             $date = new \DateTime();
             $data->setPassword($this->userPasswordEncoder->encodePassword( $data , $data->getPassword()));
             $data->setCreatedAt($date);
             $data->setRoles(["ROLE_CLIENT"]);
             $this->entityManager->persist($data);
             $this->entityManager->flush();
    }
    public function remove($data)
    {
        $this->entityManager->remove($data);
        $this->entityManager->flush();
    }


}