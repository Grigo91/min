<?php

namespace T3\Min\EventListener;

/*  | This extension is made with ❤ for TYPO3 CMS and is licensed
 *  | under GNU General Public License.
 *  |
 *  | (c) 2023-2025 Armin Vieweg <armin@v.ieweg.de>
 *  |     2023 Benjamin Gries <gries@iwkoeln.de>
 *  |     2023-2024 Joel Mai <mai@iwkoeln.de>
 */
use T3\Min\Tinysource;
use TYPO3\CMS\Frontend\Event\AfterCacheableContentIsGeneratedEvent;

class TinysourceEventListener
{
    private Tinysource $tinysource;

    public function __construct(Tinysource $tinysource)
    {
        $this->tinysource = $tinysource;
    }

    public function __invoke(AfterCacheableContentIsGeneratedEvent $event): void
    {
        $event->setContent($this->tinysource->tinysource($event->getContent(), $event->getRequest()));
    }
}
