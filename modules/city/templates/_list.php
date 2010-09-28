<?php // Vars: $cityPager

echo $cityPager->renderNavigationTop();

echo _open('ul.elements');

foreach ($cityPager as $city)
{
  echo _open('li.element');

    echo $city;

  echo _close('li');
}

echo _close('ul');

echo $cityPager->renderNavigationBottom();