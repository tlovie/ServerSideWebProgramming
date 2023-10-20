
<?php

$post_id = 1;   // assume we can get a postid from the ajax call

$comment_read = fopen("comment_contents.json", "r");  // open file for read
$data = json_decode(fread( $comment_read, 1000 ));  // read $contents from file
fclose( $comment_read );    // close file

$comment = filter_input(INPUT_GET, "comment", FILTER_SANITIZE_SPECIAL_CHARS);
// process form GET


$newpost['data'] = $comment;
$newpost['post'] = $post_id;
///$newpost['author'] ...
$data[] =  $newpost;   // add $comment to $data array


$comment_file = fopen("comment_contents.json", "w");    // open file for write
fwrite($comment_file, json_encode( $data ) );       // write out json encoded array
fclose( $comment_file );    // close file
?>
