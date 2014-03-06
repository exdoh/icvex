module.exports = function(grunt) {
  'use strict';

  grunt.initConfig({
    uglify  : {
      production : {
        src     : ['**/*.js', '**/*.*.js', '**/*.*.*.js', '**/*.*.*.*.js', '!*.min.js'],
        cwd     : 'js/',
        dest    : 'js/',
        expand  : true,
        ext     : '.min.js',
      },
    },
    cssmin : {
      minify : {
        expand: true,
        cwd   : 'stylesheets/',
        src   : ['*.css', '!*.min.css'],
        dest  : 'stylesheets/',
        ext   : '.min.css'
      }
    }
  });


  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.registerTask('default', ['uglify', 'cssmin']);
};