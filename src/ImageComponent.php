<?php

declare( strict_types = 1 );

namespace Core\View\Component;

use Core\View\Attribute\ViewComponent;
use Core\View\Element;

#[ViewComponent( 'img', true, 60 )]
final class ImageComponent extends AbstractComponent
{
    public function getView() : Element
    {
        $img = new Element( 'img' );

        $img->attributes(
                src : '#',
                alt : 'Image Component',
        );

        return $img;
    }
}
