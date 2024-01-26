<?php
/**
 * Description of ValidateOrderResponseGenerator.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Mock\Data;

use Dots\Glovo\Laas\Client\Resources\Consts\ValidationResult;

class ValidateOrderResponseGenerator
{
    public static function generateSuccess(ValidationResult $result): array
    {
        return [
            'validationResult' => $result->value,
        ];
    }
}
