// ****************************
// 1. Déclaration des variables
// ****************************

var gulp = require('gulp');
var sass = require('gulp-sass')(require('sass'));
var rename = require("gulp-rename");
var browserSync = require('browser-sync');
var wait = require('gulp-wait');
var minify = require('gulp-minify');
var autoprefixer = require('gulp-autoprefixer');

// *************
// 2. Mes tâches
// *************

// sassification
gulp.task('sass', function() {
    return gulp.src('./src/css/**/*.scss')
    .pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))
    .pipe(autoprefixer({
        cascade: false
    }))
    .pipe(rename(function (path) {
        path.basename += ".min";
    }))
    .pipe(gulp.dest('./css'));
});

// Browser Sync
gulp.task('browser-sync', function () {
    browserSync.init({
        server: {
            baseDir: "./"
        }
    });
});

// Moulinette JS
gulp.task('jsification', function () {
    return gulp.src('./src/js/*.js')
        .pipe(wait(200))
        .pipe(minify({
            ext: {
                min: '.min.js'
            },
            noSource:true
        }))
        .pipe(gulp.dest('./js'));
});

// Moulinette HTML
gulp.task('htmlification', function () {
    return gulp.src('./src/*.html')
        .pipe(wait(200))
        .pipe(gulp.dest('.'));
});

// Moulinette PHP
gulp.task('phpification', function () {
    return gulp.src('./src/*.php')
        .pipe(wait(200))
        .pipe(gulp.dest('.'));
});

gulp.task('observe', gulp.parallel('browser-sync', 'htmlification', 'phpification', 'sass', 'jsification', function () {
    gulp.watch('./src/css/**/*.scss', gulp.series('sass'));
    gulp.watch('./src/js/*.js', gulp.series('jsification'));
    gulp.watch('./src/*.html', gulp.series('htmlification'));
    gulp.watch('./src/*.php', gulp.series('phpification'));
    gulp.watch('./dist/*.html').on('change', browserSync.reload);
    gulp.watch('./dist/*.php').on('change', browserSync.reload);
    gulp.watch('./dist/css/*.css').on('change', browserSync.reload);
    gulp.watch('./dist/js/*.js').on('change', browserSync.reload);
}));

gulp.task('default', gulp.series('observe'));