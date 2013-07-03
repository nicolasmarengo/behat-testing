<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;

//
// Require 3rd-party libraries here:
//
//   require_once 'PHPUnit/Autoload.php';
//   require_once 'PHPUnit/Framework/Assert/Functions.php';
//

/**
 * Features context.
 */
class FeatureContext extends MinkContext
{
    /**
     * Initializes context.
     * Every scenario gets it's own context object.
     *
     * @param array $parameters context parameters (set them up through behat.yml)
     */
    public function __construct(array $parameters)
    {
        // Initialize your context here
    }

//
// Place your definition and hook methods here:
//
//    /**
//     * @Given /^I have done something with "([^"]*)"$/
//     */
//    public function iHaveDoneSomethingWith($argument)
//    {
//        doSomethingWith($argument);
//    }
//
 /**
     * @When /^I click on the "([^"]*)" element$/
     */
    public function iClickOnTheElement($cssQuery)
    {
        $session = $this->getSession();
        $page = $session->getPage();
        $element = $page->find('css', $cssQuery);
        $element->click();
    }
	/**
    * @Given /^wait (\d+) seconds$/
    */
	public function waitSeconds($arg1)
    {
        $this->getSession()->wait(1000*$arg1);
    }
	
	  /**
     * Fills in form field with specified id|name|label|value.
     *
     * @When /^(?:|I )fill in "(?P<field>(?:[^"]|\\")*)" with hashed "(?P<value>(?:[^"]|\\")*)"$/
     * @When /^(?:|I )fill in "(?P<value>(?:[^"]|\\")*)" for hashed "(?P<field>(?:[^"]|\\")*)"$/
     */
    public function fillhashedField($field, $value)
    {
        $field = $this->fixStepArgument($field);
        $value = $this->fixStepArgument($value);
        $this->getSession()->getPage()->fillField($field, base64_decode($value));
    }

}
