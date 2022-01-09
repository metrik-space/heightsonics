// ======================================================================
// REQUIRES
// ======================================================================

const argv = require('yargs').argv;
const autoprefixer = require('gulp-autoprefixer');
const babel = require('gulp-babel');
const bourbon = require('node-bourbon');
const browserSync = require('browser-sync').create();
const buffer = require('vinyl-buffer');
const concat = require('gulp-concat');
const gulp = require('gulp');
const gulpif = require('gulp-if');
const plumber = require('gulp-plumber');
// const removeEmptyLines = require('gulp-remove-empty-lines');
const rollupStream = require('@rollup/stream');
const sass = require('gulp-sass');
const source = require('vinyl-source-stream');
const sourcemaps = require('gulp-sourcemaps');
const stripDebug = require('gulp-strip-debug');
const svgSprite = require('gulp-svg-sprite');
const terser = require('gulp-terser');

// ======================================================================
// CONFIG
// ======================================================================

const options = {
  // general
  watch_interval: 100,
  // browsersync
  bs: {
    run: argv.bs ? true : false,
    // You need to add your url for the path to your wordpress site here.
    proxy: 'http://wordpress-starter-test/',
    root: './',
    opts: {
      open: argv.bs ? true : false,
      https: false,
      reloadDelay: 200,
      ghostMode: false,
      // port: 3000,
    },
  },
  // html
  html: {
    src: [''],
    exts: ['.html', '.php'],
  },
  // css
  css: {
    minify: true,
    sourcemaps: argv.dev ? true : false,
    src: ['assets/css/src/global/', 'assets/css/src/home/'],
    dist: ['assets/css/dist/global/', 'assets/css/dist/home/'],
  },
  // js
  js: {
    minify: true,
    strip_debug: argv.dev ? false : true,
    sourcemaps: argv.dev ? true : false,
    src: ['assets/js/src/'],
    dist: ['assets/js/dist/'],
  },
  // js - vendor
  vendor: {
    minify: true,
    strip_debug: true,
    sourcemaps: false,
    src: ['assets/js/vendor/'],
    dist: ['assets/js/dist/'],
  },
  // svg sprites
  sprites: {
    src: ['assets/icon-sprite/src/'],
    dist: ['assets/icon-sprite/dist/'],
  },
};

// ======================================================================
// ERROR HANDLING
// ======================================================================

function error_handler(err) {
  console.log(err.toString());
  this.emit('end');
}

// ======================================================================
// BROWSER SYNC
// ======================================================================

gulp.task('browser-sync', function () {
  if (options.bs.run) {
    let bsopts = options.bs.opts;
    if (!!options.bs.proxy) {
      bsopts.proxy = options.bs.proxy;
    } else {
      bsopts.server = {
        baseDir: options.bs.root,
      };
    }
    browserSync.init(bsopts);
  }
});

// ======================================================================
// SCSS/SASS - CONCATENATE AND MINIFY
// ======================================================================

for (let i in options.css.src) {
  (function (i) {
    gulp.task('scss_' + i, function () {
      return (
        gulp
          // source files
          .src([options.css.src[i] + '*.scss'])
          // plumber - error handler
          .pipe(
            plumber({
              errorHandler: error_handler,
            })
          )
          // sourcemaps init
          .pipe(gulpif(options.css.sourcemaps, sourcemaps.init()))
          // sass
          .pipe(
            sass({
              outputStyle: options.css.minify ? 'compressed' : 'compact',
              includePaths: [bourbon.includePaths, require('path').resolve(__dirname, 'node_modules')],
            })
          )
          // auto prefixer
          .pipe(autoprefixer())
          // remove empty lines
          // .pipe(gulpif(!options.css.minify, removeEmptyLines()))
          // sourcemaps output
          .pipe(
            gulpif(
              options.css.sourcemaps,
              sourcemaps.write('', {
                includeContent: false,
                sourceRoot: '../src',
              })
            )
          )
          // save
          .pipe(gulp.dest(options.css.dist[i]))
          // browsersync stream
          .pipe(gulpif(options.bs.run, browserSync.stream()))
      );
    });
  })(i);
}

// ======================================================================
// JS - CONCATENATE AND MINIFY
// ======================================================================

for (let i in options.js.src) {
  (function (i) {
    gulp.task('js_' + i, function () {
      return (
        // rollup
        rollupStream({
          input: options.js.src[i] + '_app.js',
          output: {
            format: 'es',
            sourcemap: options.js.sourcemaps,
          },
          // plugins: [rollupResolve()]
        })
          // plumber - error handler
          .pipe(
            plumber({
              errorHandler: error_handler,
            })
          )
          // name
          .pipe(source('scripts.min.js'))
          // buffer
          .pipe(buffer())
          // sourcemaps init
          .pipe(gulpif(options.js.sourcemaps, sourcemaps.init({ loadMaps: true })))
          // strip debug
          .pipe(gulpif(options.js.strip_debug, stripDebug()))
          // babel
          .pipe(babel({ presets: ['@babel/env'] }))
          // minify
          .pipe(gulpif(options.js.minify, terser()))
          // sourcemaps output
          .pipe(
            gulpif(
              options.js.sourcemaps,
              sourcemaps.write('', {
                includeContent: false,
                sourceRoot: '../../../',
              })
            )
          )
          // save
          .pipe(gulp.dest(options.js.dist[i]))
          // browsersync stream
          .pipe(gulpif(options.bs.run, browserSync.stream()))
      );
    });
  })(i);
}

// ======================================================================
// JS VENDOR - CONCATENATE AND MINIFY
// ======================================================================

for (let i in options.vendor.src) {
  (function (i) {
    gulp.task('vendor_' + i, function () { });
  })(i);
}

// ======================================================================
// SVG SPRITES
// ======================================================================

for (let i in options.sprites.src) {
  (function (i) {
    gulp.task('sprites_' + i, function () {
      return (
        gulp
          // source files
          .src([options.sprites.src[i] + '*.svg'])
          // plumber - error handler
          .pipe(
            plumber({
              errorHandler: error_handler,
            })
          )
          // generate svg sprite
          .pipe(
            svgSprite({
              dest: '.',
              mode: {
                symbol: {
                  dest: '.', //'../../icons/dist/',
                  sprite: 'sprite.' + (parseInt(i) + 1) + '.svg',
                },
              },
              shape: {
                id: {
                  generator: 'svg-%s',
                },
              },
              svg: {
                transform: [
                  // remove inline styles within the svg
                  function (svg) {
                    return svg.replace(/(<style.*?<\/style>)/g, '');
                  },
                ],
              },
            })
          )
          // save
          .pipe(gulp.dest(options.sprites.dist[i]))
          // browsersync stream
          .pipe(gulpif(options.bs.run, browserSync.stream()))
      );
    });
  })(i);
}

// ======================================================================
// WATCH FOR CHANGES
// ======================================================================

if (argv.watch) {
  gulp.task('watch', function () {
    // html
    for (let i in options.html.src) {
      for (let j in options.html.exts) {
        gulp
          .watch(options.html.src[i] + '**/*' + options.html.exts[j], {
            interval: options.watch_interval,
          })
          .on('all', browserSync.reload);
      }
    }
    // scss
    for (let i in options.css.src) {
      gulp.watch(options.css.src[i] + '**/*.scss', { interval: options.watch_interval }, gulp.parallel(['scss_' + i]));
    }
    // js
    for (let i in options.js.src) {
      gulp.watch(options.js.src[i] + '**/*.js', { interval: options.watch_interval }, gulp.parallel(['js_' + i]));
    }
    // js - vendor
    for (let i in options.vendor.src) {
      gulp.watch(
        options.vendor.src[i] + '**/*.js',
        { interval: options.watch_interval },
        gulp.parallel(['vendor_' + i])
      );
    }
    // svg sprites
    for (let i in options.sprites.src) {
      gulp
        .watch(
          options.sprites.src[i] + '**/*.svg',
          { interval: options.watch_interval },
          gulp.parallel(['sprites_' + i])
        )
        .on('all', browserSync.reload);
    }
  });
}

// ======================================================================
// RUN TASKS
// ======================================================================

var tasks = ['browser-sync', gulpif(argv.watch, 'watch')];
for (let i in options.css.src) {
  tasks.push('scss_' + i);
}
for (let i in options.js.src) {
  tasks.push('js_' + i);
}
for (let i in options.vendor.src) {
  tasks.push('vendor_' + i);
}
for (let i in options.sprites.src) {
  tasks.push('sprites_' + i);
}
gulp.task('default', gulp.parallel(tasks));
