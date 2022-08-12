# How to contribute to APIM-DEMO-API?

Hello there, thank you for reviewing our contribution notes. In this contributors information document you will learn why this project got started, how the project is being developed and what is being expected from you when you would like to participate in the development.

## Why was this project created?

Whenever a development team created a new API project, it had to be created in [Azure API Management] by the API Ops team and any change on this API project had to be handed over from the development team to API Ops team. With the growing number of API projects in organizations, the need to give that responsibility to the development teams was growing. This project explores the premise of [Azure APIOps] to fulfill this workflow.

## Development workflow and requirements

This project is written with PHP 8.0. At the time of starting this project, Linux App Services don't support 8.1 yet and Windows App Services are no longer maintained.

I apply Test-Driven Development practices to create this library, because it allows me to experiment ideas quickly and keeps the code clean and on target.

- PHP: 8.0

## How you can help?

Developing this solution by myself takes a while, especially since I'm spending my spare time to work on it. If you see a typo in the documentation or an error in the code, please fix the issue and submit a [pull request].

Lastly, if you use this demo application, let me know how it solves your problems. Positive feedback is nice, but if the onboarding process is too complex, the features are not working as expected or things are broken in your environment, [create an issue]! The sooner a defect is reported, the faster it can be solved.

[Azure API Management]: https://azure.microsoft.com/en-us/services/api-management/
[Azure APIOps]: https://docs.microsoft.com/en-us/azure/architecture/example-scenario/devops/automated-api-deployments-apiops
[create an issue]: https://docs.github.com/en/issues/tracking-your-work-with-issues/creating-an-issue
[pull request]: https://docs.github.com/en/pull-requests/collaborating-with-pull-requests/proposing-changes-to-your-work-with-pull-requests/creating-a-pull-request