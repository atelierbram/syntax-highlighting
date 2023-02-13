#!/usr/bin/env bash

write_to_file()
{
cp "source/assets/css/atelier-schemes/cave.min.css" "source/_partials/cave-css.blade.php"
cp "source/assets/css/atelier-schemes/dune.min.css" "source/_partials/dune-css.blade.php"
cp "source/assets/css/atelier-schemes/estuary.min.css" "source/_partials/estuary-css.blade.php"
cp "source/assets/css/atelier-schemes/forest.min.css" "source/_partials/forest-css.blade.php"
cp "source/assets/css/atelier-schemes/heath.min.css" "source/_partials/heath-css.blade.php"
cp "source/assets/css/atelier-schemes/lakeside.min.css" "source/_partials/lakeside-css.blade.php"
cp "source/assets/css/atelier-schemes/plateau.min.css" "source/_partials/plateau-css.blade.php"
cp "source/assets/css/atelier-schemes/savanna.min.css" "source/_partials/savanna-css.blade.php"
cp "source/assets/css/atelier-schemes/seaside.min.css" "source/_partials/seaside-css.blade.php"
cp "source/assets/css/atelier-schemes/sulphurpool.min.css" "source/_partials/sulphurpool-css.blade.php"
cp "source/assets/js/menu-toggle.min.js" "source/_partials/menu-toggle-js.blade.php"
}

# do it!
write_to_file

