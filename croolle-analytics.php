<?php
/**
Plugin Name: Croolle Analytics
Plugin URI:  https://developer.wordpress.org/plugins/the-basics/
Description: Croolle Analytics is a plugin for loging your web traffice for analytics purposes
Version:     1.0.1
Author:      croolle.com
Author URI:  http://croolle.com/
Text Domain: croollecom
Domain Path: /languages
License:     GPL2
 
{Plugin Name} is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
{Plugin Name} is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with {Plugin Name}. If not, see {License URI}.
*/

add_action('wp_head', 'crooler_analytics_client_js');
function crooler_analytics_client_js(){?>
    <script>
    ((d, id)=>{
        if(!d.getElementById(id)){  
            const s = d.createElement('script');
            s.id=id;
            s.src = "https://croolle.com/hostscript.js?"+Math.random();
            d.head.append(s);
        }
    })(document, 'opanAlyticsRoot');
    </script>
<?php }
?>