module.exports = function(grunt) {
	grunt.initConfig({
		// Watch task
		watch: {
			sass: {
				files: ["dev/scss/*.scss"],
				tasks: ["sass"]
			},
			js_files: {
				files: ["dev/javascript/*.js"],
				tasks: ["uglify"]	
			}
		},
		// Sass task
		sass: {
			dist: {
				options: {
					style: "compressed"
				},
				files: {
					"dev/prod/css/style.css": "dev/scss/base.scss"
				}
			}
		},
		// BrowserSync
		browserSync: {
			dev: {
				bsFiles: {
					src: "dev/prod/css/*.css",
					src: "dev/prod/*.php",
					src: "dev/scss/*.scss"
				},
				options: {
					watchTask: true,
					proxy: 'http://localhost/GitHub/escenario-tlaxcala/dev/prod/'
				}
			}
		},
		// Uglify
		uglify: {
			my_target: {
				files: {
					"dev/prod/js/actions.min.js": ["dev/javascript/*.js"],
				}
			}
		}
	});

	grunt.loadNpmTasks("grunt-contrib-watch");
	grunt.loadNpmTasks("grunt-contrib-sass");
	grunt.loadNpmTasks("grunt-contrib-uglify");
	grunt.loadNpmTasks("grunt-browser-sync");

	// Default task
	grunt.registerTask("default", ["browserSync", "watch"]);
};