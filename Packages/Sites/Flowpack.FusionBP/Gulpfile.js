var gulp = require('gulp');
var sass = require('gulp-sass');
var sassGlob = require('gulp-sass-glob');
var autoprefixer = require('gulp-autoprefixer');
var browserSync = require('browser-sync').create();
var uglify = require('gulp-uglify');
var concatJs = require('gulp-concat');
var concatCss = require('gulp-concat-css');
var cssnano = require('gulp-cssnano');
var sourcemaps = require('gulp-sourcemaps');

// Input configuration
var inputAssets = [
];
var inputJs = [
	'./Resources/Private/JavaScript/**/*.js'
];
var inputCss = [
	'./Resources/Private/StyleSheets/**/*.css',
	'./Resources/Private/Fusion/**/*.css'
];

var allTasks = ['js', 'css', 'assets'];
var output = './Resources/Public/built';

gulp.task('serve', allTasks, function () {
	browserSync.init({
		proxy: 'dev.domain.loc'
	});

	gulp.watch(inputCss, ['css'])
		.on('change', function (event) {
			console.log('File ' + event.path + ' was ' + event.type + ', running tasks...');
		});
	gulp.watch(inputJs, ['js'])
		.on('change', function (event) {
			console.log('File ' + event.path + ' was ' + event.type + ', running tasks...');
		});
});

gulp.task('assets', function () {
	return gulp
		.src(inputAssets)
		.pipe(gulp.dest(output));
});

gulp.task('js', function () {
	return gulp
		.src(inputJs)
		.pipe(sourcemaps.init())
		.pipe(concatJs('index.js'))
		.pipe(uglify())
		.pipe(sourcemaps.write())
		.pipe(gulp.dest(output));
});

gulp.task('css', function () {
	return gulp
		.src(inputCss)
		.pipe(sourcemaps.init())
		.pipe(concatCss('index.css'))
		.pipe(cssnano())
		.pipe(sourcemaps.write())
		.pipe(gulp.dest(output));
});

gulp.task('default', ['serve']);
gulp.task('build', allTasks);
