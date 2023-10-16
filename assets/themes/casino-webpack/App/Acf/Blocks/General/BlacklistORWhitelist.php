<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class BlacklistORWhitelist implements \App\Acf\Blocks\Helpers\BlockItem
{

    public static function setBlockParams(): void
    {
        RegisterBlock::addBlock(
            new Block(
                'blacklist_or_whitelist',
                'Blacklist OR Whitelist',
                'Blacklist OR Whitelist block',
                'templates/blocks/blacklist_or_whitelist.php',
                '',
                '',
                array(
                    'align' => false,
                    'mode'  => false,
                    'jsx'   => true,
                    'anchor' => true,
                ),
                array(
                    'title'       => "Blacklist OR Whitelist block",
                    'description' => "Blacklist OR Whitelist block"
                ),
                'block-default',
                'casino-webpack'
            )
        );
    }
}
