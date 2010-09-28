<?php // Vars: $supplierPager

echo $supplierPager->renderNavigationTop();

echo _open('ul.elements');

foreach ($supplierPager as $supplier)
{
  echo _open('li.element');

    echo _link($supplier);

  echo _close('li');
}

echo _close('ul');

echo $supplierPager->renderNavigationBottom();