<?php // Vars: $productTypePager

echo $productTypePager->renderNavigationTop();

echo _open('ul.elements');

foreach ($productTypePager as $productType)
{
  echo _open('li.element');

    echo _link($productType);

  echo _close('li');
}

echo _close('ul');

echo $productTypePager->renderNavigationBottom();