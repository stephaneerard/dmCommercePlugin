<?php // Vars: $addressPager

echo $addressPager->renderNavigationTop();

echo _open('ul.elements');

foreach ($addressPager as $address)
{
  echo _open('li.element');

    echo $address;

  echo _close('li');
}

echo _close('ul');

echo $addressPager->renderNavigationBottom();