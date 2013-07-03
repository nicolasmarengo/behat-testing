behat-testing
=========

Behat features for testing your app front end as a user


structure
=========
```
behat-testing
|\__bin/
|\__features/
|      \__bootstrap/
|\__output/
|\__vendor/
|\__behat.yml
|\__composer.json
|\__composer.lock
|\__composer.phar
 \__README.md
```

behat.yml 
==========

```
default:
  paths:
    bootstrap:  '%behat.paths.features%/bootstrap'
  extensions:
    Behat\MinkExtension\Extension:
      base_url: http://www.amazon.co.uk
      javascript_session: sahi
      browser_name: firefox
      goutte: ~
      sahi: ~
```	  
	  
output
=======
This folder is for storing the reports output. HTML reports. For example, when running
```
bin/behat -f pretty,html features/ --out ,output/test.html --tags @simplesearch
```
This will run all the scenarios with the @search tag, it will display the pretty report on the console and will store the html report on a file called test.html in the output folder

installation of behat
=====================
follow http://docs.behat.org/quick_intro.html#installation <br />
composer.json is provided in this repo and will install all the necessary drivers. <br />
you dont need to run "behat --init" as the features and bootrap folders are provided in this repo. <br />

installation of sahi
====================
Download and install the .jar file from here http://sourceforge.net/projects/sahi/files/sahi-v44/
Sahi's homepage is http://sahi.co.in/