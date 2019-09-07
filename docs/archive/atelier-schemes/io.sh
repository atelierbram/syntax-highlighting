#!/bin/bash -x

# write to file
overwrite_to_file()
{
  base16-builder --scheme "db/schemes/atelier-cave.yml" --template "db/templates/prism/dark.ejs" > "dist/prism/prism-atelier-cave-dark.css"
  base16-builder --scheme "db/schemes/atelier-cave.yml" --template "db/templates/prism/light.ejs" > "dist/prism/prism-atelier-cave-light.css"
  base16-builder --scheme "db/schemes/atelier-dune.yml" --template "db/templates/prism/dark.ejs" > "dist/prism/prism-atelier-dune-dark.css"
  base16-builder --scheme "db/schemes/atelier-dune.yml" --template "db/templates/prism/light.ejs" > "dist/prism/prism-atelier-dune-light.css"
  base16-builder --scheme "db/schemes/atelier-estuary.yml" --template "db/templates/prism/dark.ejs" > "dist/prism/prism-atelier-estuary-dark.css"
  base16-builder --scheme "db/schemes/atelier-estuary.yml" --template "db/templates/prism/light.ejs" > "dist/prism/prism-atelier-estuary-light.css"
  base16-builder --scheme "db/schemes/atelier-forest.yml" --template "db/templates/prism/dark.ejs" > "dist/prism/prism-atelier-forest-dark.css"
  base16-builder --scheme "db/schemes/atelier-forest.yml" --template "db/templates/prism/light.ejs" > "dist/prism/prism-atelier-forest-light.css"
  base16-builder --scheme "db/schemes/atelier-heath.yml" --template "db/templates/prism/dark.ejs" > "dist/prism/prism-atelier-heath-dark.css"
  base16-builder --scheme "db/schemes/atelier-heath.yml" --template "db/templates/prism/light.ejs" > "dist/prism/prism-atelier-heath-light.css"
  base16-builder --scheme "db/schemes/atelier-lakeside.yml" --template "db/templates/prism/dark.ejs" > "dist/prism/prism-atelier-lakeside-dark.css"
  base16-builder --scheme "db/schemes/atelier-lakeside.yml" --template "db/templates/prism/light.ejs" > "dist/prism/prism-atelier-lakeside-light.css"
  base16-builder --scheme "db/schemes/atelier-plateau.yml" --template "db/templates/prism/dark.ejs" > "dist/prism/prism-atelier-plateau-dark.css"
  base16-builder --scheme "db/schemes/atelier-plateau.yml" --template "db/templates/prism/light.ejs" > "dist/prism/prism-atelier-plateau-light.css"
  base16-builder --scheme "db/schemes/atelier-savanna.yml" --template "db/templates/prism/dark.ejs" > "dist/prism/prism-atelier-savanna-dark.css"
  base16-builder --scheme "db/schemes/atelier-savanna.yml" --template "db/templates/prism/light.ejs" > "dist/prism/prism-atelier-savanna-light.css"
  base16-builder --scheme "db/schemes/atelier-seaside.yml" --template "db/templates/prism/dark.ejs" > "dist/prism/prism-atelier-seaside-dark.css"
  base16-builder --scheme "db/schemes/atelier-seaside.yml" --template "db/templates/prism/light.ejs" > "dist/prism/prism-atelier-seaside-light.css"
  base16-builder --scheme "db/schemes/atelier-sulphurpool.yml" --template "db/templates/prism/dark.ejs" > "dist/prism/prism-atelier-sulphurpool-dark.css"
  base16-builder --scheme "db/schemes/atelier-sulphurpool.yml" --template "db/templates/prism/light.ejs" > "dist/prism/prism-atelier-sulphurpool-light.css"

  base16-builder --scheme "db/schemes/atelier-cave.yml" --template "db/templates/prism/dark.ejs" > "../prism/demo/assets/css/prism-atelier-cave-dark.css"
  base16-builder --scheme "db/schemes/atelier-cave.yml" --template "db/templates/prism/light.ejs" > "../prism/demo/assets/css/prism-atelier-cave-light.css"
  base16-builder --scheme "db/schemes/atelier-dune.yml" --template "db/templates/prism/dark.ejs" > "../prism/demo/assets/css/prism-atelier-dune-dark.css"
  base16-builder --scheme "db/schemes/atelier-dune.yml" --template "db/templates/prism/light.ejs" > "../prism/demo/assets/css/prism-atelier-dune-light.css"
  base16-builder --scheme "db/schemes/atelier-estuary.yml" --template "db/templates/prism/dark.ejs" > "../prism/demo/assets/css/prism-atelier-estuary-dark.css"
  base16-builder --scheme "db/schemes/atelier-estuary.yml" --template "db/templates/prism/light.ejs" > "../prism/demo/assets/css/prism-atelier-estuary-light.css"
  base16-builder --scheme "db/schemes/atelier-forest.yml" --template "db/templates/prism/dark.ejs" > "../prism/demo/assets/css/prism-atelier-forest-dark.css"
  base16-builder --scheme "db/schemes/atelier-forest.yml" --template "db/templates/prism/light.ejs" > "../prism/demo/assets/css/prism-atelier-forest-light.css"
  base16-builder --scheme "db/schemes/atelier-heath.yml" --template "db/templates/prism/dark.ejs" > "../prism/demo/assets/css/prism-atelier-heath-dark.css"
  base16-builder --scheme "db/schemes/atelier-heath.yml" --template "db/templates/prism/light.ejs" > "../prism/demo/assets/css/prism-atelier-heath-light.css"
  base16-builder --scheme "db/schemes/atelier-lakeside.yml" --template "db/templates/prism/dark.ejs" > "../prism/demo/assets/css/prism-atelier-lakeside-dark.css"
  base16-builder --scheme "db/schemes/atelier-lakeside.yml" --template "db/templates/prism/light.ejs" > "../prism/demo/assets/css/prism-atelier-lakeside-light.css"
  base16-builder --scheme "db/schemes/atelier-plateau.yml" --template "db/templates/prism/dark.ejs" > "../prism/demo/assets/css/prism-atelier-plateau-dark.css"
  base16-builder --scheme "db/schemes/atelier-plateau.yml" --template "db/templates/prism/light.ejs" > "../prism/demo/assets/css/prism-atelier-plateau-light.css"
  base16-builder --scheme "db/schemes/atelier-savanna.yml" --template "db/templates/prism/dark.ejs" > "../prism/demo/assets/css/prism-atelier-savanna-dark.css"
  base16-builder --scheme "db/schemes/atelier-savanna.yml" --template "db/templates/prism/light.ejs" > "../prism/demo/assets/css/prism-atelier-savanna-light.css"
  base16-builder --scheme "db/schemes/atelier-seaside.yml" --template "db/templates/prism/dark.ejs" > "../prism/demo/assets/css/prism-atelier-seaside-dark.css"
  base16-builder --scheme "db/schemes/atelier-seaside.yml" --template "db/templates/prism/light.ejs" > "../prism/demo/assets/css/prism-atelier-seaside-light.css"
  base16-builder --scheme "db/schemes/atelier-sulphurpool.yml" --template "db/templates/prism/dark.ejs" > "../prism/demo/assets/css/prism-atelier-sulphurpool-dark.css"
  base16-builder --scheme "db/schemes/atelier-sulphurpool.yml" --template "db/templates/prism/light.ejs" > "../prism/demo/assets/css/prism-atelier-sulphurpool-light.css"
 }

# execute it
overwrite_to_file
