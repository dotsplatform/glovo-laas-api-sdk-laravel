<?php
/**
 * Description of AddressBook.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dots\Glovo\Laas\Client\Resources\Quotes;

use Dots\Data\DTO;

class AddressBook extends DTO
{
    protected string $id;

    public function getId(): string
    {
        return $this->id;
    }
}
