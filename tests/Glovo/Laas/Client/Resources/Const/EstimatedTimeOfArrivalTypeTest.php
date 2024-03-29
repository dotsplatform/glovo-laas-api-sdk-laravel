<?php
/**
 * Description of EstimatedTimeOfArrivalTypeTest.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace Tests\Glovo\Laas\Client\Resources\Const;

use Dots\Glovo\Laas\Client\Resources\Consts\EstimatedTimeOfArrivalType;
use Tests\TestCase;

class EstimatedTimeOfArrivalTypeTest extends TestCase
{
    public function testEstimatedTimeOfArrivalTypeValues(): void
    {
        $this->assertEquals('PICKUP', EstimatedTimeOfArrivalType::PICKUP->value);
        $this->assertEquals('DELIVERY', EstimatedTimeOfArrivalType::DELIVERY->value);
    }
}
