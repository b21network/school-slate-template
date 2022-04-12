<?php

Git::$repositories['school-slate'] = [
    'remote' => 'git@github.com:b21network/school-slate.git',
    'originBranch' => 'emergence/layer/v1',
    'workingBranch' => 'emergence/layer/v1',
    'trees' => [
        'php-config/Emergence/WebApps/SenchaApp.config.d/school-cbl-config.php',
        'php-config/Git.config.d/school-slate.php',
        'php-config/Slate/CBL/Demonstrations/ExperienceDemonstration.config.d/experience-type.php',
        'php-config/Slate/CBL/Demonstrations/ExperienceDemonstration.config.d/performance-type.php',
        'php-config/Slate/CBL/StudentCompetency.config.d/minimum-average.php',
        'php-config/Slate/CBL/Tasks/ExperienceTask.config.d/experience-type.php',
        'webapp-plugin-builds/school-cbl-config'
    ]
];
