nwblog-nodb
===========

A database-free blog platform that runs on thenaterweb framework
(github.com/thenaterhood/thenaterweb).

Briefly, thenaterweb is a simple, MVC PHP web framework, also 
available on github. More details as well as details on how to 
write apps for and use it are available in thenaterweb repository. 

What is this app? This app runs on top of the naterweb framework 
and relies on services that the framework provides. It is a simple, 
very minimalistic blog platform that does not rely on a database for 
storing data. As such, it is very barebones and not as shiny or as 
feature-rich as full fledged platforms, but it gets the job done. 

App Features
--------------
No databases! A plus for some people who may have limitations 
or opinions that restrict them from being able or willing to 
use a database. All posts are stored in json format and the 
app maintains cache files that allow for listing by title 
and searching by tag reasonably fast.

Homepage: The homepage lists several of the most recent posts 
and allows for viewing pages of older/newer posts, as is typical 
for most blog sites.

Post Pages: Each post can be viewed at a dedicated URL on its own 
page. Post pages will also display an embedded notification if the 
post a visitor is viewing is older than a year. The pages are able 
to display additional comment code from disqus or wherever with 
a little setup.

Title List: The app provides a page listing the titles of all the 
posts the app is aware of, with links to their pages.

Tag List: The app provides a page with each tag and the number of 
posts associated with each tag. Each tag can be clicked to view 
the posts associated with it on a separate page.

Basic Management: The platform offers basic management of blog 
posts, creating and editing existing ones. Currently there is no 
delete functionality but as posts are stored as files it's fairly 
easy to log into the site over FTP and find and remove files as 
needed.

Feeds: The blog platform works with the existing naterweb feed 
system to provide RSS/ATOM feeds (depending on the configuration 
of thenaterweb). 

Installation
--------------
After installing thenaterweb and configuring it per the instructions 
included in its readme, there will be a folder in the web root 
with the name "controller." Clone this repository into a subdirectory 
of that folder, then rename the subdirectory to "blog" or another 
name of your choosing. This is the name that appears in the URL 
(i.e example.com/YourBlog). If using a name other than "blog", the 
main.php file will need to be adjusted by changing the class name to 
match the directory name and changing  BLOG_ROOT in the constructor 
to the name you chose, in caps (i.e, YOURBLOG_ROOT). From there, you 
can then modify the configuration file config.xml, which is 
commented verbosely, to match your setup. After making sure any directories 
referenced in the config exist, you should be good to go.

To use the online management, you will need to configure thenaterweb 
authentication system by adding your user. The online management 
can be reached at example.com/YourBlog/manage and via the 
webadmin panel if you choose to have that installed. Thenaterweb 
authentication system handles logins.

