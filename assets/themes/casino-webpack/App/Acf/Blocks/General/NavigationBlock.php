<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class NavigationBlock implements \App\Acf\Blocks\Helpers\BlockItem
{

    public static function setBlockParams(): void
    {
        RegisterBlock::addBlock(
            new Block(
                'navigation',
                'Navigation',
                'Navigation Block',
                'templates/blocks/navigation.php',
                '',
                '',
                array(
                    'align' => false,
                    'mode'  => false,
                    'jsx'   => true,
                    'anchor' => true,
                ),
                array(
                    'title'       => "Navigation Block",
                    'description' => "Navigation Block"
                ),
                'block-default',
                'casino-webpack'
            )
        );
    }
}
