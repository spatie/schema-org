<?php

namespace Spatie\SchemaOrg\Concerns;

trait RendersScript
{
    /** @var string */
    protected $nonce = '';

    public function setNonce(string $nonce)
    {
        $this->nonce = $nonce;

        return $this;
    }

    public function nonceAttr(): string
    {
        if (! $this->nonce) {
            return '';
        }

        return ' nonce="'.htmlspecialchars($this->nonce, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8').'"';
    }

    public function toScript(): string
    {
        return '<script type="application/ld+json"'.$this->nonceAttr().'>'.json_encode($this->toArray(), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG).'</script>';
    }

    public function __toString(): string
    {
        return $this->toScript();
    }
}
