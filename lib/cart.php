<?php

function add_cart($id, $item, $sl) {
    if (!empty($sl)) {
        $qty = $sl;
    } else {
        $qty = 1;
    }
    if (isset($_SESSION['cart']) && array_key_exists($id, $_SESSION['cart']['buy'])) {
        //$qty = số lg bên trong giỏ hàng + 1
        $qty = $_SESSION['cart']['buy'][$id]['qty'] + 1;
    }
    return $_SESSION['cart']['buy'][$id] = array(// lưu thông tin mua sản phẩm:buy
        'id' => $item['id'],
        'product_name' => $item['product_name'],
        'price_new' => $item['price_new'],
        'product_thumb' => $item['product_thumb'],
        'qty' => $qty,
        'qty_product'=> $item['qty_product'],
        'sub_total' => $item['price_new'] * $qty // tổng
    );
    // Cập nhật hóa đơn
    update_info_cart();
}

function update_info_cart() {
    if (isset($_SESSION['cart'])) {
        $num_order = 0;
        $total = 0;
        foreach ($_SESSION['cart']['buy'] as $item) {
            $num_order += $item['qty'];
            $total += $item['sub_total'];
        }
        return $_SESSION['cart']['info'] = array(// lưu thông tin hóa đơn: info
            'num_order' => $num_order, // tổng số lg
            'total' => $total
        );
    }
}


?>

