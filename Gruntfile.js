module.exports = function(grunt) {

    require('time-grunt')(grunt);

    var devmode = grunt.option('dev');

    grunt.initConfig({
      pkg: grunt.file.readJSON('package.json'),

      // clean: ['assets/css','assets/css/unprefixed/','assets/css/prefixed/'],
      clean: [],

      sass: {
        options: {
          implementation: require('node-sass'),
          sourceMap: true
        },
        dist: {
          files: {
            'dist/assets/css/unprefixed/style-redesign-v1.css': 'src/assets/sass/style-redesign-v1.scss',
            'dist/assets/css/unprefixed/atelier-schemes/forest.css': 'src/assets/sass/atelier-schemes/forest.scss',
            'dist/assets/css/unprefixed/atelier-schemes/plateau.css': 'src/assets/sass/atelier-schemes/plateau.scss',
            'dist/assets/css/unprefixed/atelier-schemes/heath.css': 'src/assets/sass/atelier-schemes/heath.scss',
            'dist/assets/css/unprefixed/atelier-schemes/cave.css': 'src/assets/sass/atelier-schemes/cave.scss',
            'dist/assets/css/unprefixed/atelier-schemes/sulphurpool.css': 'src/assets/sass/atelier-schemes/sulphurpool.scss',
            'dist/assets/css/unprefixed/atelier-schemes/lakeside.css': 'src/assets/sass/atelier-schemes/lakeside.scss',
            'dist/assets/css/unprefixed/atelier-schemes/savanna.css': 'src/assets/sass/atelier-schemes/savanna.scss',
            'dist/assets/css/unprefixed/atelier-schemes/seaside.css': 'src/assets/sass/atelier-schemes/seaside.scss',
            'dist/assets/css/unprefixed/atelier-schemes/estuary.css': 'src/assets/sass/atelier-schemes/estuary.scss',
            'dist/assets/css/unprefixed/atelier-schemes/dune.css': 'src/assets/sass/atelier-schemes/dune.scss',
            'dist/assets/css/unprefixed/critical-css-custom.css': 'src/assets/sass/critical-css-custom.scss',
            'dist/assets/css/prism/demo/demo-unprefixed.css': 'docs/prism/demo/assets/sass/demo.scss'
          }
        }
      },

      postcss: {
        options: {
          map: {
          inline: false, // save all sourcemaps as separate files...
          // annotation: 'assets/css/maps/' // ...to the specified directory
          },
          processors: [
            require('autoprefixer')(),
            require('cssnano')(),
          ]
        },

        dist: {
          expand: true,
          flatten: true,
          files: {
            'docs/assets/css/style-redesign-v1.css': 'dist/assets/css/unprefixed/style-redesign-v1.css',
            'docs/assets/css/critical.min.css': 'docs/assets/css/critical.css',
            'docs/assets/css/prefixed/atelier-schemes/forest.min.css': 'dist/assets/css/unprefixed/atelier-schemes/forest.css',
            'docs/assets/css/prefixed/atelier-schemes/plateau.min.css': 'dist/assets/css/unprefixed/atelier-schemes/plateau.css',
            'docs/assets/css/prefixed/atelier-schemes/heath.min.css': 'dist/assets/css/unprefixed/atelier-schemes/heath.css',
            'docs/assets/css/prefixed/atelier-schemes/cave.min.css': 'dist/assets/css/unprefixed/atelier-schemes/cave.css',
            'docs/assets/css/prefixed/atelier-schemes/sulphurpool.min.css': 'dist/assets/css/unprefixed/atelier-schemes/sulphurpool.css',
            'docs/assets/css/prefixed/atelier-schemes/lakeside.min.css': 'dist/assets/css/unprefixed/atelier-schemes/lakeside.css',
            'docs/assets/css/prefixed/atelier-schemes/savanna.min.css': 'dist/assets/css/unprefixed/atelier-schemes/savanna.css',
            'docs/assets/css/prefixed/atelier-schemes/seaside.min.css': 'dist/assets/css/unprefixed/atelier-schemes/seaside.css',
            'docs/assets/css/prefixed/atelier-schemes/estuary.min.css': 'dist/assets/css/unprefixed/atelier-schemes/estuary.css',
            'docs/assets/css/prefixed/atelier-schemes/dune.min.css': 'dist/assets/css/unprefixed/atelier-schemes/dune.css',
            'docs/assets/css/prefixed/critical-css-custom.min.css': 'dist/assets/css/unprefixed/critical-css-custom.css',
            'docs/prism/demo/assets/css/demo.css':'dist/assets/css/prism/demo/demo-unprefixed.css'
          }
        }
      },

      criticalcss: {
        custom: {
          options: {
            url: "http://localhost/~bram/syntax-highlighting/src/index/index.html",
            width: 1200,
            height: 900,
            outputfile: "docs/assets/css/critical.css",
            filename: "docs/assets/css/style-redesign-v1.css", // Using path.resolve( path.join( ... ) ) is a good idea here
            buffer: 800*1024,
            ignoreConsole: false
          }
        }
      },

      copy: {
        main: {
          // src: 'dist/static/prefixed/home.min.css',
          // dest: 'src/templates/partials/homeheadstyles.hbs',
          files: {
            'src/inc/concat-min-js.inc' : 'docs/assets/js/concat.min.js',
            'src/inc/critical-min-css.inc' : 'docs/assets/css/critical.min.css',
            'src/inc/forest-css.inc' : 'docs/assets/css/prefixed/atelier-schemes/forest.min.css',
            'src/inc/plateau-css.inc' : 'docs/assets/css/prefixed/atelier-schemes/plateau.min.css',
            'src/inc/heath-css.inc' : 'docs/assets/css/prefixed/atelier-schemes/heath.min.css',
            'src/inc/cave-css.inc' : 'docs/assets/css/prefixed/atelier-schemes/cave.min.css',
            'src/inc/sulphurpool-css.inc' : 'docs/assets/css/prefixed/atelier-schemes/sulphurpool.min.css',
            'src/inc/lakeside-css.inc' : 'docs/assets/css/prefixed/atelier-schemes/lakeside.min.css',
            'src/inc/savanna-css.inc' : 'docs/assets/css/prefixed/atelier-schemes/savanna.min.css',
            'src/inc/seaside-css.inc' : 'docs/assets/css/prefixed/atelier-schemes/seaside.min.css',
            'src/inc/estuary-css.inc' : 'docs/assets/css/prefixed/atelier-schemes/estuary.min.css',
            'src/inc/dune-css.inc' : 'docs/assets/css/prefixed/atelier-schemes/dune.min.css',
            'src/inc/critical-css-custom.inc' : 'docs/assets/css/prefixed/critical-css-custom.min.css',
          },
          flatten: true,
          filter: 'isFile',
        },
      },

      htmlmin: {                                     // Task
        dist: {                                      // Target
          options: {                                 // Target options
            removeComments: true,
            collapseWhitespace: true
          },
          files: {                                   // Dictionary of files
            'docs/index.html': 'dist/index-max.html',    // 'destination': 'source'
            'docs/atelier-schemes/index.html': 'dist/atelier-schemes/index-max.html',
            'docs/atelier-schemes/cave/index.html': 'dist/atelier-schemes/cave/index-max.html',
            'docs/atelier-schemes/demo/changes-03-2015.html': 'dist/atelier-schemes/demo/changes-03-2015-max.html',
            'docs/atelier-schemes/dune/index.html': 'dist/atelier-schemes/dune/index-max.html',
            'docs/atelier-schemes/estuary/index.html': 'dist/atelier-schemes/estuary/index-max.html',
            'docs/atelier-schemes/forest/index.html': 'dist/atelier-schemes/forest/index-max.html',
            'docs/atelier-schemes/heath/index.html': 'dist/atelier-schemes/heath/index-max.html',
            'docs/atelier-schemes/lakeside/index.html': 'dist/atelier-schemes/lakeside/index-max.html',
            'docs/atelier-schemes/plateau/index.html': 'dist/atelier-schemes/plateau/index-max.html',
            'docs/atelier-schemes/savanna/index.html': 'dist/atelier-schemes/savanna/index-max.html',
            'docs/atelier-schemes/seaside/index.html': 'dist/atelier-schemes/seaside/index-max.html',
            'docs/atelier-schemes/sulphurpool/index.html': 'dist/atelier-schemes/sulphurpool/index-max.html',
            'docs/base2tone/index.html': 'dist/base2tone/index-max.html',
            'docs/base4tone/index.html': 'dist/base4tone/index-max.html',
            'docs/chrome-devtools/index.html': 'dist/chrome-devtools/index-max.html',
            'docs/duotones/index.html': 'dist/duotones/index-max.html',
            'docs/lab/index.html': 'dist/lab/index-max.html',
            'docs/prism/index.html': 'dist/prism/index-max.html',
          }
        }
      },

      concat: {
         dist: {
           files: {
             'dist/assets/js/concat.js' :  ['dist/assets/js/fontfaceobserver.js','dist/assets/js/load-font.js','dist/assets/js/loadCSS.js','dist/assets/js/cssrelpreload.js']
           }
         }
       },

      uglify: {
        options: {
          preserveComments: 'some'
        },
        dist: {
          files: {
            'docs/assets/js/concat.min.js' : 'dist/assets/js/concat.js'
          }
        }
      },

     //  hashres: {
     //     options: {
     //         fileNameFormat: '${name}.${ext}?${hash}',
     //         renameFiles: false
     //     },
     //     dist: {
     //         src: ['dist/static/main.min.js','dist/static/prefixed/style.min.css','dist/static/prefixed/home.min.css'],
     //         dest: 'dist#<{(||)}>#*.html'
     //    }
     // },


      watch: {
        options: {
          livereload: true,
        },

        sass: {
            files: ['src/assets/sass/**/*.scss'],
            // tasks: ['scss','autoprefixer','cssmin','copy','hashres'],
            tasks: ['sass','postcss','criticalcss','copy'],
            options: {
              // https://github.com/gruntjs/grunt-contrib-watch/issues/415
              // spawn: false
            }
        },

        // js: {
        //     files: ['assets/js#<{(||)}>#*.js'],
        //     tasks: ['concat','uglify'],
        //     options: {
        //       spawn: false
        //     }
        // },

        // html: {
        //     files: ['content#<{(||)}>#*','src/templates#<{(||)}>#*'],
        //     tasks: [],
        //     options: {
        //       spawn: false
        //     }
        // },
        // https://github.com/gruntjs/grunt-contrib-watch#optionslivereload
        // livereload: {
        // Here we watch the files the sass task will compile to
        // These files are sent to the live reload server after sass compiles to them
      //   options: {
      //     livereload: true,
      //     spawn: false,
      //     },
      //   files: ['dist/static#<{(||)}>#*.css'],
      //   },
      },



  });

    // grunt.registerTask('build', ['concat', 'uglify', 'sass', 'autoprefixer', 'cssmin', 'copy', 'htmlmin', 'hashres']);
    grunt.registerTask('build', ['concat', 'uglify', 'sass', 'postcss:dist', 'copy','criticalcss','htmlmin']);
    // grunt.registerTask('build', ['sass', 'autoprefixer', 'cssmin']);
    // grunt.registerTask('scss', ['sass', 'autoprefixer', 'cssmin', 'hashres']);
    grunt.registerTask('sass', ['sass', 'postcss:dist']);
    grunt.registerTask('js', ['uglify', 'concat']);
    // grunt.registerTask('html', ['hashres']);
    grunt.registerTask('default', ['build', 'watch']);
    grunt.registerTask('dev', ['watch']);
    // grunt.registerTask('default', ['build', 'connect', 'watch', 'assemble:component']);
    // grunt.registerTask('default', ['assemble:component']);

    // grunt.loadNpmTasks('grunt-hashres', 'grunt-contrib-copy', 'grunt-contrib-htmlmin', 'grunt-contrib-sass','grunt-contrib-watch','matchdep','grunt-autoprefixer');
    grunt.loadNpmTasks('grunt-sass','grunt-contrib-watch','matchdep','grunt-postcss','grunt-contrib-copy','grunt-criticalcss');
    require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks);

  // Default tasks to be run.
};
//    if (devmode) {
//        grunt.task.registerTask('hashres', function(){ console.log('Skipping hashres task because of --dev flag'); });
//        grunt.task.registerTask('uncss', function(){ console.log('Skipping uncss task because of --dev flag'); });
//    }
// };
