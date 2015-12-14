var gulp 		= require('gulp'),
	browserSync = require('browser-sync'),
	reload      = browserSync.reload;


// browserSync
gulp.task('browser-sync', function(){
	browserSync.init(["./*.php", "./style.css", "./js/app.js"],{
		open: false,
		options: {
			proxy: "localhost:3000/maldonado",
			notify : false
		}

		/*server: {
			baseDir: "."
		}*/
	});
});

// Watching for changes
gulp.task('watch',['browser-sync'], function(){
	gulp.watch('./style.css', './*.php', './js/app.js');
});


// Default task
 gulp.task('default', ['watch'], function() {
 });