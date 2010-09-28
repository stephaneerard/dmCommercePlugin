<?php
/**
 * City components
 * 
 * No redirection nor database manipulation ( insert, update, delete ) here
 */
class cityComponents extends myFrontModuleComponents
{

  public function executeList()
  {
    $query = $this->getListQuery();
    
    $this->cityPager = $this->getPager($query);
  }

  public function executeShow()
  {
    $query = $this->getShowQuery();
    
    $this->city = $this->getRecord($query);
  }


}
