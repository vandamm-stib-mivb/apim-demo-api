# Azure API Management Demo API

This project is a very basic API application build with PHP that will be used as a demo to learn more about [Azure APIOps] and how the process could be implemented.

## Goal of this demo

> As a developer I want to be able to create, update, and retire my API projects in [Azure API Management] completely self-serviced with little or no help from the API Ops team.

From a development point of view, APIs are an essential step to decouple complex systems and allow teams to independently manage their part in a very complex domain. From a governance point of view, these APIs should be managed centrally so they adhere to organizational rules and regulations. [Azure API Management] offers organizations these functionalities (and much more) out of the box. But with growing development, consumption, and integration of APIs the load on the API Ops teams can be overwhelming.

[Azure APIOps] addresses this burden on the API Ops teams to the development and integration teams themselves. Each team now is responsible for creating, updating, and retiring their API project(s) while still inherit the policies and rules set in [Azure API Management] by the API Ops teams.

This demo should explore the possibilities of [Azure APIOps] and confirm the following hypothesis: **can development teams self-service their APIs within [Azure API Management]?**

## Requirements for this demo

1. Source code in [GIT]
2. GIT Repository in [Azure DevOps][^ Alternative repos like GitHub or GitLab are also possible, but are not part of this demo]
3. CI/CD Pipelines in [Azure DevOps]
4. Appetite for learning, exploring, and sharing knowledge 😊

## Available Resources to learn more

- **Azure APIOps documentation:**: https://docs.microsoft.com/en-us/azure/architecture/example-scenario/devops/automated-api-deployments-apiops
- **Azure APIOps Lab Environment:** https://azure.github.io/apiops/
- **Azure APIOps Repository:** https://github.com/azure/apiops
- **Microsoft DevRadio YouTube - APIOps with Azure API Managament (1: Introduction):** https://youtu.be/s_4-oEKBgk4
- **Microsoft DevRadio YouTube - APIOps with Azure API Managament (2: Demo):** https://youtu.be/c-VZjtAaZSM

[Azure API Management]: https://azure.microsoft.com/en-us/services/api-management/
[Azure APIOps]: https://docs.microsoft.com/en-us/azure/architecture/example-scenario/devops/automated-api-deployments-apiops
[GIT]: https://www.git-scm.com