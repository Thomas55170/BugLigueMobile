<?php
use Doctrine\Common\Collections\ArrayCollection;
// src/Club.php
/**
 * @Entity @Table(name="club")
 **/
class Club {
    /**
     * @Id @Column(type="integer") @GeneratedValue
     **/
    protected $numClub;
    /**
     * @Column(type="string")
     **/
    protected $nomClub;
    /**
     * @Column(type="string")
     **/
    protected $adresseClub;
    /**
     * @Column(type="string")
     **/
    protected $cpClub;
    /**
     * @Column(type="string")
     **/
    protected $villeClub;
    /**
     * @Column(type="string")
     **/
    protected $telClub;
    /**
     * @Column(type="string")
     **/
    protected $mailClub;
    /**
     * @Column(type="string")
     **/
    protected $imgClub;
    /**
     * @Column(type="integer")
     **/
    protected $codeFFF;
    /**
     * @Column(type="string")
     **/
    protected $mdpClub;

    /**
     * @OneToMany(targetEntity="User", mappedBy="leClub")
     * @var Club[]
     **/
    protected $relatedUsers = null;

    public function __construct()
    {
        $this->relatedUsers = new ArrayCollection();
    }

    /**
     * @param mixed $adresseClub
     */
    public function setAdresseClub($adresseClub)
    {
        $this->adresseClub = $adresseClub;
    }

    /**
     * @return mixed
     */
    public function getAdresseClub()
    {
        return $this->adresseClub;
    }

    /**
     * @param mixed $codeFFF
     */
    public function setCodeFFF($codeFFF)
    {
        $this->codeFFF = $codeFFF;
    }

    /**
     * @return mixed
     */
    public function getCodeFFF()
    {
        return $this->codeFFF;
    }

    /**
     * @param mixed $cpClub
     */
    public function setCpClub($cpClub)
    {
        $this->cpClub = $cpClub;
    }

    /**
     * @return mixed
     */
    public function getCpClub()
    {
        return $this->cpClub;
    }

    /**
     * @param mixed $imgClub
     */
    public function setImgClub($imgClub)
    {
        $this->imgClub = $imgClub;
    }

    /**
     * @return mixed
     */
    public function getImgClub()
    {
        return $this->imgClub;
    }

    /**
     * @param mixed $mailClub
     */
    public function setMailClub($mailClub)
    {
        $this->mailClub = $mailClub;
    }

    /**
     * @return mixed
     */
    public function getMailClub()
    {
        return $this->mailClub;
    }

    /**
     * @param mixed $mdpClub
     */
    public function setMdpClub($mdpClub)
    {
        $this->mdpClub = $mdpClub;
    }

    /**
     * @return mixed
     */
    public function getMdpClub()
    {
        return $this->mdpClub;
    }

    /**
     * @param mixed $nomClub
     */
    public function setNomClub($nomClub)
    {
        $this->nomClub = $nomClub;
    }

    /**
     * @return mixed
     */
    public function getNomClub()
    {
        return $this->nomClub;
    }

    /**
     * @param mixed $numClub
     */
    public function setNumClub($numClub)
    {
        $this->numClub = $numClub;
    }

    /**
     * @return mixed
     */
    public function getNumClub()
    {
        return $this->numClub;
    }

    /**
     * @param mixed $telClub
     */
    public function setTelClub($telClub)
    {
        $this->telClub = $telClub;
    }

    /**
     * @return mixed
     */
    public function getTelClub()
    {
        return $this->telClub;
    }

    /**
     * @param mixed $villeClub
     */
    public function setVilleClub($villeClub)
    {
        $this->villeClub = $villeClub;
    }

    /**
     * @return mixed
     */
    public function getVilleClub()
    {
        return $this->villeClub;
    }

}