'use strict';

const gulp = require('gulp');
const sass = require('gulp-sass');
const browserSync = require('browser-sync');

sass.compiler = require('node-sass');

const browserSyncTask = () => {
	browserSync.init({
		proxy: 'localhost/wordpress',
		files: './**/*.php',
	});
};

const sassTask = () => {
	return gulp
		.src('./sass/index.scss')
		.pipe(sass().on('error', sass.logError))
		.pipe(gulp.dest('./'));
};

const watchSassTask = () => {
	gulp.watch('./sass/**/*.scss', () => sassTask().pipe(browserSync.stream()));
};

exports.default = gulp.parallel(watchSassTask, browserSyncTask);
exports.build = sassTask;
