<?php

namespace Misiv;

/**
 * Class which returns the class map definition
 * @package
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'TypeAdresse' => 'Misiv\StructType\TypeAdresse',
            'TypeCotitulaire' => 'Misiv\StructType\TypeCotitulaire',
            'PersonneMorale' => 'Misiv\StructType\PersonneMorale',
            'PersonnePhysique' => 'Misiv\StructType\PersonnePhysique',
            'TypeVN' => 'Misiv\StructType\TypeVN',
            'Communautaire' => 'Misiv\StructType\Communautaire',
            'Nationale' => 'Misiv\StructType\Nationale',
            'Mentions' => 'Misiv\StructType\Mentions',
            'Mention' => 'Misiv\StructType\Mention',
            'TypeCarrossier' => 'Misiv\StructType\TypeCarrossier',
            'InfoImmat' => 'Misiv\StructType\InfoImmat',
            'Reponse' => 'Misiv\StructType\Reponse',
            'Negative' => 'Misiv\StructType\Negative',
            'Positive' => 'Misiv\StructType\Positive',
            'TypeDIVN' => 'Misiv\StructType\TypeDIVN',
            'Acquereur' => 'Misiv\StructType\Acquereur',
            'Cotitulaires' => 'Misiv\StructType\Cotitulaires',
            'TypeVNWW' => 'Misiv\StructType\TypeVNWW',
            'TypeVOWW' => 'Misiv\StructType\TypeVOWW',
            'TypeDIVLN' => 'Misiv\StructType\TypeDIVLN',
            'Locataire' => 'Misiv\StructType\Locataire',
            'Loueur' => 'Misiv\StructType\Loueur',
            'Expedition' => 'Misiv\StructType\Expedition',
            'TypeCTVLO' => 'Misiv\StructType\TypeCTVLO',
            'Titulaire' => 'Misiv\StructType\Titulaire',
            'Vehicule' => 'Misiv\StructType\Vehicule',
            'TypeCTVO' => 'Misiv\StructType\TypeCTVO',
            'TypeDA' => 'Misiv\StructType\TypeDA',
            'TypeDC' => 'Misiv\StructType\TypeDC',
            'TypeDSV' => 'Misiv\StructType\TypeDSV',
            'TypeDAD' => 'Misiv\StructType\TypeDAD',
            'TypeDCD' => 'Misiv\StructType\TypeDCD',
            'TypeDID' => 'Misiv\StructType\TypeDID',
            'TypeECG' => 'Misiv\StructType\TypeECG',
            'TypeECGAUTO' => 'Misiv\StructType\TypeECGAUTO',
            'TypeFUD' => 'Misiv\StructType\TypeFUD',
            'TypeDCAL' => 'Misiv\StructType\TypeDCAL',
            'TypeDemarche' => 'Misiv\StructType\TypeDemarche',
            'InfoImmat_Req' => 'Misiv\StructType\InfoImmat_Req',
            'InfoImmat_Rep' => 'Misiv\StructType\InfoImmat_Rep',
            'Chercher_Req' => 'Misiv\StructType\Chercher_Req',
            'Chercher_Rep' => 'Misiv\StructType\Chercher_Rep',
            'Lot' => 'Misiv\StructType\Lot',
            'Ouvrir_Req' => 'Misiv\StructType\Ouvrir_Req',
            'Ouvrir_Rep' => 'Misiv\StructType\Ouvrir_Rep',
            'Sauver_Req' => 'Misiv\StructType\Sauver_Req',
            'Sauver_Rep' => 'Misiv\StructType\Sauver_Rep',
            'Envoyer_Req' => 'Misiv\StructType\Envoyer_Req',
            'Envoyer_Rep' => 'Misiv\StructType\Envoyer_Rep',
            'TypeIdentification' => 'Misiv\StructType\TypeIdentification',
        );
    }
}
