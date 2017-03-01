<?php

namespace Misiv\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TypeAdresse StructType
 * @subpackage Structs
 */
class TypeAdresse extends AbstractStructBase
{
    /**
     * The TypeVoie
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $TypeVoie;
    /**
     * The NomVoie
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $NomVoie;
    /**
     * The CodePostal
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $CodePostal;
    /**
     * The Ville
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Ville;
    /**
     * The Numero
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $Numero;
    /**
     * The ExtensionIndice
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ExtensionIndice;
    /**
     * The LieuDit
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $LieuDit;
    /**
     * The EtageEscAppt
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $EtageEscAppt;
    /**
     * The Complement
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Complement;
    /**
     * The BoitePostale
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BoitePostale;
    /**
     * The Pays
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Pays;
    /**
     * Constructor method for TypeAdresse
     * @uses TypeAdresse::setTypeVoie()
     * @uses TypeAdresse::setNomVoie()
     * @uses TypeAdresse::setCodePostal()
     * @uses TypeAdresse::setVille()
     * @uses TypeAdresse::setNumero()
     * @uses TypeAdresse::setExtensionIndice()
     * @uses TypeAdresse::setLieuDit()
     * @uses TypeAdresse::setEtageEscAppt()
     * @uses TypeAdresse::setComplement()
     * @uses TypeAdresse::setBoitePostale()
     * @uses TypeAdresse::setPays()
     * @param string $typeVoie
     * @param string $nomVoie
     * @param string $codePostal
     * @param string $ville
     * @param int $numero
     * @param string $extensionIndice
     * @param string $lieuDit
     * @param string $etageEscAppt
     * @param string $complement
     * @param string $boitePostale
     * @param string $pays
     */
    public function __construct($typeVoie = null, $nomVoie = null, $codePostal = null, $ville = null, $numero = null, $extensionIndice = null, $lieuDit = null, $etageEscAppt = null, $complement = null, $boitePostale = null, $pays = null)
    {
        $this
            ->setTypeVoie($typeVoie)
            ->setNomVoie($nomVoie)
            ->setCodePostal($codePostal)
            ->setVille($ville)
            ->setNumero($numero)
            ->setExtensionIndice($extensionIndice)
            ->setLieuDit($lieuDit)
            ->setEtageEscAppt($etageEscAppt)
            ->setComplement($complement)
            ->setBoitePostale($boitePostale)
            ->setPays($pays);
    }
    /**
     * Get TypeVoie value
     * @return string
     */
    public function getTypeVoie()
    {
        return $this->TypeVoie;
    }
    /**
     * Set TypeVoie value
     * @uses \Misiv\EnumType\TypeVoie::valueIsValid()
     * @uses \Misiv\EnumType\TypeVoie::getValidValues()
     * @param string $typeVoie
     * @return \Misiv\StructType\TypeAdresse
     */
    public function setTypeVoie($typeVoie = null)
    {
        if (!\Misiv\EnumType\TypeVoie::valueIsValid($typeVoie)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $typeVoie, implode(', ', \Misiv\EnumType\TypeVoie::getValidValues())), __LINE__);
        }
        $this->TypeVoie = $typeVoie;
        return $this;
    }
    /**
     * Get NomVoie value
     * @return string
     */
    public function getNomVoie()
    {
        return $this->NomVoie;
    }
    /**
     * Set NomVoie value
     * @param string $nomVoie
     * @return \Misiv\StructType\TypeAdresse
     */
    public function setNomVoie($nomVoie = null)
    {
        $this->NomVoie = $nomVoie;
        return $this;
    }
    /**
     * Get CodePostal value
     * @return string
     */
    public function getCodePostal()
    {
        return $this->CodePostal;
    }
    /**
     * Set CodePostal value
     * @param string $codePostal
     * @return \Misiv\StructType\TypeAdresse
     */
    public function setCodePostal($codePostal = null)
    {
        $this->CodePostal = $codePostal;
        return $this;
    }
    /**
     * Get Ville value
     * @return string
     */
    public function getVille()
    {
        return $this->Ville;
    }
    /**
     * Set Ville value
     * @param string $ville
     * @return \Misiv\StructType\TypeAdresse
     */
    public function setVille($ville = null)
    {
        $this->Ville = $ville;
        return $this;
    }
    /**
     * Get Numero value
     * @return int|null
     */
    public function getNumero()
    {
        return $this->Numero;
    }
    /**
     * Set Numero value
     * @param int $numero
     * @return \Misiv\StructType\TypeAdresse
     */
    public function setNumero($numero = null)
    {
        $this->Numero = $numero;
        return $this;
    }
    /**
     * Get ExtensionIndice value
     * @return string|null
     */
    public function getExtensionIndice()
    {
        return $this->ExtensionIndice;
    }
    /**
     * Set ExtensionIndice value
     * @param string $extensionIndice
     * @return \Misiv\StructType\TypeAdresse
     */
    public function setExtensionIndice($extensionIndice = null)
    {
        $this->ExtensionIndice = $extensionIndice;
        return $this;
    }
    /**
     * Get LieuDit value
     * @return string|null
     */
    public function getLieuDit()
    {
        return $this->LieuDit;
    }
    /**
     * Set LieuDit value
     * @param string $lieuDit
     * @return \Misiv\StructType\TypeAdresse
     */
    public function setLieuDit($lieuDit = null)
    {
        $this->LieuDit = $lieuDit;
        return $this;
    }
    /**
     * Get EtageEscAppt value
     * @return string|null
     */
    public function getEtageEscAppt()
    {
        return $this->EtageEscAppt;
    }
    /**
     * Set EtageEscAppt value
     * @param string $etageEscAppt
     * @return \Misiv\StructType\TypeAdresse
     */
    public function setEtageEscAppt($etageEscAppt = null)
    {
        $this->EtageEscAppt = $etageEscAppt;
        return $this;
    }
    /**
     * Get Complement value
     * @return string|null
     */
    public function getComplement()
    {
        return $this->Complement;
    }
    /**
     * Set Complement value
     * @param string $complement
     * @return \Misiv\StructType\TypeAdresse
     */
    public function setComplement($complement = null)
    {
        $this->Complement = $complement;
        return $this;
    }
    /**
     * Get BoitePostale value
     * @return string|null
     */
    public function getBoitePostale()
    {
        return $this->BoitePostale;
    }
    /**
     * Set BoitePostale value
     * @param string $boitePostale
     * @return \Misiv\StructType\TypeAdresse
     */
    public function setBoitePostale($boitePostale = null)
    {
        $this->BoitePostale = $boitePostale;
        return $this;
    }
    /**
     * Get Pays value
     * @return string|null
     */
    public function getPays()
    {
        return $this->Pays;
    }
    /**
     * Set Pays value
     * @param string $pays
     * @return \Misiv\StructType\TypeAdresse
     */
    public function setPays($pays = null)
    {
        $this->Pays = $pays;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Misiv\StructType\TypeAdresse
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
