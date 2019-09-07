#!/bin/bash -x

# write to file
overwrite_to_file()
{
  base16-builder --scheme "db/schemes/atelier-cave.yml" --template "db/templates/prism-sass/dark.ejs" > "dist/prism-sass/prism-atelier-cave-dark.scss"
  base16-builder --scheme "db/schemes/atelier-cave.yml" --template "db/templates/prism-sass/light.ejs" > "dist/prism-sass/prism-atelier-cave-light.scss"
  base16-builder --scheme "db/schemes/atelier-dune.yml" --template "db/templates/prism-sass/dark.ejs" > "dist/prism-sass/prism-atelier-dune-dark.scss"
  base16-builder --scheme "db/schemes/atelier-dune.yml" --template "db/templates/prism-sass/light.ejs" > "dist/prism-sass/prism-atelier-dune-light.scss"
  base16-builder --scheme "db/schemes/atelier-estuary.yml" --template "db/templates/prism-sass/dark.ejs" > "dist/prism-sass/prism-atelier-estuary-dark.scss"
  base16-builder --scheme "db/schemes/atelier-estuary.yml" --template "db/templates/prism-sass/light.ejs" > "dist/prism-sass/prism-atelier-estuary-light.scss"
  base16-builder --scheme "db/schemes/atelier-forest.yml" --template "db/templates/prism-sass/dark.ejs" > "dist/prism-sass/prism-atelier-forest-dark.scss"
  base16-builder --scheme "db/schemes/atelier-forest.yml" --template "db/templates/prism-sass/light.ejs" > "dist/prism-sass/prism-atelier-forest-light.scss"
  base16-builder --scheme "db/schemes/atelier-heath.yml" --template "db/templates/prism-sass/dark.ejs" > "dist/prism-sass/prism-atelier-heath-dark.scss"
  base16-builder --scheme "db/schemes/atelier-heath.yml" --template "db/templates/prism-sass/light.ejs" > "dist/prism-sass/prism-atelier-heath-light.scss"
  base16-builder --scheme "db/schemes/atelier-lakeside.yml" --template "db/templates/prism-sass/dark.ejs" > "dist/prism-sass/prism-atelier-lakeside-dark.scss"
  base16-builder --scheme "db/schemes/atelier-lakeside.yml" --template "db/templates/prism-sass/light.ejs" > "dist/prism-sass/prism-atelier-lakeside-light.scss"
  base16-builder --scheme "db/schemes/atelier-plateau.yml" --template "db/templates/prism-sass/dark.ejs" > "dist/prism-sass/prism-atelier-plateau-dark.scss"
  base16-builder --scheme "db/schemes/atelier-plateau.yml" --template "db/templates/prism-sass/light.ejs" > "dist/prism-sass/prism-atelier-plateau-light.scss"
  base16-builder --scheme "db/schemes/atelier-savanna.yml" --template "db/templates/prism-sass/dark.ejs" > "dist/prism-sass/prism-atelier-savanna-dark.scss"
  base16-builder --scheme "db/schemes/atelier-savanna.yml" --template "db/templates/prism-sass/light.ejs" > "dist/prism-sass/prism-atelier-savanna-light.scss"
  base16-builder --scheme "db/schemes/atelier-seaside.yml" --template "db/templates/prism-sass/dark.ejs" > "dist/prism-sass/prism-atelier-seaside-dark.scss"
  base16-builder --scheme "db/schemes/atelier-seaside.yml" --template "db/templates/prism-sass/light.ejs" > "dist/prism-sass/prism-atelier-seaside-light.scss"
  base16-builder --scheme "db/schemes/atelier-sulphurpool.yml" --template "db/templates/prism-sass/dark.ejs" > "dist/prism-sass/prism-atelier-sulphurpool-dark.scss"
  base16-builder --scheme "db/schemes/atelier-sulphurpool.yml" --template "db/templates/prism-sass/light.ejs" > "dist/prism-sass/prism-atelier-sulphurpool-light.scss"
 }

# execute it
overwrite_to_file
