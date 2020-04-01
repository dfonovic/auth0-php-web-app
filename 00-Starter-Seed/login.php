<?php
// login.php

require 'vendor/autoload.php';
use Auth0\SDK\Auth0;

$auth0 = new Auth0([
  'domain' => 'dev-70pwcc3g.eu.auth0.com',
  'client_id' => 'jXA7M34py8iQfjgjMI3yeUIboL3spLDj',
  'client_secret' => 'CGs-pkjetgqFhv1GEvFQBGQX_i3vXD2gmKG2h8R-Ocbyq-oV2jTqJfZLbnvfxeuZ',
  'redirect_uri' => 'http://port-3001.php_learninig-dfdfonovic619477.codeanyapp.com/callback',
  'scope' => 'openid profile email',
]);

$auth0->login();
