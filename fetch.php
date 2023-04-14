<?php
if (isset($_POST['order_id']) && $_POST['order_id']!="") {
    $order_id = $_POST['order_id'];


    $url = "http://localhost:8080/api/".$order_id;

    //در ابتدا با استفاده از تابع  () curl_init یک نمونه از curl ایجاد کرده و آن را داخل متغیری به نام $client می ریزیم .
    $client = curl_init($url);
    //تایع curl_setopt گزینه ای را برای انتقال cURL تنظیم کنید
    curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
    //با استفاده از تابع ()curl_exec درخواستمان را اجرا می کنیم.
    $response = curl_exec($client);
//    $response = file_get_contents($url);
    $result = json_decode($response);

    echo "<table>";
    echo "<tr><td>Order ID:</td><td>$result->order_id</td></tr>";
    echo "<tr><td>Amount:</td><td>$result->amount</td></tr>";
    echo "<tr><td>Response Code:</td><td>$result->response_code</td></tr>";
    echo "<tr><td>Response Desc:</td><td>$result->response_desc</td></tr>";
    echo "</table>";
}
?>