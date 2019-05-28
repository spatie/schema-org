<?php

namespace Spatie\SchemaOrg;

/**
 * A subscription which allows a user to access media including audio, video,
 * books, etc.
 *
 * @see http://schema.org/MediaSubscription
 *
 * @mixin \Spatie\SchemaOrg\Intangible
 */
class MediaSubscription extends BaseType
{
    /**
     * The Organization responsible for authenticating the user's subscription.
     * For example, many media apps require a cable/satellite provider to
     * authenticate your subscription before playing media.
     *
     * @param Organization|Organization[] $authenticator
     *
     * @return static
     *
     * @see http://schema.org/authenticator
     */
    public function authenticator($authenticator)
    {
        return $this->setProperty('authenticator', $authenticator);
    }

    /**
     * 
     *
     * @param  $expectsAcceptanceOf
     *
     * @return static
     *
     * @see http://schema.org/expectsAcceptanceOf
     */
    public function expectsAcceptanceOf($expectsAcceptanceOf)
    {
        return $this->setProperty('expectsAcceptanceOf', $expectsAcceptanceOf);
    }

}
