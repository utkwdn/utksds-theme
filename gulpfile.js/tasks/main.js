// ==== MAIN ==== //

var gulp = require('gulp');

//// Default task chain: build -> (livereload or browsersync) -> watch
gulp.task('default', gulp.series('watch'));
//
//// Build a working copy of the theme
gulp.task('build', gulp.series('images', 'scripts', 'styles', 'theme'));
//
//// Dist task chain: wipe -> build -> clean -> copy -> compress images
//// NOTE: this is a resource-intensive task!
//
// gulp.task('dist', gulp.series('images-optimize', 'scripts', 'styles', 'theme'));



// function default() {
//  return gulp.series('watch');
// }


