# BlastPad
A vibrant new launch page for your startup.


# What is BlastPad?
BlastPad is a simple landing page for your website or beta site.  Users can sign up for your launch.  
It is written in JavaScript, PHP and mySQL.


## Demo

You can see a working version at http://beta.silverhoneymedia.com. 


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
 - @honeysilvas
 - https://github.com/honeysilvas



