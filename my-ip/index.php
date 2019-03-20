<?php

function setCorsHeader() {
  header('Access-Control-Allow-Origin: *');
}

function getIp() {
  if($_SERVER['HTTP_X_FORWARDED_FOR']) {
    return explode(',', $_SERVER['HTTP_X_FORWARDED_FOR'])[0];
  }
  return $_SERVER['REMOTE_ADDR'];
}

function renderBody() {
  if ($_SERVER['REQUEST_METHOD'] == 'GET' ) {
    include('view.html');
  }

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo json_encode(getIp());
  }
}

setCorsHeader();
renderBody();
