# CoronaVirus(COVID-19) Framework

## Brief Information on COVID19

This API provides updated real-time data on coronavirus cases from the worldometers page and other important websites, provided by the most reputable organizations and statistical offices in the world.

**This is pre-release code and can be use to analyse data.**

More information about the data for this version can be found in [the announcement](https://www.worldometers.info/coronavirus/) on this official site.

The user guide corresponding to this version of the framework can be found
[here](https://covid-19.github.io/userguide/). 


## 🚨 Important Information 🚨  

If you notice that I make and publish many updates / versions in the api, it is due to all the data that is reaching the public. This helps me create a more complete API, with accurate data.

In turn, I have created a website to demonstrate the capabilities that this API has when using it to create web applications. I have only created it for demonstration, so it will serve as a prototype.

Sorry for the inconvenience!

**Please** read the user guide for a better explanation of how COVID-19 framework works!
The user guide updating and deployment is a bit awkward at the moment, but we are working on it!

## Repository Management

We use Github issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](https://github.com/algobasket/COVID-19/issues) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script. 
Problems with it can be raised on our forum, or as issues in the main repository.

## ❤️ Show your support
Please ⭐️ this repository if you like it or this project helped you!
Feel free to open issues or submit pull-requests to help me improving my work.
We welcome contributions from the community.


## Server Requirements

PHP version 7.2 or higher is required, with the following extensions installed: 

- [intl](http://php.net/manual/en/intl.requirements.php)
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php)
- xml (enabled by default - don't turn it off)
