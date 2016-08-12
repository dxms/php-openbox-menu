# php-openbox-menu
PHP based applications pipe-menu for Openbox Window Manager

Requirements: 

1. Openbox Window Manager
3. PHP >= 5.4.* installed *(apache/nginx not needed)

Installation instructions:

1. Copy and paste contents of the menu file into a new desired PATH location. *( eg: ~/bin/php-ob-menu/menu )
2. Make script executable: chmod +x ~/bin/php-ob-menu/menu
3. Open Your Openbox default-menu-file, usually ~/.config/openbox/menu.xml
4. Place this: &lt;menu id="openbox_pipe_menu" label="Applications" execute="php ~/bin/php-openbox-menu/menu" /&gt; as new line somewhere into default-menu-file, wherever it suits.
5. Change label attribute value if You want to. 
6. Reconfigure openbox menu.
