<?php
$locale = 'en-US';
$domain = 'messages';
$results = putenv("LC_ALL=$locale");
if (!$results) {
    exit ('putenv failed');
}

$results = setlocale(LC_ALL, $locale);
if (!$results) {
    exit ('setlocale failed: locale function is not available on this platform, or the given local does not exist in this environment');
}

$results = bindtextdomain($domain, "./locale");
echo 'new text domain is set: ' . $results. "\n";

$results = textdomain($domain);
echo 'current message domain is set: ' . $results. "\n";

echo gettext("Hello world") . "\n";
echo ngettext("%d car", "%d cars", 3) . "\n";
echo gettext("How are you?");