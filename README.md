# Collections plugin for Craft CMS

Use Laravel Collections in Craft

![Screenshot](resources/icon.png)

## Installation

To install Collections, follow these steps:

1. Download & unzip the file and place the `collections` directory into your `craft/plugins` directory
2. Install plugin in the Craft Control Panel under Settings > Plugins
3. The plugin folder should be named `collections` for Craft to see it.

Collections works on Craft 2.4.x and Craft 2.5.x.

## Collections Overview

Here is some good inspiration on what you can do with Collections:

- [Collections documentation](https://laravel.com/docs/5.5/collections)
- [Laravel Collections: PHP Arrays On Steroids](https://scotch.io/tutorials/laravel-collections-php-arrays-on-steroids)
- [Laravel Collections Examples on GitHub](https://github.com/fakiolinho/laravel-collections-examples)
- [Laravel Collections “when” Method](https://laravel-news.com/laravel-collections-when-method)
- [Code Bright: Eloquent Collections](https://daylerees.com/codebright-eloquent-collections/)
- [Refactoring To Collection](https://adamwathan.me/refactoring-to-collections/)
- [10 less-known (but awesome!) Laravel Collections methods](http://laraveldaily.com/10-less-known-but-awesome-laravel-collections-methods/)

## Configuring Collections

Add your macros to the config file:

```php
<?php
return [

    /** Add your macros here
     * "macros" => [
     *     'toUpper' => function () {
     *         return $this->map(function ($value) {
     *             return strtoupper($value);
     *         });
     *     },
     * ],
     *
     */

    "macros" => [

    ],

];

```

## Using Collections

### Group tags by letter:

Add this macro to your config:

```php
<?php
return [
    'macros' => [
        'tagGroups' => function () {
            return $this->groupBy(function ($tag) {
                return substr($tag->title, 0, 1);
            });
        }
    ],
];
```

```twig
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.1.2/css/bulma.css">
</head>
<body>

<div class="section hero is-primary">
    <div class="hero-body">
        <div class="container">
            <h1 class="title">Tags</h1>
            <p class="subtitle">
                Every tag on the site.
            </p>
        </div>
    </div>
</div>


<h2>Tag groups</h2>

<div class="section">
    <div class="container">
        <ul class="has-columns has-text-centered">
            {% set collection = craft.tags.group('media') | collect %}
            {% for letter, tags in collection.tagGroups() %}
                <div class="letter-group">
                    <h3 class="title is-1 letter">{{ letter }}</h3>

                    <ul>
                        {% for tag in tags %}
                            <li class="title is-5">
                                <a href="/tags/{{ tag.slug }}">{{ tag.title }}</a>
                            </li>
                        {% endfor %}
                    </ul>
                </div>
            {% endfor %}
        </ul>
    </div>
</div>

</body>
</html>
```

Brought to you by [Superbig](https://superbig.co)
