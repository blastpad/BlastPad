# BlastPad

[![Join the chat at https://gitter.im/blastpad/BlastPad](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/blastpad/BlastPad?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)
BlastPad is a website builder that is as easy to use as a content management system and as flexible as a framework. 


# What is BlastPad?

![Alt text](/src/library/blastpad/blastpad/screenshot/blastpad_screenshot.jpg)

It's still a work in progress but right now, you can create a simple launch website that collects users.  BlastPad works beautifully out of the box with a jumbo headline, a call to action and a simple sign up form so users can sign up for your site.  After signing up, users can share your website on Facebook, Twitter and other social media sites.  Websites created with BlastPad are always responsive, mobile-friendly and SEO-ready. 

There is still a lot of work to be done but eventually, BlastPad will have an intuitive interface for building and managing sites that is as easy to use as a content management system and as flexible as a framework.  

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
 

 
# How to Install BlastPad

## Prerequisites

 - A web server with PHP and a database.

 
## Supported databases

BlastPad is database-agnostic.  Supported database servers include:

  - MySQL
  - PostgreSQL
  - SQLite
  - CUBRID
  - MS SQL Server
  - Firebird
  - IBM
  - Informix
  - Oracle
  - ODBC and DB2
  - 4D

  
## Installation  
  
There are 3 ways to set up BlastPad.  You can either have it hosted on BlastPad, hosted on your local computer or hosted on your own server.

### Hosted on BlastPad.
  - Go to http://blastpad.co.
  - Sign up for an account.

### Hosted on your local computer.  
  - Setup PHP on your local computer if you don't already have it. 
   - If you don't have PHP set up on your local computer, the easiest way to get setup is by downloading and installing XAMPP from https://www.apachefriends.org/index.html .   
 
  - Download the code. 
   - Go to http://blastpad.github.io/BlastPad/
   - Click the button that says "Download ZIP".
   
  - Then unzip your code and put it in Xampp's htdocs folder, it's usually something like c://xampp/htdocs/blastpad.  
  
  - Run your XAMPP control panel to start Apache and mySQL.  
   - Then go to your browser and type http://localhost/blastpad 
  
  - Create a new database on your server.
   - Import the file "database.sql" from the directory "script/sql" into your database.
  
  - Follow the instructions below on "How to Customize".
 
### Hosted on your own server. 
  - Download the code.
   - Go to http://blastpad.github.io/BlastPad/
   - Click the button that says "Download ZIP".
   - Unzip the file to your desktop.

  - Upload the files to your server.  
 
  - Create a new database on your server.
   - Import the file "database.sql" from the directory "script/sql" into your database.
   
  - Follow the instructions below on "How to Customize".

 
## How to Customize

 - Open the file named "config.php" from the "custom" directory with a text editor such as Notepad.  
   Add your database login information. 
  
			"server" 			=> "localhost",
			"database" 			=> "putdatabasenamehere",
			"username" 			=> "putusernamehere",
			"password" 			=> "putpasswordhere",

 - Open the file named "customize.php" from the "custom" directory with a text editor such as Notepad.
   Replace the strings with your own text.
 
		// The title of your website or company.
		$title = "BlastPad";
	
		// The subheading.
		$tagline = "A bold new way to launch your website.";
	
		// Your Google Analytics tracking code (enter just your account number which typically starts with UA-
		$google_analytics_code = "UA-0000000-00";


# License

This is released under the GPL license so feel free to use.


# Contributions

Contributions are most welcome!   We welcome contributions of code (front-end and back-end), design, documentation, support, marketing, translation, SEO and more!  

This is a great open-source project for beginners whether you are new to programming or new to contributing to open-source projects.  We have good first bugs, mentored bugs, bugs for pair programming if you need some guidance.

We also welcome contributors of all levels. 

Fork from GitHub at https://github.com/blastpad/BlastPad, create a pull request or chat with us at [![Join the chat at https://gitter.im/honeysilvas/BlastPad](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/honeysilvas/BlastPad?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)

You can also email me for more information.

Please read the file contributing.MD for more information about contributing to this project.


# Credits

 - Honey Silvas (@honeysilvas)
 - (Add your name here by contributing.)


# Security 
 
We take security seriously.  Please report security vulnerabilities responsibly by emailing me PRIVATELY at honeysilvas@gmail.com. 


# Help and Support

For help with using BlastPad, you can start a new thread at http://zenanswer.com.  

Or you can chat with us live at [![Join the chat at https://gitter.im/honeysilvas/BlastPad](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/honeysilvas/BlastPad?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)


# Contact Information

For bug reports, feature requests, questions, or corrections, please contact me at:

 - honeysilvas@gmail.com
 - Site: http://blastpad.co
 - Forum: http://zenanswer.com
 - @theblastpad
 - GitHub: https://github.com/blastpad/BlastPad
 [![Join the chat at https://gitter.im/honeysilvas/BlastPad](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/honeysilvas/BlastPad?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)



