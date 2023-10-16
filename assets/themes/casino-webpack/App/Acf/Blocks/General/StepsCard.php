<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class StepsCard implements \App\Acf\Blocks\Helpers\BlockItem
{

    public static function setBlockParams(): void
    {
        RegisterBlock::addBlock(
            new Block(
                'steps_card',
                'Steps Card',
                'Steps Card block',
                'templates/blocks/steps_card.php',
                '',
                '',
                array(
                    'align' => false,
                    'mode'  => false,
                    'jsx'   => true,
                    'anchor' => true,
                ),
                array(
                    'title'       => "Steps Card block",
                    'description' => "Steps Card block"
                ),
                'block-default',
                'casino-webpack'
            )
        );
    }
}
