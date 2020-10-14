<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FeaturedRepository")
 * @ORM\EntityListeners({"App\Catrobat\Listeners\Entity\FeaturedProgramImageListener"})
 * @ORM\Table(name="featured")
 */
class FeaturedProgram extends SpecialProgram
{
  /**
   * @ORM\Column(type="string", nullable=true)
   */
  protected ?string $url = null;

  public function setImageType(string $image): FeaturedProgram
  {
    $this->imagetype = $image;

    return $this;
  }

  public function setProgram(?Program $program): FeaturedProgram
  {
    $this->program = $program;

    return $this;
  }

  public function setUrl(?string $url): FeaturedProgram
  {
    $this->url = $url;

    return $this;
  }

  public function setActive(bool $active): FeaturedProgram
  {
    $this->active = $active;

    return $this;
  }

  public function setNewFeaturedImage(File $file): void
  {
    $this->file = $file;
  }

  public function getUrl(): ?string
  {
    return $this->url;
  }
}
