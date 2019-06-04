const gulp = require('gulp');
const sass = require('gulp-sass');
const browserSync = require('browser-sync');

//compiling scss into css
function style(){
    
    // find scss file
    return gulp.src('./assets/scss/**/*.scss')
    
    //pass thats files through sass compiler
    .pipe( sass( {outputStyle: 'compressed'} ) )

    //destination compiled CSS
    .pipe(gulp.dest('./assets/css'))

    // browser sync
    .pipe(browserSync.stream() );

}//style


function watch(){

    browserSync.init({
        proxy: 'http://localhost:8888/sites/ogilvyweb',
        port: 8890,
        injectChanges: true
    });

    gulp.watch('./assets/scss/**/*.scss', style);
    //wath file change
    gulp.watch('./*.php').on('change', browserSync.reload);
    gulp.watch('./assets/js/**/*.js').on('change', browserSync.reload);

}//watch

exports.default = watch;
