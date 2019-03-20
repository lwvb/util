<?php

function setCorsHeader() {
  header('Access-Control-Allow-Origin: *');
}

function getIp() {
  if($_SERVER['HTTP_X_FORWARDED_FOR']) {
    return stripPort(explode(',', $_SERVER['HTTP_X_FORWARDED_FOR'])[0]);
  }
  return $_SERVER['REMOTE_ADDR'];
}
function stripPort(ip) {
  if(strpos(ip, '.') === false) {
    return ip;
  }
  return explode(':', ip)[0];
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
