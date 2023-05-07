<?php

return [
    /****************************************************************************************
     * Librarian main config
     * Values set here will overwrite default configuration from the /config dir.
     *****************************************************************************************/
    'site_name' => 'Librarian',
    'site_author' => envconfig('SITE_AUTHOR', '@erikaheidi'),
    'site_description' => envconfig('SITE_DESC', 'Librarian is a static site generator inspired by Hugo and built in PHP.'),
    'site_url' => envconfig('SITE_URL', 'http://localhost:8000'),
    'site_root' => envconfig('SITE_ROOT', '/'),
    'site_index' => 'getting-started/introduction',
    'posts_per_page' => 10,
    'social_links' => [
        'Twitter' => envconfig('LINK_TWITTER'),
        'Github'  => envconfig('LINK_GITHUB', 'https://github.com/minicli/librarian'),
        'YouTube' => envconfig('LINK_YOUTUBE'),
        'LinkedIn' => envconfig('LINK_LINKEDIN'),
        'Twitch' => envconfig('LINK_TWITCH'),
    ],
    'app_debug' => envconfig('APP_DEBUG', true),
    'app_testing_url' => envconfig('TEST_BASE_URL', 'http://localhost:8000'),
    'output_path' => envconfig('APP_OUTPUT', __DIR__ . '/public'),
    'templates_path' => envconfig('TEMPLATES_PATH', __DIR__ . '/app/Resources/themes/docs'),
];
