var gulp 		= require('gulp'),
	browserSync = require('browser-sync'),
	reload      = browserSync.reload;


// browserSync
gulp.task('browser-sync', function(){
	browserSync.init(["style.css" , "./js/app.js" , "*.php"],{
		open: false,
		options: {
			proxy: "localhost:3000/wordpress",
			notify : false
		}

		/*server: {
			baseDir: "."
		}*/
	});
});

// Watching for changes
gulp.task('watch',['browser-sync'], function(){
	gulp.watch();
});


// Default task
 gulp.task('default', ['watch'], function() {
 });