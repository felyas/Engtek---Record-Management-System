<?php

use Core\Response;

// function to dump something on the screen
function dd($value)
{
  echo "<pre>";
  var_dump($value);
  echo "</pre>";

  die();
}

// function to check the current URI
function urlIs($value)
{
    if ($value === '/') {
        return $_SERVER['REQUEST_URI'] === '/';
    }

    return strpos($_SERVER['REQUEST_URI'], $value) === 0;
}

// function to sanitize inputs
function sanitize($input) {
  $input = htmlspecialchars($input);
  $input = stripslashes($input);
  $input = trim(preg_replace('/\s+/', ' ', $input));

  return $input;
}





// function to abort
function abort($code = 404)
{
  http_response_code($code);
  view("{$code}.view.php");
  die();
}

// function to locate the main root dir
function base_path($path)
{
  return BASE_PATH . $path;
}

// function to call a views
function view($path, $attributes = [])
{
  extract($attributes);
  require base_path("views/{$path}");
}

// function to check the authorization
function authorize($condition, $status = Response::FORBIDDEN)
{
  if (!$condition) {
    abort($status);
  }
}

// function to check if the logged in user is user
function isAdmin($role)
{
  if ($role === 'admin') {
    return "text-[#2E609A] bg-[#B7D3EE]";
  } else {
    return "text-[#F9B908] bg-[#FFF5D6]";
  }
}
