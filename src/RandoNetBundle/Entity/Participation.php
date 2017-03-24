<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Participation
 *
 * @ORM\Table(name="participation", indexes={@ORM\Index(name="id_randonnee", columns={"id_randonnee"}), @ORM\Index(name="id_membre", columns={"id_membre"}), @ORM\Index(name="id_randonnee_2", columns={"id_randonnee"})})
 * @ORM\Entity
 */
class Participation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="confirmation", type="string", length=10, nullable=false)
     */
    private $confirmation = 'NON';

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_membre", referencedColumnName="id_utilisateur")
     * })
     */
    private $idMembre;

    /**
     * @var \Randonnee
     *
     * @ORM\ManyToOne(targetEntity="Randonnee")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_randonnee", referencedColumnName="id_randonnee")
     * })
     */
    private $idRandonnee;


}

