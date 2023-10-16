<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class ExpertsCards implements \App\Acf\Blocks\Helpers\BlockItem
{

    public static function setBlockParams(): void
    {
        RegisterBlock::addBlock(
            new Block(
                'experts_cards',
                'Experts Cards',
                'Experts Cards block',
                'templates/blocks/experts_cards.php',
                '',
                '',
                array(
                    'align' => false,
                    'mode'  => false,
                    'jsx'   => true,
                    'anchor' => true,
                ),
                array(
                    'title'       => "Experts Cards block",
                    'description' => "Experts Cards block"
                ),
                'block-default',
                'casino-webpack'
            )
        );
    }
}
