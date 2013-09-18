<?php
/**
 * Test newsletter signup from different locations
 */
global $I;

$I = new WebGuy($scenario);
$I->signupForNewslettersFromRoadblock($I);
$I->signupForNewslettersFromHomePageTop($I, 'female');
//$I->reloadPage();
/** Signup from top of home page */
$I->signupForNewslettersFromHomePageTop($I, 'male');
$I->signupForNewslettersFromHomePageTop($I, 'female');

/** Signup from footer of home page */
$I->signupForNewslettersFromPageFooter($I, '/', 'male');
$I->signupForNewslettersFromPageFooter($I, '/', 'female');

/** Signup from footer of home page */
$I->signupForNewslettersFromPageFooter($I, '/about/', 'male');
$I->signupForNewslettersFromPageFooter($I, '/about/', 'female');

/** Signup from footer of gift voucher page */
$I->signupForNewslettersFromPageFooter($I, '/giftvoucher/', 'male');
$I->signupForNewslettersFromPageFooter($I, '/giftvoucher/', 'female');

/** Signup from footer of FAQ page */
$I->signupForNewslettersFromPageFooter($I, '/faq/', 'male');
$I->signupForNewslettersFromPageFooter($I, '/faq/', 'female');

/** Signup from footer of all-products page */
$I->signupForNewslettersFromPageFooter($I, '/all-products/', 'male');
$I->signupForNewslettersFromPageFooter($I, '/all-products/', 'female');

/** Signup from footer of sports page */
$I->signupForNewslettersFromPageFooter($I, '/sports/', 'male');
$I->signupForNewslettersFromPageFooter($I, '/sports/', 'female');

?>
