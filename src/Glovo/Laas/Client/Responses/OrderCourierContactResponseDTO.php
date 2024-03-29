<?php
/**
 * Description of Courier.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Responses;

class OrderCourierContactResponseDTO extends GlovoResponseDTO
{
    protected string $courierName;

    // +34666666666
    protected string $courierPhone;

    public function getCourierName(): string
    {
        return $this->courierName;
    }

    public function getCourierPhone(): string
    {
        return $this->courierPhone;
    }
}
