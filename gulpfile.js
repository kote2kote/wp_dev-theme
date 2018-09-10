var gulp         = require('gulp');
var sass         = require('gulp-sass');
var sourcemaps   = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');
var header = require('gulp-header');
var uglify = require("gulp-uglify");
var rename = require("gulp-rename");
var babelify = require('babelify');
var browserify = require('browserify');
var source = require("vinyl-source-stream");
var streamify = require('gulp-streamify');

gulp.task('default',['browser-sync'], function() {
	gulp.watch('./scss/**/*.scss',['sass']);
	gulp.watch("./**/*.php", ['bs-reload']);
  gulp.watch("./assets/js/**/*.js", ['js']);
});

gulp.task('build', ['sass', 'js']);

// gulp.task('watch', function () {
// 	gulp.watch('./sass/**/*.scss', ['sass']);
// });

//自動監視のタスクを作成(sass-watchと名付ける)
// gulp.task('watch', ['sass'], function(){
//   var watcher = gulp.watch('./scss/**/*.scss', ['sass']);
//   watcher.on('change', function(event) {
//   });
// });

gulp.task('sass', function () {
	gulp.src('./scss/**/*.scss')
		.pipe(sourcemaps.init())
		.pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
		.pipe(sourcemaps.write({includeContent: false}))
		.pipe(sourcemaps.init({loadMaps: true}))
		.pipe(autoprefixer(['last 3 versions', 'ie >= 8', 'Android >= 4', 'iOS >= 8']))
    .pipe(header('@charset "UTF-8";\n\n'))
		.pipe(sourcemaps.write('./'))
		.pipe(gulp.dest('./'));
    .pipe(reload({stream:true}));
});

gulp.task('js', function() {
  browserify('./assets/js/script.js', { debug: true })
    .transform(babelify)
    .bundle()
    .on("error", function (err) { console.log("Error : " + err.message); })
    .pipe(source("script.js"))
    .pipe(streamify(sourcemaps.init()))
    .pipe(streamify(uglify()))
    .pipe(rename({
      extname: '.min.js'
    }))
    .pipe(streamify(sourcemaps.write('./')))
    .pipe(gulp.dest('./assets/js'))
    .pipe(reload({stream:true}));
});

// Reload all browsers
gulp.task('bs-reload', function () {
browserSync.reload();
});

// var gulp = require('gulp');
// var sass = require('gulp-sass');
//
// gulp.task('sass', function(){
//   gulp.src('./sass/**/*.scss')
//     .pipe(sass({outputStyle: 'expanded'}))
//     .pipe(gulp.dest('./css/'));
// });
//
// gulp.task('sass-watch', () => {
//     return gulp.watch(['./sass/**/*.scss'], ['sass']);
// });
//
// gulp.task('default', ['sass-watch']);
