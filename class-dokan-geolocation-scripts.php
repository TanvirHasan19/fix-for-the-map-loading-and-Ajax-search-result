Replace the line nubmer 23 and 24 with the below mentioned 2 lines,

add_action( 'wp', array( $this, 'register_styles' ) );
add_action( 'wp', array( $this, 'register_scripts' ) );

After that, go to line number 55 then replace the existing line with the below mentioned line fo code,

wp_register_script( 'dokan-geo-filters-store-lists', DOKAN_GEOLOCATION_ASSETS . '/js/dokan-geolocation-store-lists-filters' . $this->suffix . '.js', array( 'jquery', 'google-maps', 'underscore' ), DOKAN_GEOLOCATION_VERSION, true );
