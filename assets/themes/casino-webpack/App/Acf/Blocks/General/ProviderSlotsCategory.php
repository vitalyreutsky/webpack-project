<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class ProviderSlotsCategory implements \App\Acf\Blocks\Helpers\BlockItem
{

    public static function setBlockParams(): void
    {
        RegisterBlock::addBlock(
            new Block(
                'provider_slots_category',
                'Provider Slots Category',
                'Provider Slots Category block',
                'templates/blocks/provider_slots_category.php',
                '',
                '',
                array(
                    'align' => false,
                    'mode'  => false,
                    'jsx'   => true,
                    'anchor' => true,
                ),
                array(
                    'title'       => "Provider Slots Category block",
                    'description' => "Provider Slots Category block"
                ),
                'block-default',
                'casino-webpack'
            )
        );
    }
}
