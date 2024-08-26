<?php

/*
 * This file was created by developers working at BitBag
 * Do you need more information about us and what we do? Visit our https://bitbag.io website!
 * We are hiring developers from all over the world. Join us and start your new, exciting adventure and become part of us: https://bitbag.io/career
*/

declare(strict_types=1);

namespace Sylius\CmsPlugin\Twig\Extension;

use Sylius\CmsPlugin\Twig\Runtime\RenderContentElementsRuntime;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

final class RenderContentElementsExtension extends AbstractExtension
{
    public function getFunctions(): array
    {
        return [
            new TwigFunction(
                'bitbag_cms_render_content_elements',
                [RenderContentElementsRuntime::class, 'render'],
                ['is_safe' => ['html']],
            ),
        ];
    }
}
