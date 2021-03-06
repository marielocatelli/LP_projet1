<?php

namespace Projet\ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * enseignement
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Projet\ProjetBundle\Entity\enseignementRepository")
 */
class enseignement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="grp_id", type="integer")
     */
    private $grpId;

    /**
     * @var integer
     *
     * @ORM\Column(name="mod_id", type="integer")
     */
    private $modId;

    /**
     * @var integer
     *
     * @ORM\Column(name="form_id", type="integer")
     */
    private $formId;

	/**
	 * @ORM\ManyToOne(targetEntity="Projet\ProjetBundle\Entity\module")
     * @ORM\JoinColumn(nullable=false)
     */
	
	private $module;
	
	/**
	 * @ORM\ManyToOne(targetEntity="Projet\ProjetBundle\Entity\groupe")
     * @ORM\JoinColumn(nullable=false)
     */
	private $groupe;
    
	
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
     * Set grpId
     *
     * @param integer $grpId
     * @return enseignement
     */
    public function setGrpId($grpId)
    {
        $this->grpId = $grpId;
    
        return $this;
    }

    /**
     * Get grpId
     *
     * @return integer 
     */
    public function getGrpId()
    {
        return $this->grpId;
    }

    /**
     * Set modId
     *
     * @param integer $modId
     * @return enseignement
     */
    public function setModId($modId)
    {
        $this->modId = $modId;
    
        return $this;
    }

    /**
     * Get modId
     *
     * @return integer 
     */
    public function getModId()
    {
        return $this->modId;
    }

    /**
     * Set formId
     *
     * @param integer $formId
     * @return enseignement
     */
    public function setFormId($formId)
    {
        $this->formId = $formId;
    
        return $this;
    }

    /**
     * Get formId
     *
     * @return integer 
     */
    public function getFormId()
    {
        return $this->formId;
    }

    /**
     * Set module
     *
     * @param \Projet\ProjetBundle\Entity\module $module
     * @return enseignement
     */
    public function setModule(\Projet\ProjetBundle\Entity\module $module)
    {
        $this->module = $module;
    
        return $this;
    }

    /**
     * Get module
     *
     * @return \Projet\ProjetBundle\Entity\module 
     */
    public function getModule()
    {
        return $this->module;
    }

    /**
     * Set groupe
     *
     * @param \Projet\ProjetBundle\Entity\groupe $groupe
     * @return enseignement
     */
    public function setGroupe(\Projet\ProjetBundle\Entity\groupe $groupe)
    {
        $this->groupe = $groupe;
    
        return $this;
    }

    /**
     * Get groupe
     *
     * @return \Projet\ProjetBundle\Entity\groupe 
     */
    public function getGroupe()
    {
        return $this->groupe;
    }
}