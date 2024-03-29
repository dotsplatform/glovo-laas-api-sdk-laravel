<?php
/**
 * Description of RegisterWebhookRequest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Requests\Webhooks;

use Dots\Glovo\Laas\Client\Requests\PostGlovoRequest;
use Dots\Glovo\Laas\Client\Requests\Webhooks\DTO\RegisterWebhookDTO;
use Dots\Glovo\Laas\Client\Responses\WebhookResponseDTO;
use Saloon\Http\Response;

/**
 * Register a webhook for a partner.
 *
 * The webhook will make a POST request to the specified callbackUrl url on
 * any order state update or courier position update.
 *
 * The webhook will be called for all the active orders created by the partner.
 */
class RegisterWebhookRequest extends PostGlovoRequest
{
    private const ENDPOINT = '/v2/laas/webhooks';

    public function __construct(
        private readonly RegisterWebhookDTO $dto,
    ) {
    }

    public function createDtoFromResponse(Response $response): WebhookResponseDTO
    {
        return WebhookResponseDTO::fromResponse($response);
    }

    public function defaultBody(): array
    {
        return $this->dto->toArray();
    }

    public function resolveEndpoint(): string
    {
        return self::ENDPOINT;
    }
}
