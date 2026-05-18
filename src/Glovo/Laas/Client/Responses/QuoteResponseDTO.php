<?php
/**
 * Description of QuoteResponseDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Responses;

use Dots\Glovo\Laas\Client\Resources\Quotes\EstimatedTimeOfDelivery;
use Dots\Glovo\Laas\Client\Resources\Quotes\QuoteDeliveryAddress;
use Dots\Glovo\Laas\Client\Resources\Quotes\QuotePickupDetails;

class QuoteResponseDTO extends GlovoResponseDTO
{
    protected string $quoteId;

    protected float $quotePrice;

    protected string $currencyCode;

    protected string $createdAt;

    protected string $expiresAt;

    protected ?QuotePickupDetails $pickupDetails;

    protected ?QuoteDeliveryAddress $deliveryAddress;

    protected ?EstimatedTimeOfDelivery $estimatedTimeOfDelivery;

    public static function fromArray(array $data): static
    {
        $data['pickupDetails'] = isset($data['pickupDetails'])
            ? QuotePickupDetails::fromArray($data['pickupDetails'])
            : null;
        $data['deliveryAddress'] = isset($data['deliveryAddress'])
            ? QuoteDeliveryAddress::fromArray($data['deliveryAddress'])
            : null;
        $data['estimatedTimeOfDelivery'] = isset($data['estimatedTimeOfDelivery'])
            ? EstimatedTimeOfDelivery::fromArray($data['estimatedTimeOfDelivery'])
            : null;

        return parent::fromArray($data);
    }

    public function getQuoteId(): string
    {
        return $this->quoteId;
    }

    public function getQuotePrice(): float
    {
        return $this->quotePrice;
    }

    public function getCurrencyCode(): string
    {
        return $this->currencyCode;
    }

    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    public function getExpiresAt(): string
    {
        return $this->expiresAt;
    }

    public function getPickupDetails(): ?QuotePickupDetails
    {
        return $this->pickupDetails;
    }

    public function getDeliveryAddress(): ?QuoteDeliveryAddress
    {
        return $this->deliveryAddress;
    }

    public function getEstimatedTimeOfDelivery(): ?EstimatedTimeOfDelivery
    {
        return $this->estimatedTimeOfDelivery;
    }
}
