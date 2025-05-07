<?php 
namespace App\Entity;

use App\Repository\PrescriptionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\Meds;

#[ORM\Entity(repositoryClass: PrescriptionRepository::class)]
class Prescription
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\NotBlank]
    private ?string $duration = null;

    #[ORM\Column(nullable: true)]
    private ?bool $status = null;

    
    #[ORM\Column(type: 'date')]
    #[Assert\NotBlank]
    #[SystemDate]
    private \DateTimeInterface $creationDate;

    #[ORM\Column(type: 'date', nullable: true)]
    private ?\DateTimeInterface $validationDate = null;

    #[ORM\Column(type: 'float', nullable: true)]
    private ?float $price = null;

    #[ORM\Column(length: 255)]
    private ?string $medication = null;

    #[ORM\ManyToOne(inversedBy: 'prescriptionid')]
    private ?User $user = null;

   



    
    public function __construct()
    {
        $this->creationDate = new \DateTimeImmutable('today');
        $this->medications = new ArrayCollection();
    }
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDuration(): ?string
    {
        return $this->duration;
    }

    public function setDuration(?string $duration): static
    {
        $this->duration = $duration;

        return $this;
    }

    public function isStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(?bool $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function getCreationDate(): \DateTimeInterface
    {
        return $this->creationDate;
    }

    // No setter for creationDate to make it immutable by users

    public function getValidationDate(): ?\DateTimeInterface
    {
        return $this->validationDate;
    }

    public function setValidationDate(?\DateTimeInterface $validationDate): static
    {
        $this->validationDate = $validationDate;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(?float $price): static
    {
        $this->price = $price;

        return $this;
    }

    public function getMedication(): ?string
    {
        return $this->medication;
    }

    public function setMedication(string $medication): static
    {
        $this->medication = $medication;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }

   


}
