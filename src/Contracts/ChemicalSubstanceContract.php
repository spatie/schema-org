<?php

namespace Spatie\SchemaOrg\Contracts;

interface ChemicalSubstanceContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function associatedDisease($associatedDisease);

    public function bioChemInteraction($bioChemInteraction);

    public function bioChemSimilarity($bioChemSimilarity);

    public function biologicalRole($biologicalRole);

    public function chemicalComposition($chemicalComposition);

    public function chemicalRole($chemicalRole);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function funding($funding);

    public function hasBioChemEntityPart($hasBioChemEntityPart);

    public function hasMolecularFunction($hasMolecularFunction);

    public function hasRepresentation($hasRepresentation);

    public function identifier($identifier);

    public function image($image);

    public function isEncodedByBioChemEntity($isEncodedByBioChemEntity);

    public function isInvolvedInBiologicalProcess($isInvolvedInBiologicalProcess);

    public function isLocatedInSubcellularLocation($isLocatedInSubcellularLocation);

    public function isPartOfBioChemEntity($isPartOfBioChemEntity);

    public function mainEntityOfPage($mainEntityOfPage);

    public function name($name);

    public function potentialAction($potentialAction);

    public function potentialUse($potentialUse);

    public function sameAs($sameAs);

    public function subjectOf($subjectOf);

    public function taxonomicRange($taxonomicRange);

    public function url($url);
}
