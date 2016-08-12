# php-openbox-menu
PHP based applications pipe-menu for Openbox Window Manager

Requirements: 

1. Linux operating system
2. Openbox Window Manager
3. PHP >= 5.4.* installed *(apache/nginx not needed)

Installation instructions:

1. Copy and paste contents of the menu file into a new desired PATH location. *( eg: <b>~/bin/php-openbox-menu/menu</b> )
2. Make script executable: <b>chmod +x ~/bin/php-openbox-menu/menu</b>
3. Open Your Openbox default-menu-file, usually <b>~/.config/openbox/menu.xml</b>
4. Place this: <b>&lt;menu id="openbox_pipe_menu" label="Applications" execute="php ~/bin/php-openbox-menu/menu" /&gt;</b> <br> as new line somewhere into default-menu-file, wherever it suits.
5. Change label attribute value if You want to. 
6. Reconfigure openbox menu.

Good to know:

- Once when this pipe-menu is altered, it will automatically create output as xml file in <b>~/.config/openbox</b> directory with it's name: <b>PHP-OBmenu.xml</b> inside. 
- From that point afterwards, menu is not generated each time, but read from xml file. 
- When You add new programs, this pipe-menu will not show fresh installations until generated .xml file is deleted, hence recreated again automatically upon next focus.
- This can be changed on lines 37/38 (right before first function '<b>loc()</b>') with '<b>filemtime()</b>', etc.
- Thera are also few basic changes that can be made within source code, just follow shell style comments for that.
