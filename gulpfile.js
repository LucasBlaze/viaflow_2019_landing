var gulp        = require('gulp'),
    stylus      = require('gulp-stylus'),
    jeet        = require('jeet'),
    koutoSwiss  = require('kouto-swiss'),
    rupture     = require('rupture'),
    browserSync = require('browser-sync'),
    reload      = browserSync.reload,
    uglify      = require('gulp-uglify'),
    changed     = require('gulp-changed'),
    plumber     = require('gulp-plumber'),
    svgSymbols  = require('gulp-svg-symbols'),
    spritesmith = require('gulp.spritesmith');

var path = {
  js: ['dev/assets/js/**/*.js', '!dev/assets/js/**/*.min.js'],
  stylus: ['dev/assets/stylus/**/*.styl'],
  css: ['dev/assets/css/**/*.css', '!dev/assets/css/**/*.min.css'],
  img: ['dev/assets/img/**/*']
};

gulp.task('sprite', function () {
  var spriteData = gulp.src('dev/assets/img/partials/*.png')
  .pipe(spritesmith({
    imgPath: 'dev/assets/img/sprite.png',
    imgName: 'sprite.png',
    cssName: 'sprite.styl',
    cssFormat: 'stylus',
    algorithm: 'binary-tree'
  }));
  spriteData.img.pipe(gulp.dest('dev/assets/img/'));
  spriteData.css.pipe(gulp.dest('dev/assets/stylus/'));
});

gulp.task('spritesvg', function () {
  return gulp.src('dev/assets/img/svg/*.svg')
    .pipe(svgSymbols({
      templates: ['default-svg']
    }))
    .pipe(gulp.dest('dev/assets/img'));
});


gulp.task('stylus', function () {
  return gulp.src(path.stylus)
    .pipe(plumber({
      errorHandler: function (err) {
        console.log([
          'Errrroou!',
          '    Erro: ' + err.name + '',
          '  plugin: ' + err.plugin + '',
          'Mensagem: ' + err.message + '',
        ].join('\n'));
        this.emit('end');
      }
    }))
    .pipe(stylus({
      compress: true,
      use: [jeet(), rupture(), koutoSwiss()]
    }))
    .pipe(gulp.dest('dev/assets/css/'))
    .pipe(reload({stream:true}));
});

gulp.task('sync', function() {
  browserSync({
    server: {
      baseDir: "./dev"
    }
  });
});

gulp.task('watch', function () {
  gulp.watch(path.stylus, ['stylus']);
  gulp.watch('dev/*.html').on('change', browserSync.reload);
});

gulp.task('default', ['stylus', 'watch', 'spritesvg', 'sync']);
