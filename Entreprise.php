<?php

namespace Isefac\Bundle\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entreprise
 */
class Entreprise
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nomEntreprise;

    /**
     * @var string
     */
    private $adresse;

    /**
     * @var string
     */
    private $codePostal;

    /**
     * @var string
     */
    private $ville;

    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $contactEntreprise;

    /**
     * @var string
     */
    private $adresseEmail;

    /**
     * @ORM\OneToMany(targetEntity="Isefac\MainBundle\Entity\Entreprise",  cascade={"persist","remove"})
     */
    private $offre;

    public function setOffre($offre)
    {
        $this->offre = $offre;
        return $this;
    }

    public function getOffre()
    {
        return $this->offre;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomEntreprise
     *
     * @param string $nomEntreprise
     * @return Entreprise
     */
    public function setNomEntreprise($nomEntreprise)
    {
        $this->nomEntreprise = $nomEntreprise;

        return $this;
    }

    /**
     * Get nomEntreprise
     *
     * @return string 
     */
    public function getNomEntreprise()
    {
        return $this->nomEntreprise;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Entreprise
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set codePostal
     *
     * @param string $codePostal
     * @return Entreprise
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get codePostal
     *
     * @return string 
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return Entreprise
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Entreprise
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set contactEntreprise
     *
     * @param string $contactEntreprise
     * @return Entreprise
     */
    public function setContactEntreprise($contactEntreprise)
    {
        $this->contactEntreprise = $contactEntreprise;

        return $this;
    }

    /**
     * Get contactEntreprise
     *
     * @return string 
     */
    public function getContactEntreprise()
    {
        return $this->contactEntreprise;
    }

    /**
     * Set adresseEmail
     *
     * @param string $adresseEmail
     * @return Entreprise
     */
    public function setAdresseEmail($adresseEmail)
    {
        $this->adresseEmail = $adresseEmail;

        return $this;
    }

    /**
     * Get adresseEmail
     *
     * @return string 
     */
    public function getAdresseEmail()
    {
        return $this->adresseEmail;
    }
    /**
     * @var \Isefac\Bundle\MainBundle\Entity\Entreprise
     */
    private $entreprise;


    /**
     * Set entreprise
     *
     * @param \Isefac\Bundle\MainBundle\Entity\Entreprise $entreprise
     * @return Entreprise
     */
    public function setEntreprise(\Isefac\Bundle\MainBundle\Entity\Entreprise $entreprise = null)
    {
        $this->entreprise = $entreprise;

        return $this;
    }

    /**
     * Get entreprise
     *
     * @return \Isefac\Bundle\MainBundle\Entity\Entreprise 
     */
    public function getEntreprise()
    {
        return $this->entreprise;
    }
}
