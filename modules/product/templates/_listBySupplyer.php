<?php // Vars: $productPager

echo $productPager->renderNavigationTop();

echo _open('ul.elements');

foreach ($productPager as $product)
{
  echo _open('li.element');

    echo _link($product);

  echo _close('li');
}

echo _close('ul');

echo $productPager->renderNavigationBottom();