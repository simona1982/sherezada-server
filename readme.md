## Context For The Technical Test

The current project (this template) consists in categorizing the treatments that a beauty business offers.


Right now, the categorization works as follows:
* Treatments belong to a Service
* A Service has many Treatments

But the project owner has asked for some changes that are described in the next section.

## Requirements

This test is divided into two parts:


## Part 1: Development API REST


Using best practices and Laravel 5.3 (this template), complete the following steps:
* Configure PostgreSQL connection using the credentials you’d like (default credentials are included in this template).
* Run the migrations included in this template
* The client needs a new category between Treatments and Services called Subservices. Create and run a new migration that modifies the current business logic to allow the following relationships (tip: check the seeds included):
  - Treatments belong to a Subservice
  - Subservices belong to a Service and a Service can have many Treatments
  - Services have many Subservices
* Run the seed included in this template (be sure that all the tables are called correctly or running the seeds will throw errors)

If all goes well at this point, you should develop an API REST which should be able to consume the following data:
* Get all Treatments with: Treatments, Services and Subservices
* Get a Treatment

## Part 2: Create a Project With Create-React-App (CRA)

With the API you just developed in the first part of this test, you should now create an application with create react app that can:

- Visualize a table with all the treatments that are being used.  Use some data table library for visualization
- Each row on the table represents a treatment, where you can visualize its Service and Subservice as well
- Each treatment must have a button that allows you to see all of the details regarding it by clicking on this button
- Each treatment must have a remove button, in addition, the action should execute a smooth erase at database level
- This table should have a search bar that allows you to filter by: Service, Subservice and Treatment

## How Do I Hand In My Project or Technical Test?

Please upload the projects into a GIT repository (please pick your preferred repository), and accompanying the test, please attach a “Read Me” file explaining in a concise, clear way how to run the finished project locally.

## Evaluation Criteria

* The Services work and return what is expected of them
* Correct use of Hooks
* Correct use of Material-UI library
* Laravel 5.3 best practices are used and respected
* Components are implemented cleanly and accorded to best practices
* Bonus points for constraint rules included in migrations
* Bonus points for using git-flow
* Bonus points for CSS best practices