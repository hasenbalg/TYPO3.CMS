<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Editor with syntax highlighting',
    'description' => 'JavaScript-driven editor with syntax highlighting and codecompletion. Based on CodeMirror.',
    'category' => 'be',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'author' => 'Tobias Liebig, Stephan Petzl, Christian Kartnig',
    'author_email' => 'mail_typo3@etobi.de, spetzl@gmx.at, office@hahnepeter.de',
    'author_company' => '',
    'version' => '9.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '9.0.0-9.0.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
