# BlastPad
Create a launch website for your startup with a blast!  


# What is BlastPad?
Get users for your startup quickly by creating a launch site with BlastPad.  BlastPad works beautifully out of the box with a jumbo headline, a call to action and a simple sign up form so users can sign up for your beta.  After signing up, users can share your website on Facebook, Twitter and other social media sites.  Websites created with BlastPad are always responsive, mobile-friendly and SEO-ready.  BlastPad is open-source so you can set it up on your own server or you can have us host your site for free.

It is written in JavaScript, PHP and mySQL.


## Demo

You can see a working version at http://blastpad.silverhoneymedia.com. 


## Prerequisites

 - A web server with PHP and mySQL.

 
## How to install

 - Download the code.
  - Download the source code for BlastPad to your local computer by clicking the button that says "Download ZIP".
  - Unzip the file to your desktop.

 - Upload the files to your server.  
 
 - Create a new database on your server.
  - Import script/sql/database.sql into your mySQL database.

 
## How to customize

 - Open the file named "config.php" with a text editor such as Notepad.  
   Add your database login information.  The important ones are:
  
			"server" 			=> "localhost",
			"database" 			=> "putdatabasenamehere",
			"username" 			=> "putusernamehere",
			"password" 			=> "putpasswordhere",

 - Open the file named "customize.php" with a text editor such as Notepad.
   Replace the strings with your own text.
 
		// The title of your website or company.
		$title = "BlastPad";
	
		// The subheading.
		$tagline = "A bold new way to launch your startup.";
	
		// Your Google Analytics tracking code (enter just your account number which typically starts with UA-
		$google_analytics_code = "UA-0000000-00";


## License

This is released under the GPL license so feel free to use.


## Contributions

Contributions are most welcome!  Fork, create a pull request or email me for more information.


## Credits

 - Honey Silvas
 - (Add your name here by contributing!)


## Help and Support

For bug reports, feature requests, questions, or corrections, please contact me at:

 - honeysilvas@gmail.com
 - http://www.zenanswer.com
 - @theblastpad
 - https://github.com/honeysilvas



