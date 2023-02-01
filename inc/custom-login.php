<?php
/**
 * Customise the WordPress login screen.
 *
 * @package oxhu
 */
function oxhu_custom_login_logo() {
	echo '<style>

             .login h1 a {
               background-image: url(https://res.cloudinary.com/cdn-oxhu/images/v1664959402/logo/logo.webp?_i=AA);
               background-size: auto 100%;
     		   width: 100%;
            }
            .login {
	        	background-color: #121416;
              
	            }
   
           .wp-core-ui .button-primary {
			  background: #E52323;
			  border-color: #E52323;
			  color: #fff;
			  text-decoration: none;
			  text-shadow: none;
			}
            input[type=checkbox]:focus, input[type=color]:focus, input[type=date]:focus,
            input[type=datetime-local]:focus, input[type=datetime]:focus, input[type=email]:focus,
            input[type=month]:focus, input[type=number]:focus, input[type=password]:focus,
            input[type=radio]:focus, input[type=search]:focus, input[type=tel]:focus,
            input[type=text]:focus, input[type=time]:focus, input[type=url]:focus,
            input[type=week]:focus, select:focus, textarea:focus {
              border-color: #E52323;
              box-shadow: 0 0 0 1px #E52323;
            }
   
            .wp-core-ui .button-primary {
              background: #E52323;
              border-color: #E52323;
            }
            .wp-core-ui .button, .wp-core-ui .button-secondary {
              color: #E52323;
  			  border-color: #E52323;
            }
            .wp-core-ui .button-primary {
			  background: #E52323;
			  border-color: #E52323;
			  color: #fff;
			  text-decoration: none;
			  text-shadow: none;
			}
			.wp-core-ui .button-secondary:hover, .wp-core-ui .button.hover, .wp-core-ui .button:hover {
			  background: #f0f0f1;
			  border-color: #E52323;
			  color: #E52323;
			}
			.wp-core-ui .button-primary.active, .wp-core-ui .button-primary.active:focus, 
			.wp-core-ui .button-primary.active:hover, .wp-core-ui .button-primary:active {
			  background: #E52323;
			  border-color: #E52323;
			  box-shadow: none;
			  color: #fff;
			}


			.wp-core-ui .button, .wp-core-ui .button-secondary {
			  color: #E52323;
			  border-color: #E52323;
			  background: #f6f7f7;
			}
			
			.wp-core-ui .button-primary.focus, .wp-core-ui .button-primary:focus {
			  box-shadow: 0 0 0 1px #fff, 0 0 0 3px #E52323;
			}
			
			.wp-core-ui .button-primary.focus, .wp-core-ui .button-primary.hover, .wp-core-ui .button-primary:focus, .wp-core-ui .button-primary:hover {
			  background: #E52323;
			  border-color: #E52323;
			  color: #fff;
			}
			
			.login .button.wp-hide-pw:focus {
			  background: 0 0;
			  border-color: #E52323;
			  box-shadow: 0 0 0 1px #E52323;
			  outline: 2px solid transparent;
			}
			
			input[type=checkbox]:checked::before {
			  content: url(data:image/svg+xml;utf8,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20viewBox%3D%270%200%2020%2020%27%3E%3Cpath%20d%3D%27M14.83%204.89l1.34.94-5.81%208.38H9.02L5.78%209.67l1.34-1.25%202.57%202.4z%27%20fill%3D%27%2E52323%27%2F%3E%3C%2Fsvg%3E);
			}
			.login #backtoblog a, .login #nav a {
			  text-decoration: none;
			  color: #818181;
			}
			.login #backtoblog a:hover, .login #nav a:hover, .login h1 a:hover {
			  color: #BABABA;
			}
			.wp-core-ui select:hover {
			  color: #E52323;
			}
			.wp-core-ui select:focus {
			  border-color: #E52323;
			  color: #810000;
			  box-shadow: 0 0 0 1px #E52323;
			}
			
			.login #login_error, .login .message, .login .success {
			  border-left: 4px solid #E52323;
			}

    </style>';
}

add_filter( 'login_head', 'oxhu_custom_login_logo' );
add_filter( 'login_display_language_dropdown', '__return_false' );

add_filter( 'login_headerurl', 'oxhu_login_logo_url' );
function oxhu_login_logo_url( $url ) {
	return 'https://oxhu.co.uk';
}