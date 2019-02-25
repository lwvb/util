<?php

if ($_SERVER['REQUEST_METHOD'] == 'GET' ) {
  include('view.html');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  echo json_encode($_SERVER['REMOTE_ADDR']);
}

