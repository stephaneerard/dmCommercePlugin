<?php // Vars: $manufacturerPager

echo $manufacturerPager->renderNavigationTop();

echo _open('ul.elements');

foreach ($manufacturerPager as $manufacturer)
{
  echo _open('li.element');

    echo _link($manufacturer);

  echo _close('li');
}

echo _close('ul');

echo $manufacturerPager->renderNavigationBottom();