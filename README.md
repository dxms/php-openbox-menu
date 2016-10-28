# php-openbox-menu
PHP based applications pipe-menu for Openbox Window Manager

## Requirements: 

1. Linux operating system
2. Openbox Window Manager
3. PHP >= 5.4.* installed *(php-cli)

## Installation instructions:

1. Copy and paste contents of the menu file into a new desired PATH location. *( eg: <code>~/bin/php-openbox-menu/menu</code> )
2. Make script executable: <code>chmod +x ~/bin/php-openbox-menu/menu</code>
3. Open Your Openbox default-menu-file, usually <code>~/.config/openbox/menu.xml</code>
4. Place this: <code>&lt;menu id="openbox_pipe_menu" label="Applications" execute="php ~/bin/php-openbox-menu/menu" /&gt;</code> <br> as new line somewhere into default-menu-file, wherever it suits.
5. Change label attribute value if You want to. 
6. Reconfigure openbox menu.

## Good to know:

- Once when this pipe-menu is altered, it will automatically create output as xml file in <code>~/.config/openbox</code> directory with it's name: <code>PHP-OBmenu.xml</code> inside. 
- From that point afterwards, menu is not generated each time, but read from xml file for the next 60 seconds. 
- When You add new programs, this pipe-menu will not show fresh installations until generated .xml file is recreated again automatically.
- This can be changed on line 34.
- There are also few other basic changes that can be made within source code, just follow shell style comments for that.
