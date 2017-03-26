<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Randonnee
 *
 * @ORM\Table(name="randonnee", indexes={@ORM\Index(name="organisateur", columns={"organisateur"}), @ORM\Index(name="organisateur_2", columns={"organisateur"}), @ORM\Index(name="lieu", columns={"lieu"})})
 * @ORM\Entity
 */
class Randonnee
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_randonnee", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRandonnee;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_rando", type="string", length=20, nullable=false)
     */
    private $nomRando;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_rando", type="date", nullable=false)
     */
    private $dateRando;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=20, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="difficulte", type="string", length=20, nullable=false)
     */
    private $difficulte;

    /**
     * @var string
     *
     * @ORM\Column(name="circuit", type="string", length=20, nullable=false)
     */
    private $circuit;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="text", length=65535, nullable=false)
     */
    private $photo;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=false)
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="organisateur", referencedColumnName="id_utilisateur")
     * })
     */
    private $organisateur;

    /**
     * @var \Lieu
     *
     * @ORM\ManyToOne(targetEntity="Lieu")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="lieu", referencedColumnName="id_lieu")
     * })
     */
    private $lieu;
}

