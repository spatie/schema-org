<?php

namespace Spatie\SchemaOrg;

/**
 * A card payment method of a particular brand or name.  Used to mark up a
 * particular payment method and/or the financial product/service that supplies
 * the card account.\n\nCommonly used values:\n\n*
 * http://purl.org/goodrelations/v1#AmericanExpress\n*
 * http://purl.org/goodrelations/v1#DinersClub\n*
 * http://purl.org/goodrelations/v1#Discover\n*
 * http://purl.org/goodrelations/v1#JCB\n*
 * http://purl.org/goodrelations/v1#MasterCard\n*
 * http://purl.org/goodrelations/v1#VISA.

 *
 * @see http://schema.org/CreditCard
 */
class CreditCard extends PaymentCard
{
}
