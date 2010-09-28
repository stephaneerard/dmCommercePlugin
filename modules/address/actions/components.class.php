<?php
/**
 * Address components
 * 
 * No redirection nor database manipulation ( insert, update, delete ) here
 */
class addressComponents extends myFrontModuleComponents
{

  public function executeList()
  {
    $query = $this->getListQuery();
    
    $this->addressPager = $this->getPager($query);
  }

  public function executeShow()
  {
    $query = $this->getShowQuery();
    
    $this->address = $this->getRecord($query);
  }


}
