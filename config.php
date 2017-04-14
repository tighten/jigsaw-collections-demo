<?php

return [
    'baseUrl' => 'http://tightenco.github.io/jigsaw-collections-demo',
    'global_variable' => 'some global variable',
    'global_array' => [
        1, 2, 3
    ],
    'nested_array' => [
        [
            'name' => 'first name',
            'position' => 'first',
            'value' => 1,
        ],
        [
            'name' => 'second name',
            'position' => 'second',
            'value' => 2,
        ],
        [
            'name' => 'third name',
            'position' => 'third',
            'value' => 3,
        ],
    ],
    'helperFunction' => function($page, $parameter) {
        return 'The author is ' . $page->author . ', parameter is ' . $parameter .'.';
    },
    'isSelected' => function($page, $section) {
        return strpos($page->getPath(), $section) > -1;
    },
    'dump' => function($page) {
        return json_encode($page->toArray(), JSON_PRETTY_PRINT);
    },
    'preview' => function ($page, $content, $characters = 75) {
        return substr(strip_tags($content), 0, $characters);
    },
    'collections' => [
        'posts' => [
            /**
             * Path:
             *     - can be omitted, Jigsaw will use the collection name and filename
             *     - can just specify the subdirectory, Jigsaw automatically appends filename
             *     - can use {bracketed} tokens
             *     - can be function
             */
            'path' => 'posts',
            // 'path' => '{date|Y/m/d}/{title}',
            // 'path' => '{collection}/{date|Y-m-d}/{filename}',
            // 'path' => function ($page) {
            //     list($year, $month, $day) = parseDate($page['date']);
            //     return sprintf('%s/%s/%s/%s/%s', 'posts', $year, $month, $day, str_slug($page['title']));
            // },

            /**
             * Sorting:
             *     - can be a single criterion, or array
             *     - uses '-' for descending; '+' is optional
             *     - array of criteria will do multi-level sort
             */
            'sort' => ['date'],
            // 'sort' => ['number', 'sort_function()'],
            // 'sort' => ['date', '-number'],

            'author' => 'Default Author',
            'preview' => function ($page, $characters = 75) {
                return substr(strip_tags($page->getContent()), 0, $characters);
            },
            'postIsSelected' => function($page, $current_page) {
                return $page->getPath() == $current_page->getPath();
            },
            'dateFormatted' => function($page) {
                list($year, $month, $day) = parseDate($page['date']);
                return sprintf('%s/%s/%s', $month, $day, $year);
            },
            'api' => function($page) {
                return [
                    'slug' => str_slug($page->title),
                    'title' => $page->title,
                    'author' => $page->author,
                    'date' => $page->date,
                    'path' => $page->getPath(),
                ];
            },
        ],
        'people' => [
            'path' => [
                'web' => 'people/web/{date|Y-m-d}/{+filename}',
                'api' => 'people/api/{date|Y-m-d}/{+filename}'
            ],
            'numberDoubled' => function($page) {
                return $page->number * 2;
            },
            'api' => function($page) {
                return collect([
                    'name' => $page->name,
                    'number' => $page->number,
                    'role' => $page->role,
                    'content' => strip_tags($page->getContent()),
                ])->toJson();
            },
        ],
    ],
];

function parseDate($timestamp) {
    $date = DateTime::createFromFormat('U', $timestamp);

    return [
        $date->format('Y'),
        $date->format('m'),
        $date->format('d'),
    ];
}
