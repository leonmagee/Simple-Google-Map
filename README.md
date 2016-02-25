# Simple-Google-Map
Output a google map with a marker at coordinates.

Usage:

```php
if ( ( $lat && $long ) || $combined_address ) {

    $google_map = new hji_google_map( $lat, $long, get_the_title(), $combined_address );

    $google_map->output_map();
}
```

If the latitude and longitude have been set, the marker and map centering will use that. If not, it will use Google's geocode feature to extract the location from the address string.

The output will include the Googe Map API script.
