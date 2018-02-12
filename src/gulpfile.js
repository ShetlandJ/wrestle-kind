var
  gulp = require('gulp'),
  sass = require('gulp-sass')
  concat = require('gulp-concat')
  rename = require('gulp-rename')
  minifycss = require('gulp-minify-css'),
  path = require('path');

var paths = {
  styles: ['sass/*.scss']
};

gulp.task('styles', function() {
  return gulp.src(paths.styles)
    .pipe(sass())
    .pipe(minifycss())
    .pipe(gulp.dest('../gwg'));
});

gulp.task('watch', function() {
  gulp.watch(paths.styles, ['styles']);
});

gulp.task('default', ['styles', 'watch']);
