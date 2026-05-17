<?php
/**
 * Description of ConfirmQuoteDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Requests\Quotes\DTO;

use Dots\Data\DTO;
use Dots\Glovo\Laas\Client\Resources\Contact;
use Dots\Glovo\Laas\Client\Resources\Order\OrderPrice;
use Dots\Glovo\Laas\Client\Resources\Order\PackageDetails;
use Dots\Glovo\Laas\Client\Resources\Quotes\QuoteDeliveryAddress;

class ConfirmQuoteDTO extends DTO
{
    protected Contact $contact;

    protected ?PackageDetails $packageDetails;

    protected ?OrderPrice $price;

    protected ?string $pickupOrderCode;

    protected ?QuoteDeliveryAddress $deliveryAddress;

    public function toRequestData(bool $stageEnv): array
    {
        $data = $this->toArray();
        if ($stageEnv) {
            $data['price'] = null;
        }

        return $data;
    }

    public function getContact(): Contact
    {
        return $this->contact;
    }

    public function getPackageDetails(): ?PackageDetails
    {
        return $this->packageDetails;
    }

    public function getPrice(): ?OrderPrice
    {
        return $this->price;
    }

    public function getPickupOrderCode(): ?string
    {
        return $this->pickupOrderCode;
    }

    public function getDeliveryAddress(): ?QuoteDeliveryAddress
    {
        return $this->deliveryAddress;
    }
}
