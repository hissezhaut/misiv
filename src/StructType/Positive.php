<?php

namespace Misiv\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Positive StructType
 * @subpackage Structs
 */
class Positive extends AbstractStructBase
{
    /**
     * The VIN
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - maxLength: 17
     * - minLength: 1
     * - pattern: [0-9A-Z]*
     * @var string
     */
    public $VIN;
    /**
     * The Carrosserie
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Carrosserie;
    /**
     * The CarrosserieCG
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $CarrosserieCG;
    /**
     * The CO2
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $CO2;
    /**
     * The ConsoExurb
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var decimal
     */
    public $ConsoExurb;
    /**
     * The ConsoMixte
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var decimal
     */
    public $ConsoMixte;
    /**
     * The ConsoUrb
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var decimal
     */
    public $ConsoUrb;
    /**
     * The Cylindree
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var decimal
     */
    public $Cylindree;
    /**
     * The Couleur
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Couleur;
    /**
     * The NuanceCouleur
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $NuanceCouleur;
    /**
     * The DateMec
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - maxLength: 19
     * - pattern: [0-9]{2}/[0-9]{2}/[0-9]{4}(\s([01][0-9]|2[0123])(:[0-5][0-9]){1,2})?
     * @var string
     */
    public $DateMec;
    /**
     * The DateCG
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - maxLength: 19
     * - pattern: [0-9]{2}/[0-9]{2}/[0-9]{4}(\s([01][0-9]|2[0123])(:[0-5][0-9]){1,2})?
     * @var string
     */
    public $DateCG;
    /**
     * The DateCGPR
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - maxLength: 19
     * - pattern: [0-9]{2}/[0-9]{2}/[0-9]{4}(\s([01][0-9]|2[0123])(:[0-5][0-9]){1,2})?
     * @var string
     */
    public $DateCGPR;
    /**
     * The Depollution
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var decimal
     */
    public $Depollution;
    /**
     * The Empatement
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $Empatement;
    /**
     * The EmpreinteSol
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $EmpreinteSol;
    /**
     * The Energie
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Energie;
    /**
     * The Genre
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Genre;
    /**
     * The GenreCG
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $GenreCG;
    /**
     * The Hauteur
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $Hauteur;
    /**
     * The Largeur
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $Largeur;
    /**
     * The Longueur
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $Longueur;
    /**
     * The Marque
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Marque;
    /**
     * The MarqueCarrosserie
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $MarqueCarrosserie;
    /**
     * The ModeInjection
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ModeInjection;
    /**
     * The Modele
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Modele;
    /**
     * The ModeleEtude
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ModeleEtude;
    /**
     * The ModelePRF
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ModelePRF;
    /**
     * The Mouvement
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Mouvement;
    /**
     * The NSerie
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $NSerie;
    /**
     * The NbCylind
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $NbCylind;
    /**
     * The NbDecibels
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $NbDecibels;
    /**
     * The NbPlacesAss
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $NbPlacesAss;
    /**
     * The NbMains
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $NbMains;
    /**
     * The NbPortes
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $NbPortes;
    /**
     * The NbSoupapes
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $NbSoupapes;
    /**
     * The NbVitesses
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $NbVitesses;
    /**
     * The NbVolumes
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $NbVolumes;
    /**
     * The PoidsVide
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $PoidsVide;
    /**
     * The Propulsion
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Propulsion;
    /**
     * The PTR
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $PTR;
    /**
     * The PuissCh
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $PuissCh;
    /**
     * The PuissFisc
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $PuissFisc;
    /**
     * The RegmDecibels
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $RegmDecibels;
    /**
     * The StatutImmat
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $StatutImmat;
    /**
     * The TPBoiteVit
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $TPBoiteVit;
    /**
     * The TurboCompr
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $TurboCompr;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Type;
    /**
     * The TypeVinCG
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $TypeVinCG;
    /**
     * The Version
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Version;
    /**
     * The VoieAr
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $VoieAr;
    /**
     * The VoieAv
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $VoieAv;
    /**
     * The NumBO
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $NumBO;
    /**
     * The Immatriculation
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * - maxLength: 10
     * - minLength: 7
     * - pattern: ([A-Z]{1,2}(-|\s)?\d{2,3}(-|\s)?[A-Z]{1,2})|(\d{1,4}\s?[A-Z]{2,3}\s?(2[AB]|\d{1,3}))
     * @var string
     */
    public $Immatriculation;
    /**
     * The DateImmat
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - maxLength: 19
     * - pattern: [0-9]{2}/[0-9]{2}/[0-9]{4}(\s([01][0-9]|2[0123])(:[0-5][0-9]){1,2})?
     * @var string
     */
    public $DateImmat;
    /**
     * The NomFic
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $NomFic;
    /**
     * The TaxeRegionale
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $TaxeRegionale;
    /**
     * The TaxeParafiscale
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $TaxeParafiscale;
    /**
     * The TaxeCO2
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $TaxeCO2;
    /**
     * The TaxeSIV
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $TaxeSIV;
    /**
     * The TaxeRedevanceSIV
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $TaxeRedevanceSIV;
    /**
     * The TaxeTotale
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $TaxeTotale;
    /**
     * The Gage
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Gage;
    /**
     * The TaxeMalus
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $TaxeMalus;
    /**
     * The Puissance
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $Puissance;
    /**
     * The PTAC
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $PTAC;
    /**
     * The DateMEC
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - maxLength: 19
     * - pattern: [0-9]{2}/[0-9]{2}/[0-9]{4}(\s([01][0-9]|2[0123])(:[0-5][0-9]){1,2})?
     * @var string
     */
    public $DateMEC;
    /**
     * Constructor method for Positive
     * @uses Positive::setVIN()
     * @uses Positive::setCarrosserie()
     * @uses Positive::setCarrosserieCG()
     * @uses Positive::setCO2()
     * @uses Positive::setConsoExurb()
     * @uses Positive::setConsoMixte()
     * @uses Positive::setConsoUrb()
     * @uses Positive::setCylindree()
     * @uses Positive::setCouleur()
     * @uses Positive::setNuanceCouleur()
     * @uses Positive::setDateMec()
     * @uses Positive::setDateCG()
     * @uses Positive::setDateCGPR()
     * @uses Positive::setDepollution()
     * @uses Positive::setEmpatement()
     * @uses Positive::setEmpreinteSol()
     * @uses Positive::setEnergie()
     * @uses Positive::setGenre()
     * @uses Positive::setGenreCG()
     * @uses Positive::setHauteur()
     * @uses Positive::setLargeur()
     * @uses Positive::setLongueur()
     * @uses Positive::setMarque()
     * @uses Positive::setMarqueCarrosserie()
     * @uses Positive::setModeInjection()
     * @uses Positive::setModele()
     * @uses Positive::setModeleEtude()
     * @uses Positive::setModelePRF()
     * @uses Positive::setMouvement()
     * @uses Positive::setNSerie()
     * @uses Positive::setNbCylind()
     * @uses Positive::setNbDecibels()
     * @uses Positive::setNbPlacesAss()
     * @uses Positive::setNbMains()
     * @uses Positive::setNbPortes()
     * @uses Positive::setNbSoupapes()
     * @uses Positive::setNbVitesses()
     * @uses Positive::setNbVolumes()
     * @uses Positive::setPoidsVide()
     * @uses Positive::setPropulsion()
     * @uses Positive::setPTR()
     * @uses Positive::setPuissCh()
     * @uses Positive::setPuissFisc()
     * @uses Positive::setRegmDecibels()
     * @uses Positive::setStatutImmat()
     * @uses Positive::setTPBoiteVit()
     * @uses Positive::setTurboCompr()
     * @uses Positive::setType()
     * @uses Positive::setTypeVinCG()
     * @uses Positive::setVersion()
     * @uses Positive::setVoieAr()
     * @uses Positive::setVoieAv()
     * @uses Positive::setNumBO()
     * @uses Positive::setImmatriculation()
     * @uses Positive::setDateImmat()
     * @uses Positive::setNomFic()
     * @uses Positive::setTaxeRegionale()
     * @uses Positive::setTaxeParafiscale()
     * @uses Positive::setTaxeCO2()
     * @uses Positive::setTaxeSIV()
     * @uses Positive::setTaxeRedevanceSIV()
     * @uses Positive::setTaxeTotale()
     * @uses Positive::setGage()
     * @uses Positive::setTaxeMalus()
     * @uses Positive::setPuissance()
     * @uses Positive::setPTAC()
     * @uses Positive::setDateMEC_1()
     * @param string $vIN
     * @param string $carrosserie
     * @param string $carrosserieCG
     * @param string $cO2
     * @param decimal $consoExurb
     * @param decimal $consoMixte
     * @param decimal $consoUrb
     * @param decimal $cylindree
     * @param string $couleur
     * @param string $nuanceCouleur
     * @param string $dateMec
     * @param string $dateCG
     * @param string $dateCGPR
     * @param decimal $depollution
     * @param int $empatement
     * @param int $empreinteSol
     * @param string $energie
     * @param string $genre
     * @param string $genreCG
     * @param int $hauteur
     * @param int $largeur
     * @param int $longueur
     * @param string $marque
     * @param string $marqueCarrosserie
     * @param string $modeInjection
     * @param string $modele
     * @param string $modeleEtude
     * @param string $modelePRF
     * @param string $mouvement
     * @param string $nSerie
     * @param int $nbCylind
     * @param int $nbDecibels
     * @param int $nbPlacesAss
     * @param int $nbMains
     * @param int $nbPortes
     * @param int $nbSoupapes
     * @param int $nbVitesses
     * @param int $nbVolumes
     * @param int $poidsVide
     * @param string $propulsion
     * @param int $pTR
     * @param int $puissCh
     * @param int $puissFisc
     * @param int $regmDecibels
     * @param string $statutImmat
     * @param string $tPBoiteVit
     * @param string $turboCompr
     * @param string $type
     * @param string $typeVinCG
     * @param string $version
     * @param int $voieAr
     * @param int $voieAv
     * @param string $numBO
     * @param string $immatriculation
     * @param string $dateImmat
     * @param string $nomFic
     * @param float $taxeRegionale
     * @param float $taxeParafiscale
     * @param float $taxeCO2
     * @param float $taxeSIV
     * @param float $taxeRedevanceSIV
     * @param float $taxeTotale
     * @param string $gage
     * @param float $taxeMalus
     * @param int $puissance
     * @param string $pTAC
     * @param string $dateMEC
     */
    public function __construct($vIN = null, $carrosserie = null, $carrosserieCG = null, $cO2 = null, $consoExurb = null, $consoMixte = null, $consoUrb = null, $cylindree = null, $couleur = null, $nuanceCouleur = null, $dateMec = null, $dateCG = null, $dateCGPR = null, $depollution = null, $empatement = null, $empreinteSol = null, $energie = null, $genre = null, $genreCG = null, $hauteur = null, $largeur = null, $longueur = null, $marque = null, $marqueCarrosserie = null, $modeInjection = null, $modele = null, $modeleEtude = null, $modelePRF = null, $mouvement = null, $nSerie = null, $nbCylind = null, $nbDecibels = null, $nbPlacesAss = null, $nbMains = null, $nbPortes = null, $nbSoupapes = null, $nbVitesses = null, $nbVolumes = null, $poidsVide = null, $propulsion = null, $pTR = null, $puissCh = null, $puissFisc = null, $regmDecibels = null, $statutImmat = null, $tPBoiteVit = null, $turboCompr = null, $type = null, $typeVinCG = null, $version = null, $voieAr = null, $voieAv = null, $numBO = null, $immatriculation = null, $dateImmat = null, $nomFic = null, $taxeRegionale = null, $taxeParafiscale = null, $taxeCO2 = null, $taxeSIV = null, $taxeRedevanceSIV = null, $taxeTotale = null, $gage = null, $taxeMalus = null, $puissance = null, $pTAC = null, $dateMEC = null)
    {
        $this
            ->setVIN($vIN)
            ->setCarrosserie($carrosserie)
            ->setCarrosserieCG($carrosserieCG)
            ->setCO2($cO2)
            ->setConsoExurb($consoExurb)
            ->setConsoMixte($consoMixte)
            ->setConsoUrb($consoUrb)
            ->setCylindree($cylindree)
            ->setCouleur($couleur)
            ->setNuanceCouleur($nuanceCouleur)
            ->setDateMec($dateMec)
            ->setDateCG($dateCG)
            ->setDateCGPR($dateCGPR)
            ->setDepollution($depollution)
            ->setEmpatement($empatement)
            ->setEmpreinteSol($empreinteSol)
            ->setEnergie($energie)
            ->setGenre($genre)
            ->setGenreCG($genreCG)
            ->setHauteur($hauteur)
            ->setLargeur($largeur)
            ->setLongueur($longueur)
            ->setMarque($marque)
            ->setMarqueCarrosserie($marqueCarrosserie)
            ->setModeInjection($modeInjection)
            ->setModele($modele)
            ->setModeleEtude($modeleEtude)
            ->setModelePRF($modelePRF)
            ->setMouvement($mouvement)
            ->setNSerie($nSerie)
            ->setNbCylind($nbCylind)
            ->setNbDecibels($nbDecibels)
            ->setNbPlacesAss($nbPlacesAss)
            ->setNbMains($nbMains)
            ->setNbPortes($nbPortes)
            ->setNbSoupapes($nbSoupapes)
            ->setNbVitesses($nbVitesses)
            ->setNbVolumes($nbVolumes)
            ->setPoidsVide($poidsVide)
            ->setPropulsion($propulsion)
            ->setPTR($pTR)
            ->setPuissCh($puissCh)
            ->setPuissFisc($puissFisc)
            ->setRegmDecibels($regmDecibels)
            ->setStatutImmat($statutImmat)
            ->setTPBoiteVit($tPBoiteVit)
            ->setTurboCompr($turboCompr)
            ->setType($type)
            ->setTypeVinCG($typeVinCG)
            ->setVersion($version)
            ->setVoieAr($voieAr)
            ->setVoieAv($voieAv)
            ->setNumBO($numBO)
            ->setImmatriculation($immatriculation)
            ->setDateImmat($dateImmat)
            ->setNomFic($nomFic)
            ->setTaxeRegionale($taxeRegionale)
            ->setTaxeParafiscale($taxeParafiscale)
            ->setTaxeCO2($taxeCO2)
            ->setTaxeSIV($taxeSIV)
            ->setTaxeRedevanceSIV($taxeRedevanceSIV)
            ->setTaxeTotale($taxeTotale)
            ->setGage($gage)
            ->setTaxeMalus($taxeMalus)
            ->setPuissance($puissance)
            ->setPTAC($pTAC)
            ->setDateMEC_1($dateMEC);
    }
    /**
     * Get VIN value
     * @return string
     */
    public function getVIN()
    {
        return $this->VIN;
    }
    /**
     * Set VIN value
     * @param string $vIN
     * @return \Misiv\StructType\Positive
     */
    public function setVIN($vIN = null)
    {
        $this->VIN = $vIN;
        return $this;
    }
    /**
     * Get Carrosserie value
     * @return string
     */
    public function getCarrosserie()
    {
        return $this->Carrosserie;
    }
    /**
     * Set Carrosserie value
     * @param string $carrosserie
     * @return \Misiv\StructType\Positive
     */
    public function setCarrosserie($carrosserie = null)
    {
        $this->Carrosserie = $carrosserie;
        return $this;
    }
    /**
     * Get CarrosserieCG value
     * @return string
     */
    public function getCarrosserieCG()
    {
        return $this->CarrosserieCG;
    }
    /**
     * Set CarrosserieCG value
     * @param string $carrosserieCG
     * @return \Misiv\StructType\Positive
     */
    public function setCarrosserieCG($carrosserieCG = null)
    {
        $this->CarrosserieCG = $carrosserieCG;
        return $this;
    }
    /**
     * Get CO2 value
     * @return string
     */
    public function getCO2()
    {
        return $this->CO2;
    }
    /**
     * Set CO2 value
     * @param string $cO2
     * @return \Misiv\StructType\Positive
     */
    public function setCO2($cO2 = null)
    {
        $this->CO2 = $cO2;
        return $this;
    }
    /**
     * Get ConsoExurb value
     * @return decimal
     */
    public function getConsoExurb()
    {
        return $this->ConsoExurb;
    }
    /**
     * Set ConsoExurb value
     * @param decimal $consoExurb
     * @return \Misiv\StructType\Positive
     */
    public function setConsoExurb($consoExurb = null)
    {
        $this->ConsoExurb = $consoExurb;
        return $this;
    }
    /**
     * Get ConsoMixte value
     * @return decimal
     */
    public function getConsoMixte()
    {
        return $this->ConsoMixte;
    }
    /**
     * Set ConsoMixte value
     * @param decimal $consoMixte
     * @return \Misiv\StructType\Positive
     */
    public function setConsoMixte($consoMixte = null)
    {
        $this->ConsoMixte = $consoMixte;
        return $this;
    }
    /**
     * Get ConsoUrb value
     * @return decimal
     */
    public function getConsoUrb()
    {
        return $this->ConsoUrb;
    }
    /**
     * Set ConsoUrb value
     * @param decimal $consoUrb
     * @return \Misiv\StructType\Positive
     */
    public function setConsoUrb($consoUrb = null)
    {
        $this->ConsoUrb = $consoUrb;
        return $this;
    }
    /**
     * Get Cylindree value
     * @return decimal
     */
    public function getCylindree()
    {
        return $this->Cylindree;
    }
    /**
     * Set Cylindree value
     * @param decimal $cylindree
     * @return \Misiv\StructType\Positive
     */
    public function setCylindree($cylindree = null)
    {
        $this->Cylindree = $cylindree;
        return $this;
    }
    /**
     * Get Couleur value
     * @return string
     */
    public function getCouleur()
    {
        return $this->Couleur;
    }
    /**
     * Set Couleur value
     * @param string $couleur
     * @return \Misiv\StructType\Positive
     */
    public function setCouleur($couleur = null)
    {
        $this->Couleur = $couleur;
        return $this;
    }
    /**
     * Get NuanceCouleur value
     * @return string
     */
    public function getNuanceCouleur()
    {
        return $this->NuanceCouleur;
    }
    /**
     * Set NuanceCouleur value
     * @param string $nuanceCouleur
     * @return \Misiv\StructType\Positive
     */
    public function setNuanceCouleur($nuanceCouleur = null)
    {
        $this->NuanceCouleur = $nuanceCouleur;
        return $this;
    }
    /**
     * Get DateMec value
     * @return string
     */
    public function getDateMec()
    {
        return $this->DateMec;
    }
    /**
     * Set DateMec value
     * @param string $dateMec
     * @return \Misiv\StructType\Positive
     */
    public function setDateMec($dateMec = null)
    {
        $this->DateMec = $dateMec;
        return $this;
    }
    /**
     * Get DateCG value
     * @return string
     */
    public function getDateCG()
    {
        return $this->DateCG;
    }
    /**
     * Set DateCG value
     * @param string $dateCG
     * @return \Misiv\StructType\Positive
     */
    public function setDateCG($dateCG = null)
    {
        $this->DateCG = $dateCG;
        return $this;
    }
    /**
     * Get DateCGPR value
     * @return string
     */
    public function getDateCGPR()
    {
        return $this->DateCGPR;
    }
    /**
     * Set DateCGPR value
     * @param string $dateCGPR
     * @return \Misiv\StructType\Positive
     */
    public function setDateCGPR($dateCGPR = null)
    {
        $this->DateCGPR = $dateCGPR;
        return $this;
    }
    /**
     * Get Depollution value
     * @return decimal
     */
    public function getDepollution()
    {
        return $this->Depollution;
    }
    /**
     * Set Depollution value
     * @param decimal $depollution
     * @return \Misiv\StructType\Positive
     */
    public function setDepollution($depollution = null)
    {
        $this->Depollution = $depollution;
        return $this;
    }
    /**
     * Get Empatement value
     * @return int
     */
    public function getEmpatement()
    {
        return $this->Empatement;
    }
    /**
     * Set Empatement value
     * @param int $empatement
     * @return \Misiv\StructType\Positive
     */
    public function setEmpatement($empatement = null)
    {
        $this->Empatement = $empatement;
        return $this;
    }
    /**
     * Get EmpreinteSol value
     * @return int
     */
    public function getEmpreinteSol()
    {
        return $this->EmpreinteSol;
    }
    /**
     * Set EmpreinteSol value
     * @param int $empreinteSol
     * @return \Misiv\StructType\Positive
     */
    public function setEmpreinteSol($empreinteSol = null)
    {
        $this->EmpreinteSol = $empreinteSol;
        return $this;
    }
    /**
     * Get Energie value
     * @return string
     */
    public function getEnergie()
    {
        return $this->Energie;
    }
    /**
     * Set Energie value
     * @param string $energie
     * @return \Misiv\StructType\Positive
     */
    public function setEnergie($energie = null)
    {
        $this->Energie = $energie;
        return $this;
    }
    /**
     * Get Genre value
     * @return string
     */
    public function getGenre()
    {
        return $this->Genre;
    }
    /**
     * Set Genre value
     * @param string $genre
     * @return \Misiv\StructType\Positive
     */
    public function setGenre($genre = null)
    {
        $this->Genre = $genre;
        return $this;
    }
    /**
     * Get GenreCG value
     * @return string
     */
    public function getGenreCG()
    {
        return $this->GenreCG;
    }
    /**
     * Set GenreCG value
     * @param string $genreCG
     * @return \Misiv\StructType\Positive
     */
    public function setGenreCG($genreCG = null)
    {
        $this->GenreCG = $genreCG;
        return $this;
    }
    /**
     * Get Hauteur value
     * @return int
     */
    public function getHauteur()
    {
        return $this->Hauteur;
    }
    /**
     * Set Hauteur value
     * @param int $hauteur
     * @return \Misiv\StructType\Positive
     */
    public function setHauteur($hauteur = null)
    {
        $this->Hauteur = $hauteur;
        return $this;
    }
    /**
     * Get Largeur value
     * @return int
     */
    public function getLargeur()
    {
        return $this->Largeur;
    }
    /**
     * Set Largeur value
     * @param int $largeur
     * @return \Misiv\StructType\Positive
     */
    public function setLargeur($largeur = null)
    {
        $this->Largeur = $largeur;
        return $this;
    }
    /**
     * Get Longueur value
     * @return int
     */
    public function getLongueur()
    {
        return $this->Longueur;
    }
    /**
     * Set Longueur value
     * @param int $longueur
     * @return \Misiv\StructType\Positive
     */
    public function setLongueur($longueur = null)
    {
        $this->Longueur = $longueur;
        return $this;
    }
    /**
     * Get Marque value
     * @return string
     */
    public function getMarque()
    {
        return $this->Marque;
    }
    /**
     * Set Marque value
     * @param string $marque
     * @return \Misiv\StructType\Positive
     */
    public function setMarque($marque = null)
    {
        $this->Marque = $marque;
        return $this;
    }
    /**
     * Get MarqueCarrosserie value
     * @return string
     */
    public function getMarqueCarrosserie()
    {
        return $this->MarqueCarrosserie;
    }
    /**
     * Set MarqueCarrosserie value
     * @param string $marqueCarrosserie
     * @return \Misiv\StructType\Positive
     */
    public function setMarqueCarrosserie($marqueCarrosserie = null)
    {
        $this->MarqueCarrosserie = $marqueCarrosserie;
        return $this;
    }
    /**
     * Get ModeInjection value
     * @return string
     */
    public function getModeInjection()
    {
        return $this->ModeInjection;
    }
    /**
     * Set ModeInjection value
     * @param string $modeInjection
     * @return \Misiv\StructType\Positive
     */
    public function setModeInjection($modeInjection = null)
    {
        $this->ModeInjection = $modeInjection;
        return $this;
    }
    /**
     * Get Modele value
     * @return string
     */
    public function getModele()
    {
        return $this->Modele;
    }
    /**
     * Set Modele value
     * @param string $modele
     * @return \Misiv\StructType\Positive
     */
    public function setModele($modele = null)
    {
        $this->Modele = $modele;
        return $this;
    }
    /**
     * Get ModeleEtude value
     * @return string
     */
    public function getModeleEtude()
    {
        return $this->ModeleEtude;
    }
    /**
     * Set ModeleEtude value
     * @param string $modeleEtude
     * @return \Misiv\StructType\Positive
     */
    public function setModeleEtude($modeleEtude = null)
    {
        $this->ModeleEtude = $modeleEtude;
        return $this;
    }
    /**
     * Get ModelePRF value
     * @return string
     */
    public function getModelePRF()
    {
        return $this->ModelePRF;
    }
    /**
     * Set ModelePRF value
     * @param string $modelePRF
     * @return \Misiv\StructType\Positive
     */
    public function setModelePRF($modelePRF = null)
    {
        $this->ModelePRF = $modelePRF;
        return $this;
    }
    /**
     * Get Mouvement value
     * @return string
     */
    public function getMouvement()
    {
        return $this->Mouvement;
    }
    /**
     * Set Mouvement value
     * @param string $mouvement
     * @return \Misiv\StructType\Positive
     */
    public function setMouvement($mouvement = null)
    {
        $this->Mouvement = $mouvement;
        return $this;
    }
    /**
     * Get NSerie value
     * @return string
     */
    public function getNSerie()
    {
        return $this->NSerie;
    }
    /**
     * Set NSerie value
     * @param string $nSerie
     * @return \Misiv\StructType\Positive
     */
    public function setNSerie($nSerie = null)
    {
        $this->NSerie = $nSerie;
        return $this;
    }
    /**
     * Get NbCylind value
     * @return int
     */
    public function getNbCylind()
    {
        return $this->NbCylind;
    }
    /**
     * Set NbCylind value
     * @param int $nbCylind
     * @return \Misiv\StructType\Positive
     */
    public function setNbCylind($nbCylind = null)
    {
        $this->NbCylind = $nbCylind;
        return $this;
    }
    /**
     * Get NbDecibels value
     * @return int
     */
    public function getNbDecibels()
    {
        return $this->NbDecibels;
    }
    /**
     * Set NbDecibels value
     * @param int $nbDecibels
     * @return \Misiv\StructType\Positive
     */
    public function setNbDecibels($nbDecibels = null)
    {
        $this->NbDecibels = $nbDecibels;
        return $this;
    }
    /**
     * Get NbPlacesAss value
     * @return int
     */
    public function getNbPlacesAss()
    {
        return $this->NbPlacesAss;
    }
    /**
     * Set NbPlacesAss value
     * @param int $nbPlacesAss
     * @return \Misiv\StructType\Positive
     */
    public function setNbPlacesAss($nbPlacesAss = null)
    {
        $this->NbPlacesAss = $nbPlacesAss;
        return $this;
    }
    /**
     * Get NbMains value
     * @return int
     */
    public function getNbMains()
    {
        return $this->NbMains;
    }
    /**
     * Set NbMains value
     * @param int $nbMains
     * @return \Misiv\StructType\Positive
     */
    public function setNbMains($nbMains = null)
    {
        $this->NbMains = $nbMains;
        return $this;
    }
    /**
     * Get NbPortes value
     * @return int
     */
    public function getNbPortes()
    {
        return $this->NbPortes;
    }
    /**
     * Set NbPortes value
     * @param int $nbPortes
     * @return \Misiv\StructType\Positive
     */
    public function setNbPortes($nbPortes = null)
    {
        $this->NbPortes = $nbPortes;
        return $this;
    }
    /**
     * Get NbSoupapes value
     * @return int
     */
    public function getNbSoupapes()
    {
        return $this->NbSoupapes;
    }
    /**
     * Set NbSoupapes value
     * @param int $nbSoupapes
     * @return \Misiv\StructType\Positive
     */
    public function setNbSoupapes($nbSoupapes = null)
    {
        $this->NbSoupapes = $nbSoupapes;
        return $this;
    }
    /**
     * Get NbVitesses value
     * @return int
     */
    public function getNbVitesses()
    {
        return $this->NbVitesses;
    }
    /**
     * Set NbVitesses value
     * @param int $nbVitesses
     * @return \Misiv\StructType\Positive
     */
    public function setNbVitesses($nbVitesses = null)
    {
        $this->NbVitesses = $nbVitesses;
        return $this;
    }
    /**
     * Get NbVolumes value
     * @return int
     */
    public function getNbVolumes()
    {
        return $this->NbVolumes;
    }
    /**
     * Set NbVolumes value
     * @param int $nbVolumes
     * @return \Misiv\StructType\Positive
     */
    public function setNbVolumes($nbVolumes = null)
    {
        $this->NbVolumes = $nbVolumes;
        return $this;
    }
    /**
     * Get PoidsVide value
     * @return int
     */
    public function getPoidsVide()
    {
        return $this->PoidsVide;
    }
    /**
     * Set PoidsVide value
     * @param int $poidsVide
     * @return \Misiv\StructType\Positive
     */
    public function setPoidsVide($poidsVide = null)
    {
        $this->PoidsVide = $poidsVide;
        return $this;
    }
    /**
     * Get Propulsion value
     * @return string
     */
    public function getPropulsion()
    {
        return $this->Propulsion;
    }
    /**
     * Set Propulsion value
     * @param string $propulsion
     * @return \Misiv\StructType\Positive
     */
    public function setPropulsion($propulsion = null)
    {
        $this->Propulsion = $propulsion;
        return $this;
    }
    /**
     * Get PTR value
     * @return int
     */
    public function getPTR()
    {
        return $this->PTR;
    }
    /**
     * Set PTR value
     * @param int $pTR
     * @return \Misiv\StructType\Positive
     */
    public function setPTR($pTR = null)
    {
        $this->PTR = $pTR;
        return $this;
    }
    /**
     * Get PuissCh value
     * @return int
     */
    public function getPuissCh()
    {
        return $this->PuissCh;
    }
    /**
     * Set PuissCh value
     * @param int $puissCh
     * @return \Misiv\StructType\Positive
     */
    public function setPuissCh($puissCh = null)
    {
        $this->PuissCh = $puissCh;
        return $this;
    }
    /**
     * Get PuissFisc value
     * @return int
     */
    public function getPuissFisc()
    {
        return $this->PuissFisc;
    }
    /**
     * Set PuissFisc value
     * @param int $puissFisc
     * @return \Misiv\StructType\Positive
     */
    public function setPuissFisc($puissFisc = null)
    {
        $this->PuissFisc = $puissFisc;
        return $this;
    }
    /**
     * Get RegmDecibels value
     * @return int
     */
    public function getRegmDecibels()
    {
        return $this->RegmDecibels;
    }
    /**
     * Set RegmDecibels value
     * @param int $regmDecibels
     * @return \Misiv\StructType\Positive
     */
    public function setRegmDecibels($regmDecibels = null)
    {
        $this->RegmDecibels = $regmDecibels;
        return $this;
    }
    /**
     * Get StatutImmat value
     * @return string
     */
    public function getStatutImmat()
    {
        return $this->StatutImmat;
    }
    /**
     * Set StatutImmat value
     * @param string $statutImmat
     * @return \Misiv\StructType\Positive
     */
    public function setStatutImmat($statutImmat = null)
    {
        $this->StatutImmat = $statutImmat;
        return $this;
    }
    /**
     * Get TPBoiteVit value
     * @return string
     */
    public function getTPBoiteVit()
    {
        return $this->TPBoiteVit;
    }
    /**
     * Set TPBoiteVit value
     * @param string $tPBoiteVit
     * @return \Misiv\StructType\Positive
     */
    public function setTPBoiteVit($tPBoiteVit = null)
    {
        $this->TPBoiteVit = $tPBoiteVit;
        return $this;
    }
    /**
     * Get TurboCompr value
     * @return string
     */
    public function getTurboCompr()
    {
        return $this->TurboCompr;
    }
    /**
     * Set TurboCompr value
     * @param string $turboCompr
     * @return \Misiv\StructType\Positive
     */
    public function setTurboCompr($turboCompr = null)
    {
        $this->TurboCompr = $turboCompr;
        return $this;
    }
    /**
     * Get Type value
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Misiv\StructType\Positive
     */
    public function setType($type = null)
    {
        $this->Type = $type;
        return $this;
    }
    /**
     * Get TypeVinCG value
     * @return string
     */
    public function getTypeVinCG()
    {
        return $this->TypeVinCG;
    }
    /**
     * Set TypeVinCG value
     * @param string $typeVinCG
     * @return \Misiv\StructType\Positive
     */
    public function setTypeVinCG($typeVinCG = null)
    {
        $this->TypeVinCG = $typeVinCG;
        return $this;
    }
    /**
     * Get Version value
     * @return string
     */
    public function getVersion()
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param string $version
     * @return \Misiv\StructType\Positive
     */
    public function setVersion($version = null)
    {
        $this->Version = $version;
        return $this;
    }
    /**
     * Get VoieAr value
     * @return int
     */
    public function getVoieAr()
    {
        return $this->VoieAr;
    }
    /**
     * Set VoieAr value
     * @param int $voieAr
     * @return \Misiv\StructType\Positive
     */
    public function setVoieAr($voieAr = null)
    {
        $this->VoieAr = $voieAr;
        return $this;
    }
    /**
     * Get VoieAv value
     * @return int
     */
    public function getVoieAv()
    {
        return $this->VoieAv;
    }
    /**
     * Set VoieAv value
     * @param int $voieAv
     * @return \Misiv\StructType\Positive
     */
    public function setVoieAv($voieAv = null)
    {
        $this->VoieAv = $voieAv;
        return $this;
    }
    /**
     * Get NumBO value
     * @return string
     */
    public function getNumBO()
    {
        return $this->NumBO;
    }
    /**
     * Set NumBO value
     * @param string $numBO
     * @return \Misiv\StructType\Positive
     */
    public function setNumBO($numBO = null)
    {
        $this->NumBO = $numBO;
        return $this;
    }
    /**
     * Get Immatriculation value
     * @return string
     */
    public function getImmatriculation()
    {
        return $this->Immatriculation;
    }
    /**
     * Set Immatriculation value
     * @param string $immatriculation
     * @return \Misiv\StructType\Positive
     */
    public function setImmatriculation($immatriculation = null)
    {
        $this->Immatriculation = $immatriculation;
        return $this;
    }
    /**
     * Get DateImmat value
     * @return string
     */
    public function getDateImmat()
    {
        return $this->DateImmat;
    }
    /**
     * Set DateImmat value
     * @param string $dateImmat
     * @return \Misiv\StructType\Positive
     */
    public function setDateImmat($dateImmat = null)
    {
        $this->DateImmat = $dateImmat;
        return $this;
    }
    /**
     * Get NomFic value
     * @return string
     */
    public function getNomFic()
    {
        return $this->NomFic;
    }
    /**
     * Set NomFic value
     * @param string $nomFic
     * @return \Misiv\StructType\Positive
     */
    public function setNomFic($nomFic = null)
    {
        $this->NomFic = $nomFic;
        return $this;
    }
    /**
     * Get TaxeRegionale value
     * @return float
     */
    public function getTaxeRegionale()
    {
        return $this->TaxeRegionale;
    }
    /**
     * Set TaxeRegionale value
     * @param float $taxeRegionale
     * @return \Misiv\StructType\Positive
     */
    public function setTaxeRegionale($taxeRegionale = null)
    {
        $this->TaxeRegionale = $taxeRegionale;
        return $this;
    }
    /**
     * Get TaxeParafiscale value
     * @return float
     */
    public function getTaxeParafiscale()
    {
        return $this->TaxeParafiscale;
    }
    /**
     * Set TaxeParafiscale value
     * @param float $taxeParafiscale
     * @return \Misiv\StructType\Positive
     */
    public function setTaxeParafiscale($taxeParafiscale = null)
    {
        $this->TaxeParafiscale = $taxeParafiscale;
        return $this;
    }
    /**
     * Get TaxeCO2 value
     * @return float
     */
    public function getTaxeCO2()
    {
        return $this->TaxeCO2;
    }
    /**
     * Set TaxeCO2 value
     * @param float $taxeCO2
     * @return \Misiv\StructType\Positive
     */
    public function setTaxeCO2($taxeCO2 = null)
    {
        $this->TaxeCO2 = $taxeCO2;
        return $this;
    }
    /**
     * Get TaxeSIV value
     * @return float
     */
    public function getTaxeSIV()
    {
        return $this->TaxeSIV;
    }
    /**
     * Set TaxeSIV value
     * @param float $taxeSIV
     * @return \Misiv\StructType\Positive
     */
    public function setTaxeSIV($taxeSIV = null)
    {
        $this->TaxeSIV = $taxeSIV;
        return $this;
    }
    /**
     * Get TaxeRedevanceSIV value
     * @return float
     */
    public function getTaxeRedevanceSIV()
    {
        return $this->TaxeRedevanceSIV;
    }
    /**
     * Set TaxeRedevanceSIV value
     * @param float $taxeRedevanceSIV
     * @return \Misiv\StructType\Positive
     */
    public function setTaxeRedevanceSIV($taxeRedevanceSIV = null)
    {
        $this->TaxeRedevanceSIV = $taxeRedevanceSIV;
        return $this;
    }
    /**
     * Get TaxeTotale value
     * @return float
     */
    public function getTaxeTotale()
    {
        return $this->TaxeTotale;
    }
    /**
     * Set TaxeTotale value
     * @param float $taxeTotale
     * @return \Misiv\StructType\Positive
     */
    public function setTaxeTotale($taxeTotale = null)
    {
        $this->TaxeTotale = $taxeTotale;
        return $this;
    }
    /**
     * Get Gage value
     * @return string
     */
    public function getGage()
    {
        return $this->Gage;
    }
    /**
     * Set Gage value
     * @param string $gage
     * @return \Misiv\StructType\Positive
     */
    public function setGage($gage = null)
    {
        $this->Gage = $gage;
        return $this;
    }
    /**
     * Get TaxeMalus value
     * @return float
     */
    public function getTaxeMalus()
    {
        return $this->TaxeMalus;
    }
    /**
     * Set TaxeMalus value
     * @param float $taxeMalus
     * @return \Misiv\StructType\Positive
     */
    public function setTaxeMalus($taxeMalus = null)
    {
        $this->TaxeMalus = $taxeMalus;
        return $this;
    }
    /**
     * Get Puissance value
     * @return int
     */
    public function getPuissance()
    {
        return $this->Puissance;
    }
    /**
     * Set Puissance value
     * @param int $puissance
     * @return \Misiv\StructType\Positive
     */
    public function setPuissance($puissance = null)
    {
        $this->Puissance = $puissance;
        return $this;
    }
    /**
     * Get PTAC value
     * @return string
     */
    public function getPTAC()
    {
        return $this->PTAC;
    }
    /**
     * Set PTAC value
     * @uses \Misiv\EnumType\TypeECGPTAC::valueIsValid()
     * @uses \Misiv\EnumType\TypeECGPTAC::getValidValues()
     * @param string $pTAC
     * @return \Misiv\StructType\Positive
     */
    public function setPTAC($pTAC = null)
    {
        if (!\Misiv\EnumType\TypeECGPTAC::valueIsValid($pTAC)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $pTAC, implode(', ', \Misiv\EnumType\TypeECGPTAC::getValidValues())), __LINE__);
        }
        $this->PTAC = $pTAC;
        return $this;
    }
    /**
     * Get dateMEC_1 value
     * @return dateMEC_1
     */
    public function getDateMEC_1()
    {
        return $this->DateMEC;
    }
    /**
     * Set DateMEC value
     * @param string $dateMEC
     * @return \Misiv\StructType\Positive
     */
    public function setDateMEC_1($dateMEC = null)
    {
        $this->DateMEC = $dateMEC;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Misiv\StructType\Positive
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
