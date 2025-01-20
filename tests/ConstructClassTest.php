<?php

use Beratmasat\UrlParser\UrlParser;

test('test something', function () {
    $url = new UrlParser('https://pestphp.com/docs/expectations');

    print_r($url);

    expect($url)->toBeObject();
});