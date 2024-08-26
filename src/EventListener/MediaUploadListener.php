<?php

/*
 * This file was created by developers working at BitBag
 * Do you need more information about us and what we do? Visit our https://bitbag.io website!
 * We are hiring developers from all over the world. Join us and start your new, exciting adventure and become part of us: https://bitbag.io/career
*/

declare(strict_types=1);

namespace Sylius\CmsPlugin\EventListener;

use Sylius\Bundle\ResourceBundle\Event\ResourceControllerEvent;
use Sylius\CmsPlugin\Entity\MediaInterface;
use Sylius\CmsPlugin\Resolver\MediaProviderResolverInterface;
use Webmozart\Assert\Assert;

final class MediaUploadListener
{
    public function __construct(private MediaProviderResolverInterface $mediaProviderResolver)
    {
    }

    public function uploadMedia(ResourceControllerEvent $event): void
    {
        /** @var MediaInterface|null $media */
        $media = $event->getSubject();

        Assert::isInstanceOf($media, MediaInterface::class);

        $this->mediaProviderResolver->resolveProvider($media)->upload($media);
    }
}
