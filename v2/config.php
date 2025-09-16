<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

const APP_URL = "https://nutrimitha.phpmasterr.com/phonepe/package";

// After payment success or failure redirect to this URL
const RESPONSE_PATH = APP_URL."/response.php";

// Past heere PRODUCTION Credentials...
// const ENV = "PRODUCTION";
// const CLIENT_ID = "";
// const CLIENT_SECRET = "";
// const CLIENT_VERSION = "1";

//TESTING Credentials... - OK
const ENV = "UAT";
const CLIENT_ID = "TEST-ANTITOOLZONLINE_250";
const CLIENT_SECRET = "OWI5ZTY2MTUtMDI2MS00MDE4LTg4N2YtOGNjODFhNDhlODYw";
const CLIENT_VERSION = "1";


