var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');

var SRC = [
	'Resources/Private/Scss/*.scss',
];

var DEST = 'Resources/Public/Css';

var PATHS = [
  './Resources/Private/Scss/foundation',
];

var OPTIONS = {
	includePaths: PATHS,
	outputStyle: 'compressed', // 'expanded', 'compact', 'compressed'
	
}

var COMPATIBILITY = [
  'last 2 versions',
  'ie >= 9',
  'and_chr >= 2.3'
];

gulp.task('sass', function() {
	return gulp.src(SRC)
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
