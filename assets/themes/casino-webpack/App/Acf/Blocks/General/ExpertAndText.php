<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class ExpertAndText implements \App\Acf\Blocks\Helpers\BlockItem
{

    public static function setBlockParams(): void
    {
        RegisterBlock::addBlock(
            new Block(
                'expert_and_text',
                'Expert And Text',
                'Expert And Text block',
                'templates/blocks/expert_text.php',
                '',
                '',
                array(
                    'align' => false,
                    'mode'  => false,
                    'jsx'   => true,
                    'anchor' => true,
                ),
                array(
                    'title'       => "Expert And Text block",
                    'description' => "Expert And Text block"
                ),
                'block-default',
                'casino-webpack'
            )
        );
    }
}
