#!/bin/bash -x

# write to file
overwrite_to_file()
{

 curl "http://localhost/~bram/github.com/atelierbram/syntax-highlighting/src/index/index.php" > "../dist/index-max.html"
 curl "http://localhost/~bram/github.com/atelierbram/syntax-highlighting/src/atelier-schemes/index.php" > "../dist/atelier-schemes/index-max.html"
 curl "http://localhost/~bram/github.com/atelierbram/syntax-highlighting/src/atelier-schemes/cave/index.php" > "../dist/atelier-schemes/cave/index-max.html"
 curl "http://localhost/~bram/github.com/atelierbram/syntax-highlighting/src/atelier-schemes/demo/changes-03-2015.php" > "../dist/atelier-schemes/demo/changes-03-2015-max.html"
 curl "http://localhost/~bram/github.com/atelierbram/syntax-highlighting/src/atelier-schemes/dune/index.php" > "../dist/atelier-schemes/dune/index-max.html"
 curl "http://localhost/~bram/github.com/atelierbram/syntax-highlighting/src/atelier-schemes/estuary/index.php" > "../dist/atelier-schemes/estuary/index-max.html"
 curl "http://localhost/~bram/github.com/atelierbram/syntax-highlighting/src/atelier-schemes/forest/index.php" > "../dist/atelier-schemes/forest/index-max.html"
 curl "http://localhost/~bram/github.com/atelierbram/syntax-highlighting/src/atelier-schemes/heath/index.php" > "../dist/atelier-schemes/heath/index-max.html"
 curl "http://localhost/~bram/github.com/atelierbram/syntax-highlighting/src/atelier-schemes/lakeside/index.php" > "../dist/atelier-schemes/lakeside/index-max.html"
 curl "http://localhost/~bram/github.com/atelierbram/syntax-highlighting/src/atelier-schemes/plateau/index.php" > "../dist/atelier-schemes/plateau/index-max.html"
 curl "http://localhost/~bram/github.com/atelierbram/syntax-highlighting/src/atelier-schemes/savanna/index.php" > "../dist/atelier-schemes/savanna/index-max.html"
 curl "http://localhost/~bram/github.com/atelierbram/syntax-highlighting/src/atelier-schemes/seaside/index.php" > "../dist/atelier-schemes/seaside/index-max.html"
 curl "http://localhost/~bram/github.com/atelierbram/syntax-highlighting/src/atelier-schemes/sulphurpool/index.php" > "../dist/atelier-schemes/sulphurpool/index-max.html"
 curl "http://localhost/~bram/github.com/atelierbram/syntax-highlighting/src/base2tone/index.php" > "../dist/base2tone/index-max.html"
 curl "http://localhost/~bram/github.com/atelierbram/syntax-highlighting/src/base4tone/index.php" > "../dist/base4tone/index-max.html"
 curl "http://localhost/~bram/github.com/atelierbram/syntax-highlighting/src/chrome-devtools/index.php" > "../dist/chrome-devtools/index-max.html"
 curl "http://localhost/~bram/github.com/atelierbram/syntax-highlighting/src/duotones/index.php" > "../dist/duotones/index-max.html"
 curl "http://localhost/~bram/github.com/atelierbram/syntax-highlighting/src/lab/index.php" > "../dist/lab/index-max.html"
 curl "http://localhost/~bram/github.com/atelierbram/syntax-highlighting/src/prism/index.php" > "../dist/prism/index-max.html"
 }

# execute it
overwrite_to_file
