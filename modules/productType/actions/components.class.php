<?php
/**
 * Product Type components
 * 
 * No redirection nor database manipulation ( insert, update, delete ) here
 */
class productTypeComponents extends myFrontModuleComponents
{

  public function executeList()
  {
    $query = $this->getListQuery();
    
    $this->productTypePager = $this->getPager($query);
  }

  public function executeShow()
  {
    $query = $this->getShowQuery();
    
    $this->productType = $this->getRecord($query);
  }


}
