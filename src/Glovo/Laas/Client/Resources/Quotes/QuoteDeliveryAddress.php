<?php
/**
 * Description of QuoteDeliveryAddress.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Resources\Quotes;

use Dots\Data\DTO;
use Dots\Glovo\Laas\Client\Resources\Coordinates;

class QuoteDeliveryAddress extends DTO
{
    protected string $rawAddress;

    protected ?Coordinates $coordinates;

    protected ?string $details;

    public function getRawAddress(): string
    {
        return $this->rawAddress;
    }

    public function getCoordinates(): ?Coordinates
    {
        return $this->coordinates;
    }

    public function getDetails(): ?string
    {
        return $this->details;
    }
}
