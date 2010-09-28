<?php
/**
 * Manufacturer components
 * 
 * No redirection nor database manipulation ( insert, update, delete ) here
 */
class manufacturerComponents extends myFrontModuleComponents
{

  public function executeList()
  {
    $query = $this->getListQuery();
    
    $this->manufacturerPager = $this->getPager($query);
  }

  public function executeShow()
  {
    $query = $this->getShowQuery();
    
    $this->manufacturer = $this->getRecord($query);
  }


}
