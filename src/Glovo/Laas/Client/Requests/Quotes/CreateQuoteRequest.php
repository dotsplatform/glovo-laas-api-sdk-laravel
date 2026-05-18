<?php
/**
 * Description of CreateQuoteRequest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Requests\Quotes;

use Dots\Glovo\Laas\Client\Requests\PostGlovoRequest;
use Dots\Glovo\Laas\Client\Requests\Quotes\DTO\CreateQuoteDTO;
use Dots\Glovo\Laas\Client\Responses\QuoteResponseDTO;
use Saloon\Http\Response;

class CreateQuoteRequest extends PostGlovoRequest
{
    private const ENDPOINT = '/v2/laas/quotes';

    public function __construct(
        protected readonly CreateQuoteDTO $dto,
    ) {
    }

    protected function defaultBody(): array
    {
        return $this->dto->toArray();
    }

    public function resolveEndpoint(): string
    {
        return self::ENDPOINT;
    }

    public function createDtoFromResponse(Response $response): QuoteResponseDTO
    {
        return QuoteResponseDTO::fromResponse($response);
    }
}
