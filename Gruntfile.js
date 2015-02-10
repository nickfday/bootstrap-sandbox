// This shows a full config file!
module.exports = function (grunt) {
    grunt.initConfig({
        watch: {
            files: "sass/**/*.scss",
            tasks: ['compass'],
        },
        compass: {
            dist: {
                options: {
                    sassDir: 'sass',
                    cssDir: 'css'
                    //outputStyle: 'compressed'
                }
            }
        },
        browserSync: {
            dev: {
                bsFiles: {
                    src : 'css/*.css'
                },
                options: {
                    watchTask: true
                }
            }
        },
        validation: {
            options: {
            reset: grunt.option('reset') || false,
            stoponerror: true,
            //remotePath: 'http://decodize.com/',
            //remoteFiles: ['html/moving-from-wordpress-to-octopress/',
            //              'css/site-preloading-methods/'], //or
            //remoteFiles: 'validation-files.json', // JSON file contains array of page paths.
            //relaxerror: ['Bad value X-UA-Compatible for attribute http-equiv on element meta.'] //ignores these errors
        },
        files: {
            src: ['index.html']
                  //'!<%= yeoman.app %>/index.html',
                  //'!<%= yeoman.app %>/modules.html',
                  //'!<%= yeoman.app %>/404.html']
        }
    }
        
    });

    // load npm tasks
    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-contrib-watch');
   // grunt.loadNpmTasks('grunt-browser-sync');
   // grunt.loadNpmTasks('grunt-html-validation');

    // create custom task-list
    grunt.registerTask('default', [ "watch", "compass"]);
};