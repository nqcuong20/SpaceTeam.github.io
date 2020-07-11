<?php
// trang chủ để lấy giới han hiển thi 12 sp
function get_list_product_by_cat_id($cat_id) {
    $result = db_fetch_array("SELECT *,product.created_at FROM `product`,category WHERE product.cat_id = category.cat_id and product.cat_id = {$cat_id} and category.status = 1 and product.status = 1 ORDER by product.created_at DESC limit 8");
    return $result;
}

function get_list_cat_product_by_cat_id($cat_id) {
    $result = db_fetch_array("SELECT *,product.created_at FROM `product`,category WHERE product.cat_id = category.cat_id and product.cat_id = {$cat_id} and category.status = 1 and product.status = 1 ORDER by product.created_at DESC "  );
    return $result;
}

// lấy danh muc sản phẩm theo cat_id
function get_info_cat($cat_id) {
    $result = db_fetch_row("SELECT * FROM `category` WHERE `cat_id` = {$cat_id} and status = 1");
    return $result;
}

// lấy sản phẩm đổ vào detail
function get_product_by_id($id) {
    $result = db_fetch_row("SELECT * FROM `product` WHERE `id` = {$id} and status = 1");
    return $result;
}

//phân trang
function get_product($start, $num_per_page) {
    $result = db_fetch_array("SELECT * FROM `product` where status = 1 LIMIT {$start}, {$num_per_page}");
    return $result;
}
function get_search_product($start, $num_per_page,$keyword) {
    $result = db_fetch_array("select *,product.created_at from product, category where product.cat_id = category.cat_id and category.status = 1 and product.status = 1 and product_name like N'%{$keyword}%' ORDER by product.created_at DESC LIMIT {$start}, {$num_per_page}");
    return $result;
}
function get_product_categoryes($start, $num_per_page, $id) {
    $result = db_fetch_array("SELECT * FROM `product` where cat_id = {$id} and status = 1 ORDER by product.created_at DESC LIMIT {$start}, {$num_per_page}");
    return $result;
}





?>

