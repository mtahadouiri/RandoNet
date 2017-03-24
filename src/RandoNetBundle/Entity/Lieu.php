<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Lieu
 *
 * @ORM\Table(name="lieu")
 * @ORM\Entity
 */
class Lieu
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_lieu", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLieu;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=30, nullable=false)
     */
    private $nom;

    /**
     * @var float
     *
     * @ORM\Column(name="laltitude", type="float", precision=10, scale=0, nullable=false)
     */
    private $laltitude;

    /**
     * @var float
     *
     * @ORM\Column(name="longtitude", type="float", precision=10, scale=0, nullable=false)
     */
    private $longtitude;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=40, nullable=false)
     */
    private $photo;


}

