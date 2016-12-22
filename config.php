<?php

return [
    'production' => true,

    /**
     * Base URL
     *
     *    - if defined, the `$url` variable will append this to the `$path` value for
     *      collection items, resulting in a fully-qualified URL for links
     */
    'baseUrl' => 'https://tightenco.github.io/jigsaw-collections-demo',

    /**
     * Helper functions
     *
     *     - same as with functions defined in collections.php, but available globally
     */
    'helpers' => [
        'selected' => function($data, $section) {
            return strpos($data['path'], $section) > -1;
        },
        /**
         * Functions can accept a local variable from a file,
         * defined in the YAML frontmatter of a Markdown file
         */
        'helperFunction' => function($data, $parameter) {
            return 'The author is ' . $data->author . ', parameter is ' . $parameter .'.';
        },
        'dump' => function($data) {
            return json_encode($data->toArray(), JSON_PRETTY_PRINT);
        },
        'global_preview' => function ($data, $content, $characters = 75) {
            return substr(strip_tags($content), 0, $characters);
        },
    ],
    'global_variable' => 'some global variable',
    'global_array' => [
        1, 2, 3
    ],
    'nested_array' => [
        [
            'name' => 'first name',
            'position' => 'first',
        ],
        [
            'name' => 'second name',
            'position' => 'second',
        ],
        [
            'name' => 'third name',
            'position' => 'third',
        ],
    ],
];
