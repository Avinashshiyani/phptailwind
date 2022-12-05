<?php
function button($name, $color = "orange")
{
  echo '
  <a href="#" class="p-3 px-6 pt-3 text-white bg-orange-600 rounded-full baseline hover:bg-orange-400">' . $name . ' </a>
  ';
}

function link_btn($names, $color = "green")
{
  if (is_array($names)) {
    foreach ($names as $name) {
      echo ' <a href="#" class="hover:text-' . $color . '-500">' . $name  . '</a>';
    }
  } else {
    echo ' <a href="#" class="hover:text-' . $color . '-500">' . $names . '</a>';
  }
}

function img_btn($names)
{
  $button = '<a href="#"><img src="./images/icon-%s.svg" alt="image"></a>';
  echo (is_array($names)) ? loop($button, $names) : sprintf($button, $names);
}

function loop($text, $names)
{
  $data = "";

  foreach ($names as $name) {
    $data .= sprintf($text, $name);
  }

  return $data;
}