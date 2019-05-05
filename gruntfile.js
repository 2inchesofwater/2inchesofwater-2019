module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
	less: {
		develop: {
			options: {
				paths: ['development/assets']
			},
			files: {
				'styles/css/index.css': 'styles/less/_index.less',
				'styles/css/critical.css': 'styles/less/_critical.less'
			}
		}
	},
	postcss: {
		options: {
		  map: {
			  inline: false, 
			  annotation: 'styles/css/maps/' 
		  },

		  processors: [
			require('pixrem')(), 
			require('autoprefixer')({browsers: 'last 2 versions'}), 
			require('cssnano')() 
		  ]
		},
		dist: {
		  src: 'styles/css/*.css'
		}
	},
	watch: {
		css: {
			files: ['styles/less/*.less'],
			tasks: ['less:develop','postcss']
		}
	}
  });

  // Load the plugin that provides the "uglify" task.
  //grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-postcss');
  grunt.loadNpmTasks('grunt-contrib-watch');
  // Default task(s).
  grunt.registerTask('default', ['watch:css','less:develop']);

  grunt.registerTask('production', ['watch','less:production']);
};