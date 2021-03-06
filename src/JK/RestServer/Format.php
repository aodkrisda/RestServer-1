<?php
////////////////////////////////////////////////////////////////////////////////
//
// Copyright (c) 2009 Jacob Wright
//
// Permission is hereby granted, free of charge, to any person obtaining a copy
// of this software and associated documentation files (the "Software"), to deal
// in the Software without restriction, including without limitation the rights
// to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
// copies of the Software, and to permit persons to whom the Software is
// furnished to do so, subject to the following conditions:
//
// The above copyright notice and this permission notice shall be included in
// all copies or substantial portions of the Software.
//
// THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
// IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
// FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
// AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
// LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
// OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
// THE SOFTWARE.
//
////////////////////////////////////////////////////////////////////////////////

namespace JK\RestServer;

/**
 * Constants used in RestServer Class.
 */
final class Format
{
    const PLAIN = 'text/plain';
    const HTML = 'text/html';
    const JSON = 'application/json';
    const JSONP = 'application/json-p';
    const XML = 'application/xml';

    protected static $formats = array(
        'plain' => self::PLAIN,
        'txt' => self::PLAIN,
        'html' => self::HTML,
        'json' => self::JSON,
        'jsonp' => self::JSONP,
        'xml' => self::XML,
    );

    /**
     * Get the MIME type for a known format abbreviation
     *
     * @param string $format_abbreviation Supported format abbreviation (i.e. file type extension like "json" or "xml")
     * @return bool|string MIME type
     */
    public static function getMimeTypeFromFormatAbbreviation($format_abbreviation)
    {
        if (array_key_exists($format_abbreviation, self::$formats)) {
            return self::$formats[$format_abbreviation];
        } else {
            return false;
        }
    }

    /**
     * Checks if MIME type is supported
     *
     * @param string $mime_type MIME type
     * @return bool Mime type is supported
     */
    public static function isMimeTypeSupported($mime_type)
    {
        return in_array($mime_type, self::$formats);
    }
}
