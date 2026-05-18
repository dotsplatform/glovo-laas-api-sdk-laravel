<?php
/**
 * Description of EstimatedTimeOfDelivery.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Resources\Quotes;

use Dots\Data\DTO;

class EstimatedTimeOfDelivery extends DTO
{
    protected ?string $lowerBound;

    protected ?string $upperBound;

    protected ?string $deliveryDuration;

    public function getLowerBound(): ?string
    {
        return $this->lowerBound;
    }

    public function getUpperBound(): ?string
    {
        return $this->upperBound;
    }

    public function getDeliveryDuration(): ?string
    {
        return $this->deliveryDuration;
    }
}
