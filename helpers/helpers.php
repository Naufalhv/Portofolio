<?php
// helpers.php
function base_url($path = '')
{
  $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
  $host = $_SERVER['HTTP_HOST'];
  $projectPath = dirname($_SERVER['SCRIPT_NAME']);
  $url = $protocol . $host . rtrim($projectPath, '/');
  return $url . '/' . ltrim($path, '/');
}

function current_page()
{
  return basename($_SERVER['PHP_SELF']);
}
