<?php

/*  | This extension is made with ❤ for TYPO3 CMS and is licensed
 *  | under GNU General Public License.
 *  |
 *  | (c) 2016-2026 Armin Vieweg <armin@v.ieweg.de>
 */

// phpcs:disable
$EM_CONF['min'] = [
    'title' => 'Minifier for TYPO3 CMS',
    'description' => 'Compresses HTML output of TYPO3. Full composer support.',
    'category' => 'fe',
    'author' => 'Armin Vieweg',
    'author_email' => 'armin@v.ieweg.de',
    'state' => 'stable',
    'version' => '4.0.0',
    'constraints' => [
        'depends' => [
            'php' => '8.4.0-8.4.99',
            'typo3' => '14.3.0-14.9.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
// phpcs:enable
