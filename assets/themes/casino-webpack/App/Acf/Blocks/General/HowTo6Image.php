<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class HowTo6Image implements \App\Acf\Blocks\Helpers\BlockItem
{

    public static function setBlockParams(): void
    {
        RegisterBlock::addBlock(
            new Block(
                'how_to_6_image',
                'How To (6 Image)',
                'How To (6 Image) block',
                'templates/blocks/how_to_6_image.php',
                '',
                '',
                array(
                    'align' => false,
                    'mode'  => false,
                    'jsx'   => true,
                    'anchor' => true,
                ),
                array(
                    'title'       => "How To (6 Image) block",
                    'description' => "How To (6 Image) block"
                ),
                'block-default',
                'casino-webpack'
            )
        );
    }
}
