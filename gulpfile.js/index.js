// ==== GULPFILE ==== //

// This configuration follows the modular design of the `gulp-starter` project by Dan Tello: https://github.com/greypants/gulp-starter
// Explore `tasks` for more...

// var requireDir = require('require-dir');
// requireDir('./tasks');


require('./tasks/images.js');
require('./tasks/scripts.js');
require('./tasks/styles.js');
require('./tasks/theme.js');

require('./tasks/watch.js');

require('./tasks/main.js');
require('./tasks/utils.js');
require('./tasks/livereload.js');
// require('./tasks/browsersync.js');

require('./tasks/dist.js');

