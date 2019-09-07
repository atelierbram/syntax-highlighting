#!/bin/bash -x

# write to file
overwrite_to_file()
{
  base16-builder --scheme "db/schemes/atelier-cave.yml" --template "db/templates/prism-less/dark.ejs" > "dist/prism-less/prism-atelier-cave-dark.less"
  base16-builder --scheme "db/schemes/atelier-cave.yml" --template "db/templates/prism-less/light.ejs" > "dist/prism-less/prism-atelier-cave-light.less"
  base16-builder --scheme "db/schemes/atelier-dune.yml" --template "db/templates/prism-less/dark.ejs" > "dist/prism-less/prism-atelier-dune-dark.less"
  base16-builder --scheme "db/schemes/atelier-dune.yml" --template "db/templates/prism-less/light.ejs" > "dist/prism-less/prism-atelier-dune-light.less"
  base16-builder --scheme "db/schemes/atelier-estuary.yml" --template "db/templates/prism-less/dark.ejs" > "dist/prism-less/prism-atelier-estuary-dark.less"
  base16-builder --scheme "db/schemes/atelier-estuary.yml" --template "db/templates/prism-less/light.ejs" > "dist/prism-less/prism-atelier-estuary-light.less"
  base16-builder --scheme "db/schemes/atelier-forest.yml" --template "db/templates/prism-less/dark.ejs" > "dist/prism-less/prism-atelier-forest-dark.less"
  base16-builder --scheme "db/schemes/atelier-forest.yml" --template "db/templates/prism-less/light.ejs" > "dist/prism-less/prism-atelier-forest-light.less"
  base16-builder --scheme "db/schemes/atelier-heath.yml" --template "db/templates/prism-less/dark.ejs" > "dist/prism-less/prism-atelier-heath-dark.less"
  base16-builder --scheme "db/schemes/atelier-heath.yml" --template "db/templates/prism-less/light.ejs" > "dist/prism-less/prism-atelier-heath-light.less"
  base16-builder --scheme "db/schemes/atelier-lakeside.yml" --template "db/templates/prism-less/dark.ejs" > "dist/prism-less/prism-atelier-lakeside-dark.less"
  base16-builder --scheme "db/schemes/atelier-lakeside.yml" --template "db/templates/prism-less/light.ejs" > "dist/prism-less/prism-atelier-lakeside-light.less"
  base16-builder --scheme "db/schemes/atelier-plateau.yml" --template "db/templates/prism-less/dark.ejs" > "dist/prism-less/prism-atelier-plateau-dark.less"
  base16-builder --scheme "db/schemes/atelier-plateau.yml" --template "db/templates/prism-less/light.ejs" > "dist/prism-less/prism-atelier-plateau-light.less"
  base16-builder --scheme "db/schemes/atelier-savanna.yml" --template "db/templates/prism-less/dark.ejs" > "dist/prism-less/prism-atelier-savanna-dark.less"
  base16-builder --scheme "db/schemes/atelier-savanna.yml" --template "db/templates/prism-less/light.ejs" > "dist/prism-less/prism-atelier-savanna-light.less"
  base16-builder --scheme "db/schemes/atelier-seaside.yml" --template "db/templates/prism-less/dark.ejs" > "dist/prism-less/prism-atelier-seaside-dark.less"
  base16-builder --scheme "db/schemes/atelier-seaside.yml" --template "db/templates/prism-less/light.ejs" > "dist/prism-less/prism-atelier-seaside-light.less"
  base16-builder --scheme "db/schemes/atelier-sulphurpool.yml" --template "db/templates/prism-less/dark.ejs" > "dist/prism-less/prism-atelier-sulphurpool-dark.less"
  base16-builder --scheme "db/schemes/atelier-sulphurpool.yml" --template "db/templates/prism-less/light.ejs" > "dist/prism-less/prism-atelier-sulphurpool-light.less"
 }

# execute it
overwrite_to_file
