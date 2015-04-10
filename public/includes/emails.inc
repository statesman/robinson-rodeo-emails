<?php

// Div that IDs the speaker for each email
function speaker($id, $dir = 'left', $first = false) {
  $speakers = array(
    'williams' => array(
      name => 'Irene Williams',
      second => 'Williams',
      title => 'CEO, 21CT',
      url => 'williams.jpg'
    ),
    'robinson' => array(
      name => 'Karen Robinson',
      second => 'Robinson',
      title => 'Executive Director, DIR',
      url => 'robinson.jpg'
    ),
    'hebert' => array(
      name => 'Fred Hebert',
      second => 'Hebert',
      title => 'Hewlett-Packard Co.',
      url => 'no-photo.png'
    ),
    'bentley' => array(
      name => 'David Bentley',
      second => 'Bentley',
      title => 'Accenture',
      url => 'no-photo.png'
    )
  );

  $s = $speakers[$id];

  $classes = array('col-xs-12 col-sm-3 col-md-2', 'speaker');

  array_push($classes, $dir);

  if($dir == 'right') {
    array_push($classes, 'col-sm-push-1 col-md-push-1');
  }
  else {
    array_push($classes, 'col-sm-pull-8 col-md-pull-9');
  }

  if($first) {
    array_push($classes, 'first-ref');

    return '<div class="' . implode(' ', $classes) . '">' .
      '<img class="img-responsive img-circle" src="assets/' . $s['url'] . '" />' .
      '<h3>' . $s['name'] . '</h3>' .
      '<h4>' . $s['title'] . '</h4>' .
    '</div>';
  }

  array_push($classes, 'second-ref');

  return '<div class="' . implode(' ', $classes) . '">' .
    '<img class="img-responsive img-circle" src="assets/' . $s['url'] . '" />' .
    '<h3 class="hidden-xs">' . $s['second'] . '</h3>' .
    '<h3 class="hidden-sm hidden-md hidden-lg">' . $s['name'] . '</h3>' .
    '<h4 class="hidden-sm hidden-md hidden-lg">' . $s['title'] . '</h4>' .
  '</div>';
}


// Create the e-mail bubble
function email($img, $emails, $dir = 'left') {
  $classes = array('col-xs-12 col-sm-8 col-md-9');
  if($dir == 'right') {
    array_push($classes, 'col-sm-push-1 col-md-push-1');
  }
  else {
    array_push($classes, 'col-sm-push-3 col-md-push-2');
  }

  $imgSlug = explode('.', $img)[0];
  if(array_key_exists($imgSlug, $emails)) {
    $text = $emails->$imgSlug;
  }
  else {
    $text = '';
  }

  return '<div class="' . implode(' ', $classes) . '">' .
    '<div class="bubble ' . $dir . '">' .
      '<img class="img-responsive hidden-xs hidden-sm" src="assets/' . $img . '" />' .
      '<div class="hidden-md hidden-lg email-text">' . $text . '</div>' .
    '</div>' .
  '</div>';
}

// Notes above emails
function note($from, $to) {
  return '<div class="col-xs-12"><h4 class="note text-center"><i class="fa fa-reply"></i> to <span>' . $to . '</span></h4></div>';
}
