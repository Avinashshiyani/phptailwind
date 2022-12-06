<?php

function buttons($name , $color)
{
    echo '
  <a href="#" class="hidden md:block px-6  p-3  pt-2 rounded text-white bg-' . $color . '-500 rounded-full hover:bg-orange-400">' . $name . ' </a>
  ';
}

?>