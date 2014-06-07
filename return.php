<?php
require_once 'bootstrap.php';

use PayPal\Auth\OpenID\PPOpenIdTokeninfo;
use PayPal\Auth\OpenID\PPOpenIdUserinfo;

$token = PPOpenIdTokeninfo::createFromAuthorizationCode(
  array(
    'code' => $_GET['code'],
    'client_id' => 'ATaIxhBBRK_7ufNny0euc1nzXvGU56ClU-FE73vtNefqkrxy7bNQQ7tg2aeB',
    'client_secret' => 'EIhGXxA4pc3iArrBoddTzFLqQAB8NgJLeBZwjBgfF3wCSlz5kKE1ZW8O8snb'
  )
);

$user = PPOpenIdUserinfo::getUserinfo(
  array(
    'access_token' => $token->getAccessToken()
  )
);

$_SESSION['name'] = $user->name;

?>

<script charset="utf-8">
  window.opener.location.href = window.opener.location.href;
  window.close();
</script>
