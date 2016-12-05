<?php

namespace Spatie\SchemaOrg;

/**
 * Organization: A business corporation.
 *
 * @see http://schema.org/Corporation
 */
class Corporation extends Organization
{
    /**
     * The exchange traded instrument associated with a Corporation object. The
     * tickerSymbol is expressed as an exchange and an instrument name separated
     * by a space character. For the exchange component of the tickerSymbol
     * attribute, we reccommend using the controlled vocaulary of Market
     * Identifier Codes (MIC) specified in ISO15022.
     *
     * @param string $tickerSymbol
     *
     * @return static
     *
     * @see http://schema.org/tickerSymbol
     */
    public function tickerSymbol($tickerSymbol)
    {
        return $this->setProperty('tickerSymbol', $tickerSymbol);
    }

}
