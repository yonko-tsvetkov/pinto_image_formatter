INTRODUCTION
------------
Pinto Image Formatter is a Drupal 7 module that enables users to create pinterest-like image galleries 
and responsive grid layouts by using jQuery plugin Pinto.js 
with colorbox gallery option.

Wiki page - https://github.com/yonko-tsvetkov/pinto_image_formatter/wiki

REQUIREMENTS
------------
This module requires the following modules:
 * Libraries (https://drupal.org/project/libraries)
 * JQuery Update (https://drupal.org/project/jquery_update)
 
RECOMMENDED MODULES
-------------------
 * Colorbox (https://drupal.org/project/colorbox)

INSTALLATION
------------
Download and copy to your modules directory - Pinto Image Formatter, 
JQuery Update and Libraries modules. See:
https://drupal.org/documentation/install/modules-themes/modules-7
for further information.

Download pinto.js file from https://github.com/cfconsultancy/Pinto
and copy it to directory - sites/all/libraries/pinto

Enable Pinto Image Formatter and dependent JQuery Update and Libraries 
by going to Administration » Modules

Go to JQuery Update configuration page under 
Configuration » Development and select which version of jQuery to use 
on the site (it should be at least 1.7). 

 Check your Status report page for conflicts and resolve if any exists. 


CONFIGURATION
-------------
Pinto Image Formatter settings are in the Manage Display tab for Content Types, 
users and Entities which use Image Field. The formatter will appear as Pinto.

Image titles are shown as image caption. To do so, 
the title attribute should be enabled from Manage Fields page » Edit 
of the desired field and under IMAGE FIELD SETTINGS 
select Number of values users can enter for this field.  

Pinto can display the big images organised into colorbox gallery. 
This option requires the module Colorbox to be enabled. 
When it's enabled, the relevant format option will be displayed 
under Link to in Format settings.

After that, go to Manage display of the Content Type 
and under Format select: Pinto. 

Customizations can be done through Format settings of Pinto. 

Possible settings:
 - Thumbnail style: i.e. Pinto (220x);
 - Link to (none, content, original image and colorbox modal);
 - Align: Center, right and left;
 - Margin X (sets horizontal margin between images)
 - Margin Y (sets vertical margin between images)
