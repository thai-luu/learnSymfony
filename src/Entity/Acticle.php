<?php

namespace App\Entity;

use App\Repository\ActicleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ActicleRepository::class)
 */
class Acticle
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $title;
     /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $body;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Acticle;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }
     /**
     * @Route("Route", name="RouteName")
     */

     public function getActicle(): ?string
     {
         return $this->Acticle;
     }

     public function setActicle(?string $Acticle): self
     {
         $this->Acticle = $Acticle;

         return $this;
     }

     public function getBody(): ?string
     {
         return $this->body;
     }

     public function setBody(?string $body): self
     {
         $this->body = $body;

         return $this;
     }

}
