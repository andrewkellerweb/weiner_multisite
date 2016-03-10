var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('sass', function() {
    var sassOptions = {
        includePaths: ['library/scss/neat'],
        outputStyle: 'expanded'
    }

    return gulp.src('library/scss/**')
        .pipe(sass(sassOptions).on('error', sass.logError))
        .pipe(gulp.dest('library/css'));
});

gulp.task('default', ['sass'], function() {
    gulp.watch('library/scss/**', ['sass']);
});
