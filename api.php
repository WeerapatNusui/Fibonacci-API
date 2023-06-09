<?php
    session_start();
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
    header("Access-Control-Allow-Headers: X-Requested-With");
    header("Content-Type: application/json");
    $api = $_SERVER["REQUEST_METHOD"];
    $count = intval($_GET['count']);
    if ($api == "GET" && is_int($count)) {
        if ($count >= 1 && $count <= 100) {
            if ($count == 1) {
                $result = 0;
                $num = Array(0);
                $array = Array (
                    "member-count" => $count,
                    "sequence" => $num,
                    "total" => $result
                );
            } elseif ($count == 2) {
                $result = 1;
                $num = Array(0, 1);
                $array = Array (
                    "member-count" => $count,
                    "sequence" => $num,
                    "total" => $result
                );
            } elseif ($count >= 3 && $count <= 100) {
                $n1 = 1;
                $n2 = 1;
                $num = Array(0, 1, 1);
                $result = 2;
                for ($i=0; $i < $count; $i++) {
                        if ($i >= 3) {
                        $next = $n1 + $n2;
                        $num[$i] = $next;
                        $result = $result + $next;
                        $n1 = $n2;
                        $n2 = $next;
                    }
                }
                $array = Array (
                    "member-count" => $count,
                    "sequence" => $num,
                    "total" => $result
                );
            }
            echo json_encode($array, JSON_PRETTY_PRINT);
        }
    }
?>