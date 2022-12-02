<?php

namespace Spatie\SchemaOrg;

use Spatie\SchemaOrg\Contracts\BioChemEntityContract;
use Spatie\SchemaOrg\Contracts\ProteinContract;
use Spatie\SchemaOrg\Contracts\ThingContract;

/**
 * Protein is here used in its widest possible definition, as classes of amino
 * acid based molecules. Amyloid-beta Protein in human (UniProt P05067),
 * eukaryota (e.g. an OrthoDB group) or even a single molecule that one can
 * point to are all of type schema:Protein. A protein can thus be a subclass of
 * another protein, e.g. schema:Protein as a UniProt record can have multiple
 * isoforms inside it which would also be schema:Protein. They can be imagined,
 * synthetic, hypothetical or naturally occurring.
 *
 * @see https://schema.org/Protein
 * @see https://pending.schema.org
 *
 */
class Protein extends BaseType implements ProteinContract, BioChemEntityContract, ThingContract
{
    /**
     * An additional type for the item, typically used for adding more specific
     * types from external vocabularies in microdata syntax. This is a
     * relationship between something and a class that the thing is in. In RDFa
     * syntax, it is better to use the native RDFa syntax - the 'typeof'
     * attribute - for multiple types. Schema.org tools may have only weaker
     * understanding of extra types, in particular those defined externally.
     *
     * @param string|string[] $additionalType
     *
     * @return static
     *
     * @see https://schema.org/additionalType
     */
    public function additionalType($additionalType)
    {
        return $this->setProperty('additionalType', $additionalType);
    }

    /**
     * An alias for the item.
     *
     * @param string|string[] $alternateName
     *
     * @return static
     *
     * @see https://schema.org/alternateName
     */
    public function alternateName($alternateName)
    {
        return $this->setProperty('alternateName', $alternateName);
    }

    /**
     * Disease associated to this BioChemEntity. Such disease can be a
     * MedicalCondition or a URL. If you want to add an evidence supporting the
     * association, please use PropertyValue.
     *
     * @param \Spatie\SchemaOrg\Contracts\MedicalConditionContract|\Spatie\SchemaOrg\Contracts\MedicalConditionContract[]|\Spatie\SchemaOrg\Contracts\PropertyValueContract|\Spatie\SchemaOrg\Contracts\PropertyValueContract[]|string|string[] $associatedDisease
     *
     * @return static
     *
     * @see https://schema.org/associatedDisease
     * @see https://pending.schema.org
     */
    public function associatedDisease($associatedDisease)
    {
        return $this->setProperty('associatedDisease', $associatedDisease);
    }

    /**
     * A BioChemEntity that is known to interact with this item.
     *
     * @param \Spatie\SchemaOrg\Contracts\BioChemEntityContract|\Spatie\SchemaOrg\Contracts\BioChemEntityContract[] $bioChemInteraction
     *
     * @return static
     *
     * @see https://schema.org/bioChemInteraction
     * @see https://pending.schema.org
     */
    public function bioChemInteraction($bioChemInteraction)
    {
        return $this->setProperty('bioChemInteraction', $bioChemInteraction);
    }

    /**
     * A similar BioChemEntity, e.g., obtained by fingerprint similarity
     * algorithms.
     *
     * @param \Spatie\SchemaOrg\Contracts\BioChemEntityContract|\Spatie\SchemaOrg\Contracts\BioChemEntityContract[] $bioChemSimilarity
     *
     * @return static
     *
     * @see https://schema.org/bioChemSimilarity
     * @see https://pending.schema.org
     */
    public function bioChemSimilarity($bioChemSimilarity)
    {
        return $this->setProperty('bioChemSimilarity', $bioChemSimilarity);
    }

    /**
     * A role played by the BioChemEntity within a biological context.
     *
     * @param \Spatie\SchemaOrg\Contracts\DefinedTermContract|\Spatie\SchemaOrg\Contracts\DefinedTermContract[] $biologicalRole
     *
     * @return static
     *
     * @see https://schema.org/biologicalRole
     * @see https://pending.schema.org
     */
    public function biologicalRole($biologicalRole)
    {
        return $this->setProperty('biologicalRole', $biologicalRole);
    }

    /**
     * A description of the item.
     *
     * @param string|string[] $description
     *
     * @return static
     *
     * @see https://schema.org/description
     */
    public function description($description)
    {
        return $this->setProperty('description', $description);
    }

    /**
     * A sub property of description. A short description of the item used to
     * disambiguate from other, similar items. Information from other properties
     * (in particular, name) may be necessary for the description to be useful
     * for disambiguation.
     *
     * @param string|string[] $disambiguatingDescription
     *
     * @return static
     *
     * @see https://schema.org/disambiguatingDescription
     */
    public function disambiguatingDescription($disambiguatingDescription)
    {
        return $this->setProperty('disambiguatingDescription', $disambiguatingDescription);
    }

    /**
     * A [[Grant]] that directly or indirectly provide funding or sponsorship
     * for this item. See also [[ownershipFundingInfo]].
     *
     * @param \Spatie\SchemaOrg\Contracts\GrantContract|\Spatie\SchemaOrg\Contracts\GrantContract[] $funding
     *
     * @return static
     *
     * @see https://schema.org/funding
     * @see https://pending.schema.org
     */
    public function funding($funding)
    {
        return $this->setProperty('funding', $funding);
    }

    /**
     * Indicates a BioChemEntity that (in some sense) has this BioChemEntity as
     * a part.
     *
     * @param \Spatie\SchemaOrg\Contracts\BioChemEntityContract|\Spatie\SchemaOrg\Contracts\BioChemEntityContract[] $hasBioChemEntityPart
     *
     * @return static
     *
     * @see https://schema.org/hasBioChemEntityPart
     * @see https://pending.schema.org
     */
    public function hasBioChemEntityPart($hasBioChemEntityPart)
    {
        return $this->setProperty('hasBioChemEntityPart', $hasBioChemEntityPart);
    }

    /**
     * A symbolic representation of a BioChemEntity. For example, a nucleotide
     * sequence of a Gene or an amino acid sequence of a Protein.
     *
     * @param string|string[] $hasBioPolymerSequence
     *
     * @return static
     *
     * @see https://schema.org/hasBioPolymerSequence
     * @see https://pending.schema.org
     */
    public function hasBioPolymerSequence($hasBioPolymerSequence)
    {
        return $this->setProperty('hasBioPolymerSequence', $hasBioPolymerSequence);
    }

    /**
     * Molecular function performed by this BioChemEntity; please use
     * PropertyValue if you want to include any evidence.
     *
     * @param \Spatie\SchemaOrg\Contracts\DefinedTermContract|\Spatie\SchemaOrg\Contracts\DefinedTermContract[]|\Spatie\SchemaOrg\Contracts\PropertyValueContract|\Spatie\SchemaOrg\Contracts\PropertyValueContract[]|string|string[] $hasMolecularFunction
     *
     * @return static
     *
     * @see https://schema.org/hasMolecularFunction
     * @see https://pending.schema.org
     */
    public function hasMolecularFunction($hasMolecularFunction)
    {
        return $this->setProperty('hasMolecularFunction', $hasMolecularFunction);
    }

    /**
     * A common representation such as a protein sequence or chemical structure
     * for this entity. For images use schema.org/image.
     *
     * @param \Spatie\SchemaOrg\Contracts\PropertyValueContract|\Spatie\SchemaOrg\Contracts\PropertyValueContract[]|string|string[] $hasRepresentation
     *
     * @return static
     *
     * @see https://schema.org/hasRepresentation
     * @see https://pending.schema.org
     */
    public function hasRepresentation($hasRepresentation)
    {
        return $this->setProperty('hasRepresentation', $hasRepresentation);
    }

    /**
     * The identifier property represents any kind of identifier for any kind of
     * [[Thing]], such as ISBNs, GTIN codes, UUIDs etc. Schema.org provides
     * dedicated properties for representing many of these, either as textual
     * strings or as URL (URI) links. See [background
     * notes](/docs/datamodel.html#identifierBg) for more details.
     *
     * @param \Spatie\SchemaOrg\Contracts\PropertyValueContract|\Spatie\SchemaOrg\Contracts\PropertyValueContract[]|string|string[] $identifier
     *
     * @return static
     *
     * @see https://schema.org/identifier
     */
    public function identifier($identifier)
    {
        return $this->setProperty('identifier', $identifier);
    }

    /**
     * An image of the item. This can be a [[URL]] or a fully described
     * [[ImageObject]].
     *
     * @param \Spatie\SchemaOrg\Contracts\ImageObjectContract|\Spatie\SchemaOrg\Contracts\ImageObjectContract[]|string|string[] $image
     *
     * @return static
     *
     * @see https://schema.org/image
     */
    public function image($image)
    {
        return $this->setProperty('image', $image);
    }

    /**
     * Another BioChemEntity encoding by this one.
     *
     * @param \Spatie\SchemaOrg\Contracts\GeneContract|\Spatie\SchemaOrg\Contracts\GeneContract[] $isEncodedByBioChemEntity
     *
     * @return static
     *
     * @see https://schema.org/isEncodedByBioChemEntity
     * @see https://pending.schema.org
     */
    public function isEncodedByBioChemEntity($isEncodedByBioChemEntity)
    {
        return $this->setProperty('isEncodedByBioChemEntity', $isEncodedByBioChemEntity);
    }

    /**
     * Biological process this BioChemEntity is involved in; please use
     * PropertyValue if you want to include any evidence.
     *
     * @param \Spatie\SchemaOrg\Contracts\DefinedTermContract|\Spatie\SchemaOrg\Contracts\DefinedTermContract[]|\Spatie\SchemaOrg\Contracts\PropertyValueContract|\Spatie\SchemaOrg\Contracts\PropertyValueContract[]|string|string[] $isInvolvedInBiologicalProcess
     *
     * @return static
     *
     * @see https://schema.org/isInvolvedInBiologicalProcess
     * @see https://pending.schema.org
     */
    public function isInvolvedInBiologicalProcess($isInvolvedInBiologicalProcess)
    {
        return $this->setProperty('isInvolvedInBiologicalProcess', $isInvolvedInBiologicalProcess);
    }

    /**
     * Subcellular location where this BioChemEntity is located; please use
     * PropertyValue if you want to include any evidence.
     *
     * @param \Spatie\SchemaOrg\Contracts\DefinedTermContract|\Spatie\SchemaOrg\Contracts\DefinedTermContract[]|\Spatie\SchemaOrg\Contracts\PropertyValueContract|\Spatie\SchemaOrg\Contracts\PropertyValueContract[]|string|string[] $isLocatedInSubcellularLocation
     *
     * @return static
     *
     * @see https://schema.org/isLocatedInSubcellularLocation
     * @see https://pending.schema.org
     */
    public function isLocatedInSubcellularLocation($isLocatedInSubcellularLocation)
    {
        return $this->setProperty('isLocatedInSubcellularLocation', $isLocatedInSubcellularLocation);
    }

    /**
     * Indicates a BioChemEntity that is (in some sense) a part of this
     * BioChemEntity.
     *
     * @param \Spatie\SchemaOrg\Contracts\BioChemEntityContract|\Spatie\SchemaOrg\Contracts\BioChemEntityContract[] $isPartOfBioChemEntity
     *
     * @return static
     *
     * @see https://schema.org/isPartOfBioChemEntity
     * @see https://pending.schema.org
     */
    public function isPartOfBioChemEntity($isPartOfBioChemEntity)
    {
        return $this->setProperty('isPartOfBioChemEntity', $isPartOfBioChemEntity);
    }

    /**
     * Indicates a page (or other CreativeWork) for which this thing is the main
     * entity being described. See [background
     * notes](/docs/datamodel.html#mainEntityBackground) for details.
     *
     * @param \Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[]|string|string[] $mainEntityOfPage
     *
     * @return static
     *
     * @see https://schema.org/mainEntityOfPage
     */
    public function mainEntityOfPage($mainEntityOfPage)
    {
        return $this->setProperty('mainEntityOfPage', $mainEntityOfPage);
    }

    /**
     * The name of the item.
     *
     * @param string|string[] $name
     *
     * @return static
     *
     * @see https://schema.org/name
     */
    public function name($name)
    {
        return $this->setProperty('name', $name);
    }

    /**
     * Indicates a potential Action, which describes an idealized action in
     * which this thing would play an 'object' role.
     *
     * @param \Spatie\SchemaOrg\Contracts\ActionContract|\Spatie\SchemaOrg\Contracts\ActionContract[] $potentialAction
     *
     * @return static
     *
     * @see https://schema.org/potentialAction
     */
    public function potentialAction($potentialAction)
    {
        return $this->setProperty('potentialAction', $potentialAction);
    }

    /**
     * URL of a reference Web page that unambiguously indicates the item's
     * identity. E.g. the URL of the item's Wikipedia page, Wikidata entry, or
     * official website.
     *
     * @param string|string[] $sameAs
     *
     * @return static
     *
     * @see https://schema.org/sameAs
     */
    public function sameAs($sameAs)
    {
        return $this->setProperty('sameAs', $sameAs);
    }

    /**
     * A CreativeWork or Event about this Thing.
     *
     * @param \Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[]|\Spatie\SchemaOrg\Contracts\EventContract|\Spatie\SchemaOrg\Contracts\EventContract[] $subjectOf
     *
     * @return static
     *
     * @see https://schema.org/subjectOf
     * @link https://github.com/schemaorg/schemaorg/issues/1670
     */
    public function subjectOf($subjectOf)
    {
        return $this->setProperty('subjectOf', $subjectOf);
    }

    /**
     * The taxonomic grouping of the organism that expresses, encodes, or in
     * some way related to the BioChemEntity.
     *
     * @param \Spatie\SchemaOrg\Contracts\DefinedTermContract|\Spatie\SchemaOrg\Contracts\DefinedTermContract[]|\Spatie\SchemaOrg\Contracts\TaxonContract|\Spatie\SchemaOrg\Contracts\TaxonContract[]|string|string[] $taxonomicRange
     *
     * @return static
     *
     * @see https://schema.org/taxonomicRange
     * @see https://pending.schema.org
     */
    public function taxonomicRange($taxonomicRange)
    {
        return $this->setProperty('taxonomicRange', $taxonomicRange);
    }

    /**
     * URL of the item.
     *
     * @param string|string[] $url
     *
     * @return static
     *
     * @see https://schema.org/url
     */
    public function url($url)
    {
        return $this->setProperty('url', $url);
    }
}
