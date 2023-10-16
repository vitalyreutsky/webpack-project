<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class CasinoCriteria implements \App\Acf\Blocks\Helpers\BlockItem
{

    public static function setBlockParams(): void
    {
        RegisterBlock::addBlock(
            new Block(
                'сasino_сriteria',
                'Casino Criteria',
                'Casino Criteria block',
                'templates/blocks/сasino_сriteria.php',
                '',
                '',
                array(
                    'align' => false,
                    'mode'  => false,
                    'jsx'   => true,
                    'anchor' => true,
                ),
                array(
                    'title'       => "Casino Criteria block",
                    'description' => "Casino Criteria block"
                ),
                'block-default',
                'casino-webpack'
            )
        );
    }
}
