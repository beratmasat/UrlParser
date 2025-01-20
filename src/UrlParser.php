<?php

namespace Beratmasat\UrlParser;

class UrlParser
{
    protected $validator;

    public string $url;
    public string $scheme;
    public string $host;
    public string $port;
    public string $path;
    public string $query;
    public string $fragment;

    public function __construct(string $url)
    {
        $this->validator = new UrlValidator();

        $this->validator->validateUrl($url);
    }

}