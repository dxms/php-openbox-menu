# php-openbox-menu
PHP based applications pipe-menu for Openbox Window Manager

#Requirements: 

1. Linux operating system
2. Openbox Window Manager
3. PHP >= 5.4.* installed *(apache/nginx not needed)

#Installation instructions:

1. Copy and paste contents of the menu file into a new desired PATH location. *( eg: <code>~/bin/php-openbox-menu/menu</code> )
2. Make script executable: <code>chmod +x ~/bin/php-openbox-menu/menu</code>
3. Open Your Openbox default-menu-file, usually <code>~/.config/openbox/menu.xml</code>
4. Place this: <code>&lt;menu id="openbox_pipe_menu" label="Applications" execute="php ~/bin/php-openbox-menu/menu" /&gt;</code> <br> as new line somewhere into default-menu-file, wherever it suits.
5. Change label attribute value if You want to. 
6. Reconfigure openbox menu.

#Good to know:

- Once when this pipe-menu is altered, it will automatically create output as xml file in <code>~/.config/openbox</code> directory with it's name: <code>PHP-OBmenu.xml</code> inside. 
- From that point afterwards, menu is not generated each time, but read from xml file. 
- When You add new programs, this pipe-menu will not show fresh installations until generated .xml file is deleted, hence recreated again automatically upon next focus.
- This can be changed on lines 37/38, right before first function <code>loc()</code> with <code>filemtime()</code>, etc.
- There are also few basic changes that can be made within source code, just follow shell style comments for that.
