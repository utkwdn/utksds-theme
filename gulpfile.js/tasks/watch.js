// ==== WATCH ==== //

var gulp        = require('gulp'),
    plugins     = require('gulp-load-plugins')({ camelize: true }),
    config      = require('../../gulpconfig').watch;

// Watch (BrowserSync version): build stuff when source files are modified, let BrowserSync figure out when to reload
// Task chain: build -> browsersync -> watch


//gulp.watch('./src/scss/**/*.scss', gulp.series('sass'));



//gulp.task('dist', gulp.series('images-optimize', 'scripts', 'styles', 'theme'));


gulp.task('watch-browsersync', function() {
  gulp.watch(config.src.styles, gulp.series('styles'));
  gulp.watch(config.src.scripts, gulp.series('scripts'));
  gulp.watch(config.src.images, gulp.series('images'));
  gulp.watch(config.src.theme, gulp.series('theme'));
});

// Watch (Livereload version): build stuff when source files are modified, inform livereload when anything in the `build` or `dist` folders change
// Task chain: build -> livereload -> watch


gulp.task('watch-livereload', function() {
  gulp.watch(config.src.styles, gulp.series('styles'));
  gulp.watch(config.src.scripts, gulp.series('scripts'));
  gulp.watch(config.src.images, gulp.series('images'));
  gulp.watch(config.src.theme, gulp.series('theme'));
});

// Master control switch for the watch task


gulp.task('watch', gulp.series('watch-'+config.watcher));
