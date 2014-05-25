<?php
use Doctrine\Common\Collections\ArrayCollection;
// src/User.php
/**
 * @Entity @Table(name="users")
 **/
class User
{
    /**
     * @Id @GeneratedValue @Column(type="integer")
     * @var int
     **/
    protected $id;

    /**
     * @Column(type="string")
     * @var string
     **/
    protected $name;
    /**
     * @Column(type="string")
     * @var string
     **/
    protected $prenom;
    /**
     * @Column(type="string")
     * @var string
     **/
    protected $fonction;

    /**
     * @Column(type="string")
     * @var string
     **/
    protected $login;
    /**
     * @Column(type="string")
     * @var string
     **/
    protected $mdp;
    /**
     * @Column(type="string")
     * @var string
     **/
    protected $courriel;

    /**
     * @OneToMany(targetEntity="Bug", mappedBy="reporter")
     * @var Bug[]
     **/
    protected $reportedBugs = null;

    /**
     * @OneToMany(targetEntity="Bug", mappedBy="engineer")
     * @var Bug[]
     **/
    protected $assignedBugs = null;

    /**
     * @ManyToOne(targetEntity="Club", inversedBy="relatedUsers")
     * @JoinColumn(name="leClub", referencedColumnName="numClub")
     **/
    protected $leClub;

    /**
     * @param string $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setLeClub($leClub)
    {
        $this->leClub = $leClub;
    }

    public function getLeClub()
    {
        return $this->leClub;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param string $fonction
     */
    public function setFonction($fonction)
    {
        $this->fonction = $fonction;
    }

    /**
     * @return string
     */
    public function getFonction()
    {
        return $this->fonction;
    }



    public function __construct()
    {
        $this->reportedBugs = new ArrayCollection();
        $this->assignedBugs = new ArrayCollection();
    }

    public function addReportedBug($bug)
    {
        $this->reportedBugs[] = $bug;
    }

    public function assignedToBug($bug)
    {
        $this->assignedBugs[] = $bug;
    }

    /**
     * @return \Bug[]
     */
    public function getReportedBugs()
    {
        return $this->reportedBugs;
    }

}