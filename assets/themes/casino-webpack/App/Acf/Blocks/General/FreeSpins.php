<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class FreeSpins implements \App\Acf\Blocks\Helpers\BlockItem
{

    public static function setBlockParams(): void
    {
        RegisterBlock::addBlock(
            new Block(
                'free_spins',
                'Free Spins',
                'Free Spins block',
                'templates/blocks/free_spins.php',
                '',
                '',
                array(
                    'align' => false,
                    'mode'  => false,
                    'jsx'   => true,
                    'anchor' => true,
                ),
                array(
                    'title'       => "Free Spins block",
                    'description' => "Free Spins block"
                ),
                'block-default',
                'casino-webpack'
            )
        );
    }
}
