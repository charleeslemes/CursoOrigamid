<?php

function handel_custom_checkout($fields){
  echo '<pre>';
  print_r($fields);


  echo 'teste';

  return $fields;

}

add_filter('woocommerce_checkout_fields' , 'handel_custom_checkout');
  
?>