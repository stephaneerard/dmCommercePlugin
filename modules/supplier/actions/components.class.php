<?php
/**
 * Supplier components
 * 
 * No redirection nor database manipulation ( insert, update, delete ) here
 */
class supplierComponents extends myFrontModuleComponents
{

  public function executeList()
  {
    $query = $this->getListQuery();
    
    $this->supplierPager = $this->getPager($query);
  }

  public function executeShow()
  {
    $query = $this->getShowQuery();
    
    $this->supplier = $this->getRecord($query);
  }


}
