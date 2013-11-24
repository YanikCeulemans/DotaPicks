module.exports = function(grunt) {

    // Project configuration.
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        less: {
            dist: {
                options: {
                    dumpLineNumbers: 'all'
                },
                files: {
                    'public/css/main.css' : 'public/less/main.less'
                }
            }
        },
        watch: {
            less: {
                files: ['public/less/*.less'],
                tasks: ['less']
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-watch');

    // Default task(s).
    grunt.registerTask('default', ['less', 'watch:less']);

};
