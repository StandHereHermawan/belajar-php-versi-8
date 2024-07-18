<?php

require_once __DIR__ . "/data/LoginRequest.php";
require_once __DIR__ . "/util/Validation.php";

$loginReq = new LoginRequest();
$loginReq->setUsername("Terry");
$loginReq->setPassword("rahasia");

try {
    validate($loginReq);
} catch (Exception $e) {
    echo $e->getMessage() . PHP_EOL . $e->getTraceAsString() . PHP_EOL;
}

# $loginReq->unsetUsername();
# $loginReq->unsetPassword();
# $loginReq->setUsername("     ");
# $loginReq->setPassword("     ");
# validate($loginReq);

$loginReq->setUsername("Terry123412341234Terry123412341234Terry123412341234Terry123412341234Terry123412341234Terry123412341234Terry123412341234Terry123412341234Terry123412341234Terry123412341234Terry123412341234Terry123412341234");
$loginReq->setPassword("rahasia12");

try {
    //code...
    validate($loginReq);
} catch (Exception $e) {
    //throw $th;
    echo $e->getMessage() . PHP_EOL . $e->getTraceAsString() . PHP_EOL;
}

$loginReq->setUsername("Terry123412341234");
$loginReq->setPassword("rahasia12");

try {
    //code...
    validate($loginReq);
    echo "Login Success" . PHP_EOL;
} catch (Exception $e) {
    //throw $th;
    echo $e->getMessage() . PHP_EOL . $e->getTraceAsString() . PHP_EOL;
}

$loginReq->setUsername("Terry123412341234");
$loginReq->setPassword("rahasi");

try {
    //code...
    validate($loginReq);
    echo "Login Success" . PHP_EOL;
} catch (Exception $e) {
    //throw $th;
    echo $e->getMessage() . PHP_EOL . $e->getTraceAsString() . PHP_EOL;
}
