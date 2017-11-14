var gulp = require('gulp'),
    browserSync = require('browser-sync').create();
    sass = require('gulp-sass');


var themeName = '_s';
var wordpressLocation = "localhost/wordpress_theme_setup";


// browser-sync watched files
var browserSyncWatchFiles = [
    './wp-content/themes/' + themeName + '/*.css',
    './wp-content/themes/' + themeName + '/js/*.js',
    './wp-content/themes/' + themeName + '/**/*.php'
];


//compile sass
gulp.task('styles', function() {
    gulp.src('wp-content/themes/' + themeName + '/sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('wp-content/themes/' + themeName))
        .pipe(browserSync.stream())
});

// watch files gulp
// browser-sync options
// see: https://www.browsersync.io/docs/options/
gulp.task('watch', ['styles'],function() {

    browserSync.init({
        proxy: wordpressLocation,
        files: browserSyncWatchFiles,
        logLevel: "info",
        //tunnel: "mysite" //true for random tunnel, string for string.localtunnel.me
        //open: tunnel
        notify: false,
        injectChanges: true
    });

    gulp.watch("wp-content/themes/_s/sass/*.scss", ['styles']);
    gulp.watch("./*.php");
});


// default gulp task: compiles sass, browsersyns reloading and watches for file changes
gulp.task('default', ['watch']);