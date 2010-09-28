<?php
/**
 * Product components
 * 
 * No redirection nor database manipulation ( insert, update, delete ) here
 */
class productComponents extends myFrontModuleComponents
{

  public function executeListByCategory()
  {
    $query = $this->getListQuery();
    
    $this->productPager = $this->getPager($query);
  }

  public function executeListByManufacturer()
  {
    $query = $this->getListQuery();
    
    $this->productPager = $this->getPager($query);
  }

  public function executeListBySupplyer()
  {
    $query = $this->getListQuery();
    
    $this->productPager = $this->getPager($query);
  }

  public function executeShow()
  {
    $query = $this->getShowQuery();
    
    $this->product = $this->getRecord($query);
  }

  public function executeShowInCategory()
  {
    $query = $this->getShowQuery();
    
    $this->product = $this->getRecord($query);
  }


}
