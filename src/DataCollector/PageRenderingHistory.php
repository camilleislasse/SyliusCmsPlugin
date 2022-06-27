<?php

/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * You can find more information about us on https://bitbag.io and write us
 * an email on hello@bitbag.io.
 */

declare(strict_types=1);

namespace BitBag\SyliusCmsPlugin\DataCollector;

use BitBag\SyliusCmsPlugin\Entity\PageInterface;

final class PageRenderingHistory implements PageRenderingHistoryInterface
{
    /** @var array */
    private $currentlyRendered = [];

    public function startRendering(PageInterface $page): void
    {
        $this->currentlyRendered[] = $page;
    }

    public function startRenderingMultiple(array $pages): void
    {
        $this->currentlyRendered = array_merge($this->currentlyRendered, $pages);
    }

    public function getRenderedHistory(): array
    {
        return $this->currentlyRendered;
    }

    public function reset(): void
    {
        $this->currentlyRendered = [];
    }
}
