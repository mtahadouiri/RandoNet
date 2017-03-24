<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Abonnee
 *
 * @ORM\Table(name="abonnee", uniqueConstraints={@ORM\UniqueConstraint(name="membre_2", columns={"membre", "abonnee"})}, indexes={@ORM\Index(name="membre", columns={"membre"}), @ORM\Index(name="abonnee", columns={"abonnee"})})
 * @ORM\Entity
 */
class Abonnee
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
     * @ORM\Column(name="approuve", type="string", length=5, nullable=false)
     */
    private $approuve;

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
     *   @ORM\JoinColumn(name="abonnee", referencedColumnName="id_utilisateur")
     * })
     */
    private $abonnee;


}

