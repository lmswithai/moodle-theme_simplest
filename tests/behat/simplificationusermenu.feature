@theme_simplest @javascript
Feature: Turn on Simplification of user menu

  Scenario: Enables simplification of user menu
    Given I log in as "admin"
    And I navigate to "Appearance > Themes > Simplest" in site administration
    And I click on "Simplification of user menu" "checkbox"
    When I press "Save changes"
    And I click on ".usermenu" "css_element"
    Then I should not see "Profil" in the ".menu" "css_element"
    And I should not see "Dashboard" in the ".menu" "css_element"
    And I should see "Change password" in the ".menu" "css_element"

  Scenario: Disables simplification of user menu
    Given the following config values are set as admin:
    | config | value | plugin |
    | simpleusermenu | 1 | theme_simplest |
    Given I log in as "admin"
    And I navigate to "Appearance > Themes > Simplest" in site administration
    And I click on "Simplification of user menu" "checkbox"
    When I press "Save changes"
    And I click on ".usermenu" "css_element"
    Then I should see "Profil" in the ".menu" "css_element"
    And I should see "Dashboard" in the ".menu" "css_element"
    And I should not see "Change password" in the ".menu" "css_element"