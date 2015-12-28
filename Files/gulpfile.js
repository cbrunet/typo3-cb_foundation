var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var plumber = require('gulp-plumber');

var SRC = [
	'Resources/Private/Scss/*.scss',
];

var DEST = 'Resources/Public/Css';

var PATHS = [
  './../cb_foundation/Resources/Private/Scss/foundation',
  './../cb_foundation/Resources/Private/Scss/motion-ui'
];

var OPTIONS = {
	includePaths: PATHS,
	outputStyle: 'nested', // 'expanded', 'compact', 'compressed'
	
}

var COMPATIBILITY = [
  'last 2 versions',
  'ie >= 9',
  'and_chr >= 2.3'
];

gulp.task('sass', function() {
	return gulp.src(SRC)
		// .pipe(plumber())
		.pipe(sass(OPTIONS).on('error', sass.logError))
		.pipe(autoprefixer({
			browsers: COMPATIBILITY
		}))
		.pipe(gulp.dest(DEST));
});

gulp.task('build', ['sass']);

gulp.task('default', ['sass'], function() {
	gulp.watch(SRC, ['sass']);
});
