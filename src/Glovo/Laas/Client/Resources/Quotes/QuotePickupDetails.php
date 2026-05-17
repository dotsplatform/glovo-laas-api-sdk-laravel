<?php
/**
 * Description of QuotePickupDetails.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Resources\Quotes;

use Dots\Data\DTO;
use Dots\Glovo\Laas\Client\Resources\GlovoDateTime;

class QuotePickupDetails extends DTO
{
    protected AddressBook $addressBook;

    protected ?GlovoDateTime $pickupTime;

    public static function fromArray(array $data): static
    {
        $data['addressBook'] = AddressBook::fromArray($data['addressBook']);
        $data['pickupTime'] = isset($data['pickupTime']) ? GlovoDateTime::fromString($data['pickupTime']) : null;

        return parent::fromArray($data);
    }

    public function toArray(): array
    {
        $data = parent::toArray();
        $data['pickupTime'] = $this->getPickupTime()?->__toString();

        return $data;
    }

    public function getAddressBook(): AddressBook
    {
        return $this->addressBook;
    }

    public function getPickupTime(): ?GlovoDateTime
    {
        return $this->pickupTime;
    }
}
