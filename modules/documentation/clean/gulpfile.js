var gulp = require('gulp');
var sass = require('gulp-sass')(require('sass'));
var babel = require('gulp-babel');
//var cssnano = require('gulp-cssnano');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var cleanCSS = require('gulp-clean-css');


var paths = {
    styles: {
        src: '_sass/clean.sass',
        dest: 'assets/css/'
    },
    scripts: {
        src: '_javascript/clean.js',
        dest: 'assets/js/'
    }
};


var watchPaths = {
    styles: '_sass/**/*.sass',
    scripts: '_javascript/**/*.js',
}


/* Not all tasks need to use streams, a gulpfile is just another node program
 * and you can use all packages available on npm, but it must return either a
 * Promise, a Stream or take a callback and call it
 */
function clean() {
    // You can use multiple globbing patterns as you would with `gulp.src`,
    // for example if you are using del 2.0 or above, return its promise
    return del([ 'assets/js/main.min.js', 'assets/css/clean.min.css' ]);
}


/*
 * Process SASS files
 */
function styles() {
    return gulp.src(paths.styles.src)
        .pipe(sass())
        // .pipe(cleanCSS())
        // pass in options to the stream
        .pipe(rename({
            basename: 'clean',
            suffix: ''
        }))
        .pipe(gulp.dest(paths.styles.dest));
}


/*
 * Process JavaScript files
 */
function scripts() {
    return gulp.src(paths.scripts.src, {sourcemaps: true})
        .pipe(babel())
        // .pipe(uglify())
        .pipe(concat('clean.js'))
        .pipe(gulp.dest(paths.scripts.dest));
}


/* Watch files changes and trigger asset re-building */
function watch() {
    gulp.watch(watchPaths.scripts, scripts);
    gulp.watch(watchPaths.styles, styles);
}


/*
 * Specify if tasks run in series or parallel using `gulp.series` and `gulp.parallel`
 */
var build = gulp.series(clean, gulp.parallel(styles, scripts));


/*
 * You can use CommonJS `exports` module notation to declare tasks
 */
exports.styles = styles;
exports.scripts = scripts;
exports.watch = watch;
exports.build = build;
/*
 * Define default task that can be called by just running `gulp` from cli
 */
exports.default = build;
