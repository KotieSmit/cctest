<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Kotie Smit
 * Date: 2013/09/18
 * Time: 7:20 AM
 * To change this template use File | Settings | File Templates.
 */

namespace Codeception\Module;

class TestHelper extends \Codeception\Module
{
    /**
     * Signup for email from road block
     * @param WebGuy $I
     * @param string $gender
     */
    public function signupForNewslettersFromRoadblock(\WebGuy $I, $gender = 'female')
    {
        $I->am("a visitor");
        $I->wantTo('signup for newsletters on the road block');
        $I->amOnPage('/');
        $I->see('Close', '#rbClose');
        $I->fillField("#NewsletterForm_email_rb", self::_getEmailAddress());
        if ($gender == 'female') {
            $I->click('#newsletter_gender_rb_f');
        } else {
            $I->click('#newsletter_gender_rb_m');
        }
        $I->click('#newsletter_gender_rb_submit');
        sleep(10);
        $I->reloadPage();

        $I->dontSeeElement('#roadblock');
    }

    /**
     * Signup for email from top of home page
     * @param WebGuy $I
     * @param string $gender
     */
    public function signupForNewslettersFromHomePageTop(\WebGuy $I, $gender = 'female')
    {
        $I->am("a visitor");
        $I->wantTo('signup for newsletters from the top of the home page as a ' . $gender);
        $I->amOnPage('/');
        $I->fillField("//div[@id='hpNl']/div/div[4]/input", self::_getEmailAddress());
        if ($gender == 'female') {
            $I->click('newsletetter_submit_female');
        } else {
            $I->click('newsletetter_submit_male');
        }
        sleep(3);
        $I->see("Thank you for signing up.", '.newsletterSuccess');
    }

    public function signupForNewslettersFromPageFooter(\WebGuy $I, $page = '/', $gender = 'female')
    {
        $I->am("a visitor");
        $I->wantTo('signup for newsletters from the top of the page footer as a ' . $gender);
        $I->amOnPage($page);
        $I->fillField("#NewsletterForm_email_ft", self::_getEmailAddress());
        if ($gender == 'female') {
            $I->click('newsletter_ft_signup_female');
        } else {
            $I->click('newsletter_ft_signup_male');
        }
        sleep(3);
        if ($page == '/sports/') {
            $I->see("Thank you for signing up.", '.success');
        } else {
            $I->see("Thank you for signing up.", '.newsletterSuccess');
        }

    }

    /**
     * Get a date formatted email address
     * @return string
     */
    private function _getEmailAddress()
    {
        return date("YmdHis") . "@zandotest.co.za";
    }
}

