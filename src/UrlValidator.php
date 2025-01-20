<?php

namespace Beratmasat\UrlParser;

class UrlValidator
{
    protected $acceptedSchemes = [
        "http",
        "https",
        "mailto",
        "tel"
    ];

    public function validateUrl($url)
    {
        if (! filter_var($url, FILTER_VALIDATE_URL)) {
            return throw new \InvalidArgumentException("Invalid URL Format");
        }

        $parsedScheme = parse_url($url, PHP_URL_SCHEME);

        if (! in_array($parsedScheme, $this->acceptedSchemes)) {
            return throw new \InvalidArgumentException("Unsopported URL Schemes, Supported Schemes: ".implode(',', $this->acceptedSchemes));
        }
    }
}