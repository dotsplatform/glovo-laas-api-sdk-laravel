<?php
/**
 * Description of CreateOrderRequest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Requests\Orders;

use Dots\Glovo\Laas\Client\Exceptions\GlovoException;
use Dots\Glovo\Laas\Client\Requests\Orders\DTO\CreateOrderDTO;
use Dots\Glovo\Laas\Client\Requests\PostGlovoRequest;
use Dots\Glovo\Laas\Client\Responses\ErrorResponseDTO;
use Dots\Glovo\Laas\Client\Responses\OrderResponseDTO;
use Saloon\Http\Response;
use Throwable;

/**
 * @url https://logistics-docs.glovoapp.com/laas-partners/index.html#operation/createPartnerParcel
 * To create an order, complete the details required accurately.
 * Remember that if you don’t specify a scheduled pickup time,
 * the order you have created will be offered to a courier as soon as possible.
 *
 * Please note that orders can only be created on the days and at the times when the platform is active in each city.
 * These times are described in the documentation below for your reference.
 *
 * This endpoint geolocates a point based on the address provided in the rawAddress field.
 * The coordinates field is optional and can be used to provide more accurate geolocation information.
 * However, if coordinates are provided, they will take precedence over rawAddress in determining the location of the point.
 *
 * It is important to note that rawAddress is always mandatory,
 * as it serves as a label (along with details) for couriers to find the address at the location.
 * If coordinates are provided and are incorrect, the API call will fail.
 * Additionally, if coordinates are provided, rawAddress will not be used as a fallback.
 */
class CreateOrderRequest extends PostGlovoRequest
{
    private const ENDPOINT = '/v2/laas/parcels';

    public function __construct(
        protected readonly CreateOrderDTO $dto,
        private readonly bool $stageEnv = true,
    ) {

    }

    protected function defaultBody(): array
    {
      return $this->dto->toRequestData($this->stageEnv);
    }

    public function resolveEndpoint(): string
    {
        return self::ENDPOINT;
    }

    public function createDtoFromResponse(Response $response): OrderResponseDTO
    {
        return OrderResponseDTO::fromResponse($response);
    }

    public function getRequestException(Response $response, ?Throwable $senderException): ?Throwable
    {
        $errorResponse = ErrorResponseDTO::fromResponse($response);
        return new GlovoException($errorResponse);
    }
}
