@tool @tool_generator @_file_upload
Feature: Create testing scenarios using generators
  In order to execute manual tests
  As a developer
  I need to use a feature file to execute generators into the current instance

  @javascript
  Scenario: Create a testing scenario with a course enrolled users and activities
    Given I log in as "admin"
    And I navigate to "Development > Create testing scenarios" in site administration
    When I upload "admin/tool/generator/tests/fixtures/testscenario/scenario.feature" file to "Feature file" filemanager
    And I press "Import"
    And I should see "Scenario: Create course content"
    Then I am on the "C1" "Course" page
    And I should see "Activity sample 1" in the "Section 1" "section"
    And I should see "Activity sample 2" in the "Section 1" "section"
    And I navigate to course participants
    And I should see "Teacher Test1"
    And I should see "Student Test1"
    And I should see "Student Test2"
    And I should see "Student Test3"
    And I should see "Student Test4"
    And I should see "Student Test5"
    And I set the field "Participants tertiary navigation" to "Enrolment methods"
    And I click on "Edit" "link" in the "Manual enrolments" "table_row"
    And the field "Send course welcome message" matches value "No"
    And I navigate to "Plugins > Enrolments > Manual enrolments" in site administration
    And the field "Send course welcome message" matches value "No"

  @javascript
  Scenario: Prevent creating a testing scenario with no steps to execute
    Given I log in as "admin"
    And I navigate to "Development > Create testing scenarios" in site administration
    When I upload "admin/tool/generator/tests/fixtures/testscenario/scenario_wrongempty.feature" file to "Feature file" filemanager
    And I press "Import"
    Then I should see "There are no steps to execute in the file."

  @javascript
  Scenario: Prevent creating a testing scenario with only background steps to execute
    Given I log in as "admin"
    And I navigate to "Development > Create testing scenarios" in site administration
    When I upload "admin/tool/generator/tests/fixtures/testscenario/scenario_wrongonlybackground.feature" file to "Feature file" filemanager
    And I press "Import"
    Then I should see "There are no steps to execute in the file."

  @javascript
  Scenario: Prevent creating a testing scenario with a wrong file format
    Given I log in as "admin"
    And I navigate to "Development > Create testing scenarios" in site administration
    When I upload "admin/tool/generator/tests/fixtures/testscenario/scenario_wrongformat.feature" file to "Feature file" filemanager
    And I press "Import"
    Then I should see "Error parsing feature file"

  @javascript
  Scenario: Prevent creating a testing scenario with non generator steps
    Given I log in as "admin"
    And I navigate to "Development > Create testing scenarios" in site administration
    When I upload "admin/tool/generator/tests/fixtures/testscenario/scenario_wrongstep.feature" file to "Feature file" filemanager
    And I press "Import"
    Then I should see "The file format is not valid or contains invalid steps"

  @javascript
  Scenario: Create a testing scenario from a scenario outline
    Given I log in as "admin"
    And I navigate to "Development > Create testing scenarios" in site administration
    When I upload "admin/tool/generator/tests/fixtures/testscenario/scenario_outline.feature" file to "Feature file" filemanager
    And I press "Import"
    And I should see "Example: creating test scenarios using an outline (1)"
    And I should see "Example: creating test scenarios using an outline (2)"
    And I should see "Example: creating test scenarios using an outline (3)"
    Then I am on the "C1" "Course" page
    And I should see "Course 1" in the "page-header" "region"
    And I am on the "C2" "Course" page
    And I should see "Course 2" in the "page-header" "region"
    And I am on the "C3" "Course" page
    And I should see "Course 3" in the "page-header" "region"
