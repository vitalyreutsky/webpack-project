<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class MinusPlus implements \App\Acf\Blocks\Helpers\BlockItem
{

    public static function setBlockParams(): void
    {
        RegisterBlock::addBlock(
            new Block(
                'minus_plus',
                'Minus Plus',
                'Minus Plus block',
                'templates/blocks/minus_plus.php',
                '',
                '',
                array(
                    'align' => false,
                    'mode'  => false,
                    'jsx'   => true,
                    'anchor' => true,
                ),
                array(
                    'title'       => "Minus Plus block",
                    'description' => "Minus Plus block"
                ),
                'block-default',
                'casino-webpack'
            )
        );
    }
}
