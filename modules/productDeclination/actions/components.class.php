<?php
/**
 * Product Declination components
 * 
 * No redirection nor database manipulation ( insert, update, delete ) here
 */
class productDeclinationComponents extends myFrontModuleComponents
{

  public function executeListByProduct()
  {
    $query = $this->getListQuery();
    
    $this->productDeclinationPager = $this->getPager($query);
  }

  public function executeShow()
  {
    $query = $this->getShowQuery();
    
    $this->productDeclination = $this->getRecord($query);
  }

  public function executeShowInProduct()
  {
    $query = $this->getShowQuery();
    
    $this->productDeclination = $this->getRecord($query);
  }


}
