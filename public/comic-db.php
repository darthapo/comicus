<?php

// Path to the comics images, relative to this file:
$comics_path= "comics/";

// You probably don't need to edit anything pase this point: -------------------

$file_blacklist= array( ".", "..");
$comic_exts= array( '.jpg', '.jpe', '.jpeg', '.gif', '.png');

$now= floor(( time() / 60) / 60);
$comics_db= array();
$file_list = scandir( $comics_path);

// function msToDays( ms) { return Math.floor(((ms / 1000) / 60) / 60).toString(36) }

foreach( $file_list as $key=>$filename) {

  if(! in_array( $filename, $file_blacklist)) {
    list( $index, $date, $story, $title)= split( '[_]', $filename);
    $time= intval( $date, 36);
    $ext = "." . substr( strrchr( $filename, "."), 1);


    if( in_array( $ext, $comic_exts) && $time < $now) {
      $comics_db[] = array(
        "id"=> $date,
        "index"=> $index,
        "story"=> urldecode( $story),
        "title"=> urldecode( basename( $title, $ext)),
        "pub"=> $time,
        "file"=> $comics_path . $filename
      );
    }
  }
}

header( 'Content-type: text');

echo json_encode( $comics_db);
