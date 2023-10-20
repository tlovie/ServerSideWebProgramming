<?php

$post_id = 1;   // assume we can get a postid from the ajax call

$comment_read = fopen("comment_contents.json", "r");  // open file for read
$data = json_decode(fread( $comment_read, 1000 ), true);  // read $contents from file
fclose( $comment_read );    // close file

$out = '';

foreach( $data as $single ) {
    $out .= "<li>" . $single['data'] . "</li>";

}

echo $out;

?>