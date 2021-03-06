/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


var gulp = require('gulp');
var concat = require('gulp-concat');
var templateCache = require('gulp-angular-templatecache');
var appJsResouceFolder = './src/AppBundle/Resources/js/';
var appCssResouceFolder = './src/AppBundle/Resources/css/';

gulp.task('concat:js', function() {
        return gulp.src([
                appJsResouceFolder + '*.module.js',
                appJsResouceFolder + '*.js'
        ])
                .pipe(concat('app.js'))
                .pipe(gulp.dest('./web/js/'))
        ;
});

gulp.task('concat:html', function() {
        return gulp.src(appJsResouceFolder + '*.html')
                .pipe(templateCache({standalone: true}))
                .pipe(gulp.dest('./web/js/'))
        ;
});

gulp.task('concat:css', function() {
        return gulp.src(appCssResouceFolder + '*.css')
                .pipe(concat('app.css'))
                .pipe(gulp.dest('./web/css/'))
        ;
});

gulp.task('watch', function() {
        gulp.watch(appJsResouceFolder + '*.js', ['concat:js']);
        gulp.watch(appJsResouceFolder + '*.html', ['concat:html']);
        gulp.watch(appCssResouceFolder + '*.css', ['concat:css']);
});

gulp.task('default', ['concat', 'watch']);
gulp.task('concat', ['concat:js', 'concat:html', 'concat:css']);
