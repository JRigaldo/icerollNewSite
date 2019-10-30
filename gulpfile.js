const gulp = require('gulp');
const sass = require('gulp-sass');
// const purify = require('gulp-purifycss');
const browserSync = require('browser-sync').create();


//compile scss into css
function style() {
    // 1. where is my scss file
    return gulp.src('./scss/**/*.scss')
        // 2. pass that file through sass compiler
        .pipe(sass().on('error', sass.logError))
        // 3. where do I save the compiled css
        .pipe(gulp.dest('./'))
        // 4. stream changes to all browser
        .pipe(browserSync.stream());
}

// function purifyCss() {
//     return gulp.task('css', function(){
//         gulp.src('./style.css')
//         .pipe(purify(['./style.css']))
//         .pipe(gulp.dest('./dist/'));
//     });
// }

function watch() {

    browserSync.init({
        proxy: 'http://localhost:8888/iceroll/'
    });


    gulp.watch('./scss/**/*.scss', style)
    gulp.watch('./*.html').on('change', browserSync.reload);
    gulp.watch('./js/**/*.js').on('change', browserSync.reload);
}

exports.style = style;
// exports.purifyCss = purifyCss;
exports.watch = watch;
