<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class ProviderSlots implements \App\Acf\Blocks\Helpers\BlockItem
{

    public static function setBlockParams(): void
    {
        RegisterBlock::addBlock(
            new Block(
                'provider_slots',
                'Provider Slots',
                'Provider Slots block',
                'templates/blocks/provider_slots.php',
                '',
                '',
                array(
                    'align' => false,
                    'mode'  => false,
                    'jsx'   => true,
                    'anchor' => true,
                ),
                array(
                    'title'       => "Provider Slots block",
                    'description' => "Provider Slots block"
                ),
                'block-default',
                'casino-webpack'
            )
        );
    }
}
