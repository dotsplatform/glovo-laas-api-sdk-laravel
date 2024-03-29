<?php
/**
 * Description of GlovoAuthDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\DTO;

use Dots\Data\DTO;

class GlovoAuthDTO extends DTO
{
    protected string $clientId;

    protected string $clientSecret;

    public static function make(string $clientId, string $clientSecret): self
    {
        return self::fromArray([
            'clientId' => $clientId,
            'clientSecret' => $clientSecret,
        ]);
    }

    public function getClientId(): string
    {
        return $this->clientId;
    }

    public function getClientSecret(): string
    {
        return $this->clientSecret;
    }
}
