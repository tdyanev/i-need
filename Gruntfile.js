module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),


    casperjs: {
      options: {},

      files: ['e2e/**/*.js'],
    },

    shell: {
      unitTest: {
        command: [
          'cd application/tests',
          '../../vendor/phpunit/phpunit/phpunit',
          'cd ../../',
        ].join(' && '),
      },

      server: {
        command: 'php -S 127.0.0.1:<%= pkg.config.port %> -t public/ bin/router.php',
      },

    },

    watch: {
      options: {
        livereload: true,
        spawn: false,
        interrupt: true,
      },
      views: {
        files: 'application/views/**/*.php',
      },
      css: {
        files: 'public/**/*.css',
      },
    }

    /*

    uglify: {
      options: {
        banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %>\n'
      },
      build: {
        src: 'src/<%= pkg.name %>.js',
        dest: 'build/<%= pkg.name %>.min.js'
      }


    }

    */
  });

  grunt.loadNpmTasks('grunt-casperjs');
  grunt.loadNpmTasks('grunt-shell');
  grunt.loadNpmTasks('grunt-contrib-watch');
  



  // command aliases


  grunt.registerTask('default', []);

  // TODO
  grunt.registerTask('build', []);



  grunt.registerTask('server', [
    'shell:server',
  ]);

  grunt.registerTask('test', [
    'casperjs',
    'shell:unitTest',
  ]);

};
