<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "piwikintegration".
 *
 * Auto generated 11-03-2013 20:23
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title'            => 'Matomo Backend integration',
    'description'      => 'Uses EXT:piwik to inserts Data in the HTML header and gives BE-Users the right to see the data for their sites. Autoupdate of Matomo will work as TYPO3-Admin!',
    'category'         => 'module',
    'version'          => '4.6.0',
    'module'           => 'mod1',
    'state'            => 'beta',
    'uploadfolder'     => 0,
    'createDirs'       => '',
    'clearcacheonload' => 0,
    'author'           => 'Kay Strobach',
    'author_email'     => 'kay.strobach@typo3.org',
    'author_company'   => '',
    'createDirs' => 'typo3temp/piwikintegration',
    'constraints'      => [
        'depends' => [
            'php'   => '5.5.0-7.2.99',
            'typo3' => '8.7.99',
        ],
        'conflicts' => [
            'dbal' => '1.0.0-99.0.0',
        ],
        'suggests' => [
            'piwik' => '2.0.0-2.999.0',
        ],
    ],
];
