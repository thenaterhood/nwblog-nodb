Thenaterweb Simple Blog Platform
================================

A simple blog application for thenaterweb that does not 
require a database.

Compatible with version 3.0+ of Thenaterweb.

This software is an application that runs on top of Thenaterweb 
web framework. It is NOT a standalone application.

Thenaterweb can be grabbed from https://github.com/thenaterhood/thenaterweb


Configuration
-------------
Open the config.php file and edit the settings as 
necessary. Be sure to observe standard PHP syntax 
as the file will be directly included in the blog 
application.

This application is now capable of handling blogs 
OR flat files. It relies on thenaterweb's database 
setting in order to determine which to use.

Settings can be placed in the (well commented) 
blog-config.php file.

The application supports multiple blogs. In order 
to use this capability, add additional config.php files 
with the syntax BlogName-config.php, and register BlogName 
as an application alias of blog in the index.php file.

Doesn't make sense? Check out thenaterweb wiki for more 
information.

License
-------------
Licensed under the BSD License. See the LICENSE 
file for more details.

Though not required by the license terms, please consider 
contributing back, giving feedback, or dropping a line to 
say that this software was useful to you.
