<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class MainHeading implements \App\Acf\Blocks\Helpers\BlockItem
{

    public static function setBlockParams(): void
    {
        RegisterBlock::addBlock(
            new Block(
                'main_heading',
                'Main Heading',
                'Main Heading block',
                'templates/blocks/main_heading.php',
                '',
                '',
                array(
                    'align' => false,
                    'mode'  => false,
                    'jsx'   => true,
                    'anchor' => true,
                ),
                array(
                    'title'       => "Main Heading block",
                    'description' => "Main Heading block"
                ),
                'block-default',
                'casino-webpack'
            )
        );
    }
}
