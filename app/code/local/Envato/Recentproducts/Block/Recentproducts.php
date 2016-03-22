<?php
// app/code/local/Envato/Recentproducts/Block/Recentproducts.php
class Envato_Recentproducts_Block_Recentproducts extends Mage_Core_Block_Template {
    public function getRecentProducts() {
        // call model to fetch data
        $arr_products = array();
        $products = Mage::getModel("recentproducts/recentproducts")­>getRecentProducts();

    foreach ($products as $product) {
        $arr_products[] = array(
            'id' => $product­>getId(),
            'name' => $product­>getName(),
            'url' => $product­>getProductUrl(),
        );
    }

    return $arr_products;
  }
}