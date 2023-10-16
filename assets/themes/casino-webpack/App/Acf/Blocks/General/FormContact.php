<?php

namespace App\Acf\Blocks\General;

use App\Acf\Blocks\Helpers\Block;
use App\Acf\Blocks\RegisterBlock;

final class FormContact implements \App\Acf\Blocks\Helpers\BlockItem
{

    public static function setBlockParams(): void
    {
        RegisterBlock::addBlock(
            new Block(
                'form_contact',
                'Form Contact',
                'Form Contact block',
                'templates/blocks/form_contact.php',
                '',
                '',
                array(
                    'align' => false,
                    'mode'  => false,
                    'jsx'   => true,
                    'anchor' => true,
                ),
                array(
                    'title'       => "Form Contact block",
                    'description' => "Form Contact block"
                ),
                'block-default',
                'casino-webpack'
            )
        );
    }
}
