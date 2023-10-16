<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class Diagrams implements \App\Acf\Blocks\Helpers\BlockItem
{

    public static function setBlockParams(): void
    {
        RegisterBlock::addBlock(
            new Block(
                'diagrams',
                'Diagrams',
                'Diagrams block',
                'templates/blocks/diagrams.php',
                '',
                '',
                array(
                    'align' => false,
                    'mode'  => false,
                    'jsx'   => true,
                    'anchor' => true,
                ),
                array(
                    'title'       => "Diagrams block",
                    'description' => "Diagrams block"
                ),
                'block-default',
                'casino-webpack'
            )
        );
    }
}
