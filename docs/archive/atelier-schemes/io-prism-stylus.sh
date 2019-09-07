#!/bin/bash -x

# write to file
overwrite_to_file()
{
  base16-builder --scheme "db/schemes/atelier-cave.yml" --template "db/templates/prism-stylus/dark.ejs" > "dist/prism-stylus/prism-atelier-cave-dark.styl"
  base16-builder --scheme "db/schemes/atelier-cave.yml" --template "db/templates/prism-stylus/light.ejs" > "dist/prism-stylus/prism-atelier-cave-light.styl"
  base16-builder --scheme "db/schemes/atelier-dune.yml" --template "db/templates/prism-stylus/dark.ejs" > "dist/prism-stylus/prism-atelier-dune-dark.styl"
  base16-builder --scheme "db/schemes/atelier-dune.yml" --template "db/templates/prism-stylus/light.ejs" > "dist/prism-stylus/prism-atelier-dune-light.styl"
  base16-builder --scheme "db/schemes/atelier-estuary.yml" --template "db/templates/prism-stylus/dark.ejs" > "dist/prism-stylus/prism-atelier-estuary-dark.styl"
  base16-builder --scheme "db/schemes/atelier-estuary.yml" --template "db/templates/prism-stylus/light.ejs" > "dist/prism-stylus/prism-atelier-estuary-light.styl"
  base16-builder --scheme "db/schemes/atelier-forest.yml" --template "db/templates/prism-stylus/dark.ejs" > "dist/prism-stylus/prism-atelier-forest-dark.styl"
  base16-builder --scheme "db/schemes/atelier-forest.yml" --template "db/templates/prism-stylus/light.ejs" > "dist/prism-stylus/prism-atelier-forest-light.styl"
  base16-builder --scheme "db/schemes/atelier-heath.yml" --template "db/templates/prism-stylus/dark.ejs" > "dist/prism-stylus/prism-atelier-heath-dark.styl"
  base16-builder --scheme "db/schemes/atelier-heath.yml" --template "db/templates/prism-stylus/light.ejs" > "dist/prism-stylus/prism-atelier-heath-light.styl"
  base16-builder --scheme "db/schemes/atelier-lakeside.yml" --template "db/templates/prism-stylus/dark.ejs" > "dist/prism-stylus/prism-atelier-lakeside-dark.styl"
  base16-builder --scheme "db/schemes/atelier-lakeside.yml" --template "db/templates/prism-stylus/light.ejs" > "dist/prism-stylus/prism-atelier-lakeside-light.styl"
  base16-builder --scheme "db/schemes/atelier-plateau.yml" --template "db/templates/prism-stylus/dark.ejs" > "dist/prism-stylus/prism-atelier-plateau-dark.styl"
  base16-builder --scheme "db/schemes/atelier-plateau.yml" --template "db/templates/prism-stylus/light.ejs" > "dist/prism-stylus/prism-atelier-plateau-light.styl"
  base16-builder --scheme "db/schemes/atelier-savanna.yml" --template "db/templates/prism-stylus/dark.ejs" > "dist/prism-stylus/prism-atelier-savanna-dark.styl"
  base16-builder --scheme "db/schemes/atelier-savanna.yml" --template "db/templates/prism-stylus/light.ejs" > "dist/prism-stylus/prism-atelier-savanna-light.styl"
  base16-builder --scheme "db/schemes/atelier-seaside.yml" --template "db/templates/prism-stylus/dark.ejs" > "dist/prism-stylus/prism-atelier-seaside-dark.styl"
  base16-builder --scheme "db/schemes/atelier-seaside.yml" --template "db/templates/prism-stylus/light.ejs" > "dist/prism-stylus/prism-atelier-seaside-light.styl"
  base16-builder --scheme "db/schemes/atelier-sulphurpool.yml" --template "db/templates/prism-stylus/dark.ejs" > "dist/prism-stylus/prism-atelier-sulphurpool-dark.styl"
  base16-builder --scheme "db/schemes/atelier-sulphurpool.yml" --template "db/templates/prism-stylus/light.ejs" > "dist/prism-stylus/prism-atelier-sulphurpool-light.styl"
 }

# execute it
overwrite_to_file
