var gulp 		= require('gulp'),
	browserSync = require('browser-sync'),
	reload      = browserSync.reload;


// browserSync
gulp.task('browser-sync', function(){
	browserSync.init(["./*.php", "./style.css"],{
		open: false,
		options: {
			proxy: "localhost:3000/maldonado",
		}

		/*server: {
			baseDir: "."
		}*/
	});
});

// Watching for changes
gulp.task('watch',['browser-sync'], function(){
	gulp.watch('./style.css', './*.php');
});


// Default task
 gulp.task('default', ['watch'], function() {
 });