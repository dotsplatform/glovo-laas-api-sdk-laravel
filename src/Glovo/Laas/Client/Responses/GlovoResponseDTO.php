<?php
/**
 * Description of GlovoResponse.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Responses;

use Dots\Data\DTO;
use Saloon\Http\Response;

abstract class GlovoResponseDTO extends DTO
{
    public static function fromResponse(Response $response): static
    {
        return static::fromArray($response->json());
    }
}
