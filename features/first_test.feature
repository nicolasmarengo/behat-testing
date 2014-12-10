@amazon 
Feature: Test Page

@simplesearch @javascript
Scenario: Simple search on amazon
        Given I am on "/"
	When I fill in "field-keywords" with "Business Development Driven"
	And I press "Go"
	Then I should see "Test Driven Development" 
	
@manysearches @javascript
Scenario Outline: Search on amazon
	Given I am on "/"
	And I follow "<link1>"
        And I follow "<link2>"
	Then I should <outcome> "<text>"
	
	Examples:
	| link1 	| link2 	| outcome   | text                                 |
	| Gift Cards    | Birthdays	| see       | Amazon.co.uk Printable Gift Card     |
	| Gift Cards    | Kindle	| not see   | Dolce Gusto                          |
