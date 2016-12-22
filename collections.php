<?php

return [
    'posts' => [
        'variables' => [
            'author' => 'Default Author',
        ],

        /**
         * Sorting
         *
         *    - can specify a single criterion or an array
         *    - specifying an array of sort criteria will perform a multi-level sort
         *    - use '-' for descending sort orders; '+' is optional, sort is ascending by default
         *    - can include a helper function as a sort criterion
         */
        'sort' => ['date'],
        // 'sort' => '-date',
        // 'sort' => ['date', '-number'],
        // 'sort' => ['number', 'sort_function()'],

        /**
         * Helper functions
         *
         *    - functions automatically receive the collection item as their first parameter.
         *            $post->date_formatted()
         *    - optional parameters can be added after `$item`, and can be passed in the function call.
         *            $post->preview(100)
         */
        'helpers' => [
            'date_formatted' => function($item) {
                list($year, $month, $day) = parseDate($item['date']);
                return sprintf('%s/%s/%s', $month, $day, $year);
            },
            'preview' => function ($item, $characters = 75) {
                return substr(strip_tags($item->getContent()), 0, $characters);
            },
            'dump' => function($item) {
                return json_encode($item, JSON_PRETTY_PRINT);
            },
            'api' => function($item) {
                return [
                    'slug' => str_slug($item->title),
                    'title' => $item->title,
                    'author' => $item->author,
                    'date' => $item->date,
                    'path' => $item->path,
                ];
            },
        ],

        /**
         * Paths
         *
         *    - allow you to specify the path structure for each collection item
         *    - if omitted, path defaults to `/the-slugified-file-name`
         *    - can specify just a subdirectory, and path will default to `subdirectory/the-slugified-file-name`
         *    - can be a function, which will automatically receive the collection item as its first parameter
         *    - can use a string syntax with variable replacement, similar to Laravel's route syntax
         */
        'path' => 'posts'
        // 'path' => function ($item) {
        //     list($year, $month, $day) = parseDate($item['date']);
        //     return sprintf('%s/%s/%s/%s/%s', 'posts', $year, $month, $day, str_slug($item['title']));
        // },
        // 'path' => '{date|Y/m/d}/{title}',
        // 'path' => '{collection}/{date|Y-m-d}/{filename}',

    ],

    'people' => [
        /**
         * All these are optional; collection can simply be defined
         * by naming the collection, without any array of settings.
         */
        'helpers' => [
            'number_doubled' => function($data) {
                return $data->number * 2;
            },
            'api' => function($data) {
                return collect([
                    'name' => $data->name,
                    'number' => $data->number,
                    'role' => $data->role,
                    'content' => strip_tags($data->getContent()),
                ])->toJson();
            },
            'dump' => function($data) {
                return json_encode($data, JSON_PRETTY_PRINT);
            },
        ],
        'path' => [
            'web' => 'people/web/{date|Y-m-d}/{+filename}',
            'api' => 'people/api/{date|Y-m-d}/{+filename}'
        ],
        // 'path' => 'people'                               // just specify subdirectory, automatically appends filename
        // 'path' => 'people/{filename}'                    // same result as above
        // 'path' => '{collection}/{_filename}',            // can use custom slug separator (defaults to '-')
        // 'path' => '{date_formatted}/{date|Y}/{title}'    // supports date formatting
        // 'path' => '{collection}/{date|F-j-Y}/{title}'    // supports date formatting
        // 'path' => '{collection}/{date|Y/m/d}/{title}'    // date formats with '/' will create subdirectories
        // 'path' => function ($data) {
        //     return 'people/' . str_slug($data['filename'], '+');
        // },
        // 'path' => [
        //     'web' => '{collection}/{filename}',
        //     'api' => '{api}/{collection}/{filename}'
        // ],
        // 'path' => [
        //     'web' => function($data) { return 'web-prefix/' . $data->filename; },
        //     'api' => function($data) { return 'api-prefix/' . $data->filename; },
        // ],
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
