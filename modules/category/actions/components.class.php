<?php
/**
 * Category components
 * 
 * No redirection nor database manipulation ( insert, update, delete ) here
 */
class categoryComponents extends myFrontModuleComponents
{

  public function executeList()
  {
    $query = $this->getListQuery();
    
    $this->categoryPager = $this->getPager($query);
  }

  public function executeListInProduct()
  {
    $query = $this->getListQuery();
    
    $this->categoryPager = $this->getPager($query);
  }

  public function executeShow()
  {
    $query = $this->getShowQuery();
    
    $this->category = $this->getRecord($query);
  }


}
