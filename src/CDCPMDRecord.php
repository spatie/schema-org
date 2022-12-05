<?php

namespace Spatie\SchemaOrg;

use Spatie\SchemaOrg\Contracts\CDCPMDRecordContract;
use Spatie\SchemaOrg\Contracts\IntangibleContract;
use Spatie\SchemaOrg\Contracts\StructuredValueContract;
use Spatie\SchemaOrg\Contracts\ThingContract;

/**
 * A CDCPMDRecord is a data structure representing a record in a CDC tabular
 * data format
 *       used for hospital data reporting. See
 * [documentation](/docs/cdc-covid.html) for details, and the linked CDC
 * materials for authoritative
 *       definitions used as the source here.
 *
 * @see https://schema.org/CDCPMDRecord
 * @see https://pending.schema.org
 * @link https://github.com/schemaorg/schemaorg/issues/2521
 *
 */
class CDCPMDRecord extends BaseType implements CDCPMDRecordContract, IntangibleContract, StructuredValueContract, ThingContract
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
     * collectiondate - Date for which patient counts are reported.
     *
     * @param \DateTimeInterface|\DateTimeInterface[]|string|string[] $cvdCollectionDate
     *
     * @return static
     *
     * @see https://schema.org/cvdCollectionDate
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2521
     */
    public function cvdCollectionDate($cvdCollectionDate)
    {
        return $this->setProperty('cvdCollectionDate', $cvdCollectionDate);
    }

    /**
     * Name of the County of the NHSN facility that this data record applies to.
     * Use [[cvdFacilityId]] to identify the facility. To provide other details,
     * [[healthcareReportingData]] can be used on a [[Hospital]] entry.
     *
     * @param string|string[] $cvdFacilityCounty
     *
     * @return static
     *
     * @see https://schema.org/cvdFacilityCounty
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2521
     */
    public function cvdFacilityCounty($cvdFacilityCounty)
    {
        return $this->setProperty('cvdFacilityCounty', $cvdFacilityCounty);
    }

    /**
     * Identifier of the NHSN facility that this data record applies to. Use
     * [[cvdFacilityCounty]] to indicate the county. To provide other details,
     * [[healthcareReportingData]] can be used on a [[Hospital]] entry.
     *
     * @param string|string[] $cvdFacilityId
     *
     * @return static
     *
     * @see https://schema.org/cvdFacilityId
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2521
     */
    public function cvdFacilityId($cvdFacilityId)
    {
        return $this->setProperty('cvdFacilityId', $cvdFacilityId);
    }

    /**
     * numbeds - HOSPITAL INPATIENT BEDS: Inpatient beds, including all staffed,
     * licensed, and overflow (surge) beds used for inpatients.
     *
     * @param float|float[]|int|int[] $cvdNumBeds
     *
     * @return static
     *
     * @see https://schema.org/cvdNumBeds
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2521
     */
    public function cvdNumBeds($cvdNumBeds)
    {
        return $this->setProperty('cvdNumBeds', $cvdNumBeds);
    }

    /**
     * numbedsocc - HOSPITAL INPATIENT BED OCCUPANCY: Total number of staffed
     * inpatient beds that are occupied.
     *
     * @param float|float[]|int|int[] $cvdNumBedsOcc
     *
     * @return static
     *
     * @see https://schema.org/cvdNumBedsOcc
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2521
     */
    public function cvdNumBedsOcc($cvdNumBedsOcc)
    {
        return $this->setProperty('cvdNumBedsOcc', $cvdNumBedsOcc);
    }

    /**
     * numc19died - DEATHS: Patients with suspected or confirmed COVID-19 who
     * died in the hospital, ED, or any overflow location.
     *
     * @param float|float[]|int|int[] $cvdNumC19Died
     *
     * @return static
     *
     * @see https://schema.org/cvdNumC19Died
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2521
     */
    public function cvdNumC19Died($cvdNumC19Died)
    {
        return $this->setProperty('cvdNumC19Died', $cvdNumC19Died);
    }

    /**
     * numc19hopats - HOSPITAL ONSET: Patients hospitalized in an NHSN inpatient
     * care location with onset of suspected or confirmed COVID-19 14 or more
     * days after hospitalization.
     *
     * @param float|float[]|int|int[] $cvdNumC19HOPats
     *
     * @return static
     *
     * @see https://schema.org/cvdNumC19HOPats
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2521
     */
    public function cvdNumC19HOPats($cvdNumC19HOPats)
    {
        return $this->setProperty('cvdNumC19HOPats', $cvdNumC19HOPats);
    }

    /**
     * numc19hosppats - HOSPITALIZED: Patients currently hospitalized in an
     * inpatient care location who have suspected or confirmed COVID-19.
     *
     * @param float|float[]|int|int[] $cvdNumC19HospPats
     *
     * @return static
     *
     * @see https://schema.org/cvdNumC19HospPats
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2521
     */
    public function cvdNumC19HospPats($cvdNumC19HospPats)
    {
        return $this->setProperty('cvdNumC19HospPats', $cvdNumC19HospPats);
    }

    /**
     * numc19mechventpats - HOSPITALIZED and VENTILATED: Patients hospitalized
     * in an NHSN inpatient care location who have suspected or confirmed
     * COVID-19 and are on a mechanical ventilator.
     *
     * @param float|float[]|int|int[] $cvdNumC19MechVentPats
     *
     * @return static
     *
     * @see https://schema.org/cvdNumC19MechVentPats
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2521
     */
    public function cvdNumC19MechVentPats($cvdNumC19MechVentPats)
    {
        return $this->setProperty('cvdNumC19MechVentPats', $cvdNumC19MechVentPats);
    }

    /**
     * numc19ofmechventpats - ED/OVERFLOW and VENTILATED: Patients with
     * suspected or confirmed COVID-19 who are in the ED or any overflow
     * location awaiting an inpatient bed and on a mechanical ventilator.
     *
     * @param float|float[]|int|int[] $cvdNumC19OFMechVentPats
     *
     * @return static
     *
     * @see https://schema.org/cvdNumC19OFMechVentPats
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2521
     */
    public function cvdNumC19OFMechVentPats($cvdNumC19OFMechVentPats)
    {
        return $this->setProperty('cvdNumC19OFMechVentPats', $cvdNumC19OFMechVentPats);
    }

    /**
     * numc19overflowpats - ED/OVERFLOW: Patients with suspected or confirmed
     * COVID-19 who are in the ED or any overflow location awaiting an inpatient
     * bed.
     *
     * @param float|float[]|int|int[] $cvdNumC19OverflowPats
     *
     * @return static
     *
     * @see https://schema.org/cvdNumC19OverflowPats
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2521
     */
    public function cvdNumC19OverflowPats($cvdNumC19OverflowPats)
    {
        return $this->setProperty('cvdNumC19OverflowPats', $cvdNumC19OverflowPats);
    }

    /**
     * numicubeds - ICU BEDS: Total number of staffed inpatient intensive care
     * unit (ICU) beds.
     *
     * @param float|float[]|int|int[] $cvdNumICUBeds
     *
     * @return static
     *
     * @see https://schema.org/cvdNumICUBeds
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2521
     */
    public function cvdNumICUBeds($cvdNumICUBeds)
    {
        return $this->setProperty('cvdNumICUBeds', $cvdNumICUBeds);
    }

    /**
     * numicubedsocc - ICU BED OCCUPANCY: Total number of staffed inpatient ICU
     * beds that are occupied.
     *
     * @param float|float[]|int|int[] $cvdNumICUBedsOcc
     *
     * @return static
     *
     * @see https://schema.org/cvdNumICUBedsOcc
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2521
     */
    public function cvdNumICUBedsOcc($cvdNumICUBedsOcc)
    {
        return $this->setProperty('cvdNumICUBedsOcc', $cvdNumICUBedsOcc);
    }

    /**
     * numtotbeds - ALL HOSPITAL BEDS: Total number of all inpatient and
     * outpatient beds, including all staffed, ICU, licensed, and overflow
     * (surge) beds used for inpatients or outpatients.
     *
     * @param float|float[]|int|int[] $cvdNumTotBeds
     *
     * @return static
     *
     * @see https://schema.org/cvdNumTotBeds
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2521
     */
    public function cvdNumTotBeds($cvdNumTotBeds)
    {
        return $this->setProperty('cvdNumTotBeds', $cvdNumTotBeds);
    }

    /**
     * numvent - MECHANICAL VENTILATORS: Total number of ventilators available.
     *
     * @param float|float[]|int|int[] $cvdNumVent
     *
     * @return static
     *
     * @see https://schema.org/cvdNumVent
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2521
     */
    public function cvdNumVent($cvdNumVent)
    {
        return $this->setProperty('cvdNumVent', $cvdNumVent);
    }

    /**
     * numventuse - MECHANICAL VENTILATORS IN USE: Total number of ventilators
     * in use.
     *
     * @param float|float[]|int|int[] $cvdNumVentUse
     *
     * @return static
     *
     * @see https://schema.org/cvdNumVentUse
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2521
     */
    public function cvdNumVentUse($cvdNumVentUse)
    {
        return $this->setProperty('cvdNumVentUse', $cvdNumVentUse);
    }

    /**
     * Publication date of an online listing.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $datePosted
     *
     * @return static
     *
     * @see https://schema.org/datePosted
     */
    public function datePosted($datePosted)
    {
        return $this->setProperty('datePosted', $datePosted);
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
