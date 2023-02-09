var sass = require('sass');
var fs = require('fs');
var pkg = require('./package.json');


// Configs
var configs = {
  name: 'clm',
  files: ['style-redesign-v1.scss','critical-css-custom.scss','local.scss','single.scss','fontface-monospace.scss','prism/demo.scss','atelier-schemes/forest.scss','atelier-schemes/plateau.scss','atelier-schemes/heath.scss','atelier-schemes/cave.scss','atelier-schemes/sulphurpool.scss','atelier-schemes/lakeside.scss','atelier-schemes/savanna.scss','atelier-schemes/seaside.scss','atelier-schemes/estuary.scss','atelier-schemes/dune.scss','prism/schemes/prism-atelier-cave-dark.scss','prism/schemes/prism-atelier-cave-light.scss','prism/schemes/prism-atelier-dune-dark.scss','prism/schemes/prism-atelier-dune-light.scss','prism/schemes/prism-atelier-estuary-dark.scss','prism/schemes/prism-atelier-estuary-light.scss','prism/schemes/prism-atelier-forest-dark.scss','prism/schemes/prism-atelier-forest-light.scss','prism/schemes/prism-atelier-heath-dark.scss','prism/schemes/prism-atelier-heath-light.scss','prism/schemes/prism-atelier-plateau-dark.scss','prism/schemes/prism-atelier-plateau-light.scss','prism/schemes/prism-atelier-savanna-dark.scss','prism/schemes/prism-atelier-savanna-light.scss','prism/schemes/prism-atelier-lakeside-dark.scss','prism/schemes/prism-atelier-lakeside-light.scss','prism/schemes/prism-atelier-seaside-dark.scss','prism/schemes/prism-atelier-seaside-light.scss','prism/schemes/prism-atelier-sulphurpool-dark.scss','prism/schemes/prism-atelier-sulphurpool-light.scss'],
  pathIn: 'source/_assets/sass',
  pathOut: 'source/assets/css',
  indentType: 'spaces',
  indentWidth: 2,
  minify: true,
  sourceMap: true
};

// Banner
var banner = `@charset "utf-8";`;

var getOptions = function (file, filename, minify) {
  return {
    file: `${configs.pathIn}/${file}`,
    outFile: `${configs.pathOut}/${filename}`,
    sourceMap: configs.sourceMap,
    sourceMapContents: configs.sourceMap,
    indentType: configs.indentType,
    indentWidth: configs.indentWidth,
    outputStyle: minify ? 'compressed' : 'expanded'
  };
};

var writeFile = function (pathOut, fileName, fileData, printBanner = true) {
  // Create the directory path
  fs.mkdir(pathOut, { recursive: true }, function (err) {
    // If there's an error, throw it
    if (err) throw err;

    // Write the file to the path
    fs.writeFile(`${pathOut}/${fileName}`, fileData, function (err) {
      if (err) throw err;

      var data = fs.readFileSync(`${pathOut}/${fileName}`);
      var fd = fs.openSync(`${pathOut}/${fileName}`, 'w+');
      var insert = printBanner ? new Buffer.from(banner + '\n') : '';
      fs.writeSync(fd, insert, 0, insert.length, 0);
      fs.writeSync(fd, data, 0, data.length, insert.length);
      fs.close(fd, function (err) {
        if (err) throw err;
        console.log(`Compiled ${pathOut}/${fileName}`);
      })
    })
  })
}

var parseSass = function (file, minify) {
  var filename = `${file.slice(0, file.length - 5)}${minify ? '.min' : ''}.css`;
  sass.render(getOptions(file, filename, minify), function (err, result) {

    // If there's an error, throw it
    if (err) throw err;

    // Write the file
    writeFile(configs.pathOut, filename, result.css);

    if (configs.sourceMap && !configs.sourceMapEmbed) {
      // Write external sourcemap
      writeFile(configs.pathOut, filename + '.map', result.map, false);
    }
  });
};

configs.files.forEach(function (file) {
  parseSass(file);
  if (configs.minify) {
    parseSass(file, true);
  }
});
