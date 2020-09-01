// ==== MAIN ==== //

var gulp = require('gulp');



//// Dist task chain: wipe -> build -> clean -> copy -> compress images
//// NOTE: this is a resource-intensive task!
//

/// gulp.task('build', gulp.series('images', 'scripts', 'styles', 'theme'));

gulp.task('dist', gulp.series('utils-dist','images-optimize'));
