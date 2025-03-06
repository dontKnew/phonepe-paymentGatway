<?php 
const APP_URL = "http://localhost:1111/package";
// check environment...

// callback_url or webhook url
const WEBHOOK_PATH = APP_URL."/webhook.php"; // where you will be notify instantly when payment success or failed

// redirect url or response url : after payment success or failed, user will be redirect here..
// Note : ignore the warning error if you getting this.. ( you cann hide its by php code : error_reporting(0); at the top level code )
const RESPONSE_PATH = APP_URL."/response.php";

// Past heere PRODUCTION Credentials... & comment above testing credentials
// const ENV = "PRODUCTION";
// const API_KEY = "";
// const API_KEY_INDEX = ;
// const API_MERCHAT_ID = "";



// TESTING Credentials... - OK
const ENV = "UAT";
const API_KEY = "96434309-7796-489d-8924-ab56988a6076";
const API_KEY_INDEX = 1;
const API_MERCHAT_ID = "PGTESTPAYUAT86";


