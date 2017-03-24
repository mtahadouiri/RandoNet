<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Avis
 *
 * @ORM\Table(name="avis", indexes={@ORM\Index(name="randonnee", columns={"randonnee"}), @ORM\Index(name="membre", columns={"membre"})})
 * @ORM\Entity
 */
class Avis
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_avis", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAvis;

    /**
     * @var string
     *
     * @ORM\Column(name="avis_randonnee", type="text", length=65535, nullable=false)
     */
    private $avisRandonnee;

    /**
     * @var integer
     *
     * @ORM\Column(name="note_org", type="integer", nullable=false)
     */
    private $noteOrg;

    /**
     * @var \Randonnee
     *
     * @ORM\ManyToOne(targetEntity="Randonnee")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="randonnee", referencedColumnName="id_randonnee")
     * })
     */
    private $randonnee;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="membre", referencedColumnName="id_utilisateur")
     * })
     */
    private $membre;


}

