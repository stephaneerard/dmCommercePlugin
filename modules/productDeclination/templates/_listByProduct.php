<?php // Vars: $productDeclinationPager

echo $productDeclinationPager->renderNavigationTop();

echo _open('ul.elements');

foreach ($productDeclinationPager as $productDeclination)
{
  echo _open('li.element');

    echo _link($productDeclination);

  echo _close('li');
}

echo _close('ul');

echo $productDeclinationPager->renderNavigationBottom();