# BlastPad
BlastPad is a framework for easily creating one-page sites. 



# What is BlastPad?

![Alt text](/blastpad_source/0.1.0/screenshot/blastpad_screenshot.png)

Create a simple one-page website that lets users sign up.  BlastPad works beautifully out of the box with a jumbo headline, a call to action and a simple sign up form so users can sign up for your site.  After signing up, users can share your website on Facebook, Twitter and other social media sites.  Websites created with BlastPad are always responsive, mobile-friendly and SEO-ready. 

BlastPad is open-source so you can set it up on your own server or you can have us host your site for free.

It is written in HTML, CSS, JavaScript and PHP.



## Demo

You can see a working version at http://blastpad.co.


## Features

 - Coming soon page.
 - Collect email addresses.
 - Share with Facebook and Twitter.
 - Free!
 - Open source.
 - Responsive web design.
 - Mobile-friendly.
 - Optimized for search engines.
 - Database-agnostic.
 - Plays well with third-party libraries and other frameworks.
 
![Alt text](/blastpad_source/0.1.0/screenshot/feature.png)
 


# How to Install BlastPad

## Prerequisites

 - A web server with PHP and a database.

We recommend PHP version 5.6 or higher for security reasons, but we support legacy servers starting at PHP 5.2.4+ (not recommended for security reasons).



## Supported databases

BlastPad is database-agnostic.  Supported database servers include:

  - MySQL
  - MariaDB
  - PostgreSQL
  - CUBRID
  - MS SQL Server
  - Firebird
  - IBM
  - Informix
  - Oracle
  - ODBC and DB2
  - 4D



## Installation  
  
There are 3 ways to set up BlastPad.  You can either have it hosted on BlastPad.co, hosted on your local computer or hosted on your own server.


### (Easy) Hosted on BlastPad.  

  - Go to http://blastpad.co.
  - Sign up for an account (not live yet, still in closed beta).

  
### Hosted on your local computer.  

  - Setup PHP on your local computer if you don't already have it. 
   - If you don't have PHP set up on your local computer, the easiest way to get setup is by downloading and installing XAMPP from https://www.apachefriends.org/index.html .   
 
  - Download the BlastPad code. 
   - Go to http://blastpad.github.io/BlastPad/
   - Click the button that says "Download ZIP".
   
  - Unzip your code and place it in your htdocs folder.  If you are using XAMPP, it's usually something like c://xampp/htdocs/.  
  
  - Run your XAMPP control panel to start Apache and mySQL.  
   - Then go to your browser and type http://localhost/blastpad where blastpad is the name of the folder you unzipped to.
  
  - Create a new database on your server.
   - Import the file "database.sql" from the directory "blastpad_source\0.1.0\sql" (where 0.1.0 is your BlastPad version) into your database.
  
  - Follow the instructions below on "How to Customize".


### Hosted on your own server. 

  - Download the code.
   - Go to http://blastpad.github.io/BlastPad/
   - Click the button that says "Download ZIP".
   - Unzip the file to your desktop.

  - Upload the files to your server.  
 
  - Create a new database on your server.  
   - If using mySQL, use "utf8mb4_unicode_ci" as collation.
   - Import the file "database.sql" from the directory "blastpad_source\0.1.0\sql" (where 0.1.0 is your BlastPad version) into your database.
   
  - Follow the instructions below on "How to Customize".

 
## How to Customize

 - Go to the "blastpad_custom\config\production" directory.  Copy the file "database.php.sample" and rename it to "database.php".

 - Open the file named "database.php" with a text editor such as Notepad.  
   Add your database login information. 

  	$blastpad[ "config" ][ "database_connection" ] = [	
		"username" 			=> "putusernamehere",			// Enter your database username here.
		"password" 			=> "putpasswordhere",			// Enter your database password here.
		"database" 			=> "putdatabasenamehere",		// Enter your database name here. 
			
 - The main HTML and CSS files are in the "blastpad_public\asset\blueprint\" folder.
 


# License

This is released under the GPL license so feel free to use.



# Contributions

Contributions are most welcome!   We welcome contributions of code (front-end and back-end), design, documentation, support, marketing, translation, SEO and more!  

This is a great open-source project for beginners whether you are new to programming or new to contributing to open-source projects.  We have good first bugs, mentored bugs, bugs for pair programming if you need some guidance.

We also welcome contributors of all levels. 

Fork from GitHub at https://github.com/blastpad/BlastPad, create a pull request or chat with us at [![Join the chat at https://gitter.im/blastpad/BlastPad](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/blastpad/BlastPad?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)

You can also email me for more information.

Please read the file contributing.MD for more information about contributing to this project.



# Credits

 - Honey Silvas (@honeysilvas)
 - (Add your name here by contributing.)


 
# Security 
 
We take security seriously.  Please report security vulnerabilities responsibly by emailing me PRIVATELY at honeysilvas@gmail.com. 



# Contact Information

For bug reports, feature requests, questions, or corrections, please contact me at:

 - honeysilvas@gmail.com
 - Site: http://blastpad.co
 - @theblastpad
 - GitHub: https://github.com/blastpad/BlastPad
[![Join the chat at https://gitter.im/blastpad/BlastPad](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/blastpad/BlastPad?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)