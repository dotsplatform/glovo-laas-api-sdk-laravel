<?php
/**
 * Description of ConfirmQuoteRequest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Requests\Quotes;

use Dots\Glovo\Laas\Client\Requests\PostGlovoRequest;
use Dots\Glovo\Laas\Client\Requests\Quotes\DTO\ConfirmQuoteDTO;
use Dots\Glovo\Laas\Client\Responses\OrderResponseDTO;
use Saloon\Http\Response;

class ConfirmQuoteRequest extends PostGlovoRequest
{
    private const ENDPOINT = '/v2/laas/quotes/%s/parcels';

    public function __construct(
        protected readonly string $quoteId,
        protected readonly ConfirmQuoteDTO $dto,
        private readonly bool $stageEnv = true,
    ) {
    }

    protected function defaultBody(): array
    {
        return $this->dto->toRequestData($this->stageEnv);
    }

    public function resolveEndpoint(): string
    {
        return sprintf(self::ENDPOINT, $this->quoteId);
    }

    public function createDtoFromResponse(Response $response): OrderResponseDTO
    {
        return OrderResponseDTO::fromResponse($response);
    }
}
