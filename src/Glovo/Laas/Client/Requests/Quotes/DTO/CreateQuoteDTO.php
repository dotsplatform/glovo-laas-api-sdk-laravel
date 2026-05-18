<?php
/**
 * Description of CreateQuoteDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Requests\Quotes\DTO;

use Dots\Data\DTO;
use Dots\Glovo\Laas\Client\Resources\Quotes\QuoteDeliveryAddress;
use Dots\Glovo\Laas\Client\Resources\Quotes\QuotePickupDetails;

class CreateQuoteDTO extends DTO
{
    protected QuotePickupDetails $pickupDetails;

    protected QuoteDeliveryAddress $deliveryAddress;

    public function getPickupDetails(): QuotePickupDetails
    {
        return $this->pickupDetails;
    }

    public function getDeliveryAddress(): QuoteDeliveryAddress
    {
        return $this->deliveryAddress;
    }
}
