<?php
function get_list_price_under_10m($cat_id){
    $result = db_fetch_array("SELECT * FROM `product` WHERE cat_id = $cat_id and status = 1 and `price_new`< 10000000");
    return $result;
}
function get_list_price_10m_to_15m($cat_id){
    $result = db_fetch_array("SELECT * FROM `product` WHERE cat_id = $cat_id and status = 1 and `price_new`>= 10000000 and `price_new`<= 15000000");
    return $result;
}
?>
