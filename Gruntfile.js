module.exports = function(grunt) {

    require('time-grunt')(grunt);

    var devmode = grunt.option('dev');

    grunt.initConfig({
      pkg: grunt.file.readJSON('package.json'),

      sass: {
        options: {
          sourceMap: true
        },
        dist: {
          files: {
            'assets/css/unprefixed/style-redesign-v1.css': 'assets/sass/style-redesign-v1.scss',
            'assets/css/unprefixed/atelier-schemes/forest.css': 'assets/sass/atelier-schemes/forest.scss',
            'assets/css/unprefixed/atelier-schemes/plateau.css': 'assets/sass/atelier-schemes/plateau.scss',
            'assets/css/unprefixed/atelier-schemes/heath.css': 'assets/sass/atelier-schemes/heath.scss',
            'assets/css/unprefixed/atelier-schemes/cave.css': 'assets/sass/atelier-schemes/cave.scss',
            'assets/css/unprefixed/atelier-schemes/sulphurpool.css': 'assets/sass/atelier-schemes/sulphurpool.scss',
            'assets/css/unprefixed/atelier-schemes/lakeside.css': 'assets/sass/atelier-schemes/lakeside.scss',
            'assets/css/unprefixed/atelier-schemes/savanna.css': 'assets/sass/atelier-schemes/savanna.scss',
            'assets/css/unprefixed/atelier-schemes/seaside.css': 'assets/sass/atelier-schemes/seaside.scss',
            'assets/css/unprefixed/atelier-schemes/estuary.css': 'assets/sass/atelier-schemes/estuary.scss',
            'assets/css/unprefixed/atelier-schemes/dune.css': 'assets/sass/atelier-schemes/dune.scss'
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
            require('autoprefixer')({browsers: 'last 2 versions'}),
          ]
        },

        dist: {
          expand: true,
          flatten: true,
          files: {
            'assets/css/style-redesign-v1-prefixed.css': 'assets/css/unprefixed/style-redesign-v1.css',
            'assets/css/prefixed/atelier-schemes/forest.css': 'assets/css/unprefixed/atelier-schemes/forest.css',
            'assets/css/prefixed/atelier-schemes/plateau.css': 'assets/css/unprefixed/atelier-schemes/plateau.css',
            'assets/css/prefixed/atelier-schemes/heath.css': 'assets/css/unprefixed/atelier-schemes/heath.css',
            'assets/css/prefixed/atelier-schemes/cave.css': 'assets/css/unprefixed/atelier-schemes/cave.css',
            'assets/css/prefixed/atelier-schemes/sulphurpool.css': 'assets/css/unprefixed/atelier-schemes/sulphurpool.css',
            'assets/css/prefixed/atelier-schemes/lakeside.css': 'assets/css/unprefixed/atelier-schemes/lakeside.css',
            'assets/css/prefixed/atelier-schemes/savanna.css': 'assets/css/unprefixed/atelier-schemes/savanna.css',
            'assets/css/prefixed/atelier-schemes/seaside.css': 'assets/css/unprefixed/atelier-schemes/seaside.css',
            'assets/css/prefixed/atelier-schemes/estuary.css': 'assets/css/unprefixed/atelier-schemes/estuary.css',
            'assets/css/prefixed/atelier-schemes/dune.css': 'assets/css/unprefixed/atelier-schemes/dune.css'
          }
        }
      },

      criticalcss: {
        custom: {
          options: {
            url: "http://localhost/~bram/syntax-highlighting/src/index/index.html",
            width: 1200,
            height: 900,
            outputfile: "assets/css/critical.css",
            filename: "assets/css/style-redesign-v1.css", // Using path.resolve( path.join( ... ) ) is a good idea here
            buffer: 800*1024,
            ignoreConsole: false
          }
        }
      },

      cssmin: {
        dist: {
          files: {
            'assets/css/style-redesign-v1.css': 'assets/css/style-redesign-v1-prefixed.css',
            'assets/css/critical.min.css': 'assets/css/critical.css',
            'assets/css/prefixed/atelier-schemes/forest.min.css': 'assets/css/prefixed/atelier-schemes/forest.css',
            'assets/css/prefixed/atelier-schemes/plateau.min.css': 'assets/css/prefixed/atelier-schemes/plateau.css',
            'assets/css/prefixed/atelier-schemes/heath.min.css': 'assets/css/prefixed/atelier-schemes/heath.css',
            'assets/css/prefixed/atelier-schemes/cave.min.css': 'assets/css/prefixed/atelier-schemes/cave.css',
            'assets/css/prefixed/atelier-schemes/sulphurpool.min.css': 'assets/css/prefixed/atelier-schemes/sulphurpool.css',
            'assets/css/prefixed/atelier-schemes/lakeside.min.css': 'assets/css/prefixed/atelier-schemes/lakeside.css',
            'assets/css/prefixed/atelier-schemes/savanna.min.css': 'assets/css/prefixed/atelier-schemes/savanna.css',
            'assets/css/prefixed/atelier-schemes/seaside.min.css': 'assets/css/prefixed/atelier-schemes/seaside.css',
            'assets/css/prefixed/atelier-schemes/estuary.min.css': 'assets/css/prefixed/atelier-schemes/estuary.css',
            'assets/css/prefixed/atelier-schemes/dune.min.css': 'assets/css/prefixed/atelier-schemes/dune.css'
          }
        }
      },

      copy: {
        main: {
          // src: 'dist/static/prefixed/home.min.css',
          // dest: 'src/templates/partials/homeheadstyles.hbs',
          files: {
            'src/inc/concat-min-js.inc' : 'assets/js/concat.min.js',
            'src/inc/critical-min-css.inc' : 'assets/css/critical.min.css',
            'src/inc/forest-css.inc' : 'assets/css/prefixed/atelier-schemes/forest.min.css',
            'src/inc/plateau-css.inc' : 'assets/css/prefixed/atelier-schemes/plateau.min.css',
            'src/inc/heath-css.inc' : 'assets/css/prefixed/atelier-schemes/heath.min.css',
            'src/inc/cave-css.inc' : 'assets/css/prefixed/atelier-schemes/cave.min.css',
            'src/inc/sulphurpool-css.inc' : 'assets/css/prefixed/atelier-schemes/sulphurpool.min.css',
            'src/inc/lakeside-css.inc' : 'assets/css/prefixed/atelier-schemes/lakeside.min.css',
            'src/inc/savanna-css.inc' : 'assets/css/prefixed/atelier-schemes/savanna.min.css',
            'src/inc/seaside-css.inc' : 'assets/css/prefixed/atelier-schemes/seaside.min.css',
            'src/inc/estuary-css.inc' : 'assets/css/prefixed/atelier-schemes/estuary.min.css',
            'src/inc/dune-css.inc' : 'assets/css/prefixed/atelier-schemes/dune.min.css'
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
            'index.html': 'dist/index-max.html',    // 'destination': 'source'
            'atelier-schemes/index.html': 'dist/atelier-schemes/index-max.html',
            'atelier-schemes/cave/index.html': 'dist/atelier-schemes/cave/index-max.html',
            'atelier-schemes/demo/changes-03-2015.html': 'dist/atelier-schemes/demo/changes-03-2015-max.html',
            'atelier-schemes/dune/index.html': 'dist/atelier-schemes/dune/index-max.html',
            'atelier-schemes/estuary/index.html': 'dist/atelier-schemes/estuary/index-max.html',
            'atelier-schemes/forest/index.html': 'dist/atelier-schemes/forest/index-max.html',
            'atelier-schemes/heath/index.html': 'dist/atelier-schemes/heath/index-max.html',
            'atelier-schemes/lakeside/index.html': 'dist/atelier-schemes/lakeside/index-max.html',
            'atelier-schemes/plateau/index.html': 'dist/atelier-schemes/plateau/index-max.html',
            'atelier-schemes/savanna/index.html': 'dist/atelier-schemes/savanna/index-max.html',
            'atelier-schemes/seaside/index.html': 'dist/atelier-schemes/seaside/index-max.html',
            'atelier-schemes/sulphurpool/index.html': 'dist/atelier-schemes/sulphurpool/index-max.html',
            'base2tone/index.html': 'dist/base2tone/index-max.html',
            'chrome-devtools/index.html': 'dist/chrome-devtools/index-max.html',
            'duotones/index.html': 'dist/duotones/index-max.html',
            'lab/index.html': 'dist/lab/index-max.html',
            'prism/index.html': 'dist/prism/index-max.html',
          }
        }
      },

      concat: {
         dist: {
           files: {
             'assets/js/concat.js' :  ['assets/js/fontfaceobserver.js','assets/js/load-font.js','assets/js/loadCSS.js','assets/js/cssrelpreload.js']
           }
         }
       },

      uglify: {
        options: {
          preserveComments: 'some'
        },
        dist: {
          files: {
            'assets/js/concat.min.js' : 'assets/js/concat.js'
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

        scss: {
            files: ['assets/sass/**/*.scss'],
            // tasks: ['scss','autoprefixer','cssmin','copy','hashres'],
            tasks: ['scss','postcss','criticalcss','cssmin','copy'],
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
    grunt.registerTask('build', ['concat', 'uglify', 'sass', 'postcss:dist', 'cssmin','copy','criticalcss','htmlmin']);
    // grunt.registerTask('build', ['sass', 'autoprefixer', 'cssmin']);
    // grunt.registerTask('scss', ['sass', 'autoprefixer', 'cssmin', 'hashres']);
    grunt.registerTask('sass', ['sass', 'postcss:dist', 'cssmin']);
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
