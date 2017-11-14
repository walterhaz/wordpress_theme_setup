var gulp = require('gulp'),
    sass = require('gulp-sass').,
    browserSync = require('browser-sync').create();

var themeName = '_s';
var themeDir = 'wp-content/themes/_s';
var wordpressLocation = "localhost/wordpress_theme_setup";

// browser-sync watched files
// automatically reloads the page when files changed
var browserSyncWatchFiles = [
    themeDir + './*.css',
    themeDir + './js/*.js',
    themeDir + './**/*.php'
];


// browser-sync options
// see: https://www.browsersync.io/docs/options/
var browserSyncOptions = {
    proxy: wordpressLocation,
    notify: false,
    ui: false,
};

//compile sass
gulp.task('styles', function() {
    gulp.src('sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./'))
});

// watch files gulp
gulp.task('watch',function() {

    browserSync.init({
        proxy: "localhost/hannarutgers",
        files: ['./**/*.css', './**/*']
    });

    gulp.watch('sass/**/*.scss',['styles']);
});


gulp.task('default', ['styles', 'watch']);