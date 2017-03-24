<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Signale
 *
 * @ORM\Table(name="signale", indexes={@ORM\Index(name="membre", columns={"membre"}), @ORM\Index(name="membre_asignaler", columns={"membre_asignaler"}), @ORM\Index(name="membre_2", columns={"membre"})})
 * @ORM\Entity
 */
class Signale
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_signal", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSignal;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=20, nullable=false)
     */
    private $etat;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="membre", referencedColumnName="id_utilisateur")
     * })
     */
    private $membre;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="membre_asignaler", referencedColumnName="id_utilisateur")
     * })
     */
    private $membreAsignaler;


}

