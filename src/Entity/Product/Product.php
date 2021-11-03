<?php
/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * You can find more information about us on https://bitbag.io and write us
 * an email on hello@bitbag.io.
 */

declare(strict_types=1);

namespace App\Entity\Product;

class Product extends \Sylius\Component\Core\Model\Product
{
    const COLOR_RED = 'RED';
    const COLOR_GREEN = 'GREEN';
    const COLOR_BLUE = 'BLUE';

    private string $color;

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }


}
