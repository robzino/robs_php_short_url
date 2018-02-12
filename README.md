# robs_php_short_url
This is some basic code to make your own shorturls using LAMP.

It also uses the Apache mod-rewrite module: 
[Here](http://httpd.apache.org/docs/current/mod/mod_rewrite.html)

There are not many files here but here are some steps:
* Copy all files and the 'r' directory to your 'www' path 
* Create the new table using the 'create_table.sql' file
* Edit 'setup.php' for your DB settings and the Site's base URL
* Bring up the 'test.php' file in a browser and try it!

It will ask you for a URL to direct to.  When you submit it, it will create and display your new short URL.



