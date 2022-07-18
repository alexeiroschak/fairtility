const { src, dest, watch, series, parallel } = require('gulp')
const sass = require('gulp-sass')(require('sass'))
const autoprefixer = require('gulp-autoprefixer')
const sourcemaps = require('gulp-sourcemaps')
const clean = require('gulp-clean')
const rename = require('gulp-rename')
const webpack = require('webpack-stream')
const uglify = require('gulp-uglify')

function cleanCSS() {
    return src('assets/css', { allowEmpty: true })
        .pipe( clean() )
}

function cleanJS() {
    return src('assets/js', { allowEmpty: true })
        .pipe( clean() )
}

function compileCSS() {
    return src('src/scss/*.scss')
        .pipe( sourcemaps.init() )
        .pipe( sass().on('error', sass.logError) )
        .pipe( autoprefixer() )
        .pipe( rename('styles.css') )
        .pipe( sourcemaps.write('.') )
        .pipe( dest('assets/css') )
}

function compileJS() {
    return src('src/js/index.js')
        .pipe( webpack({
            devtool: 'source-map',
            output: {
                filename: 'main.js',
                sourceMapFilename: 'main.js.map',
            },
            mode: 'development',
            module: {
                rules: [
                    {
                        test: /\.js$/,
                        use: {
                            loader: 'babel-loader',
                            options: {
                                presets: ['@babel/preset-env'],
                                targets: 'ie 11, not dead',
                                plugins: [
                                    '@babel/plugin-transform-classes'
                                ]
                            }
                        }
                    }
                ]
            }
        }) )
        .pipe( dest( 'assets/js' ) )
}

function minifyJS() {
    return src('assets/js/main.js')
        .pipe( uglify() )
        .pipe( rename('main.min.js') )
        .pipe( dest('assets/js') )
}

function postCompileJSClean() {
    return src('assets/js/main.js')
        .pipe( clean() )
}

function watchCSS(cb) {
    watch('src/scss/**/*.scss', series( 
        cleanCSS, 
        compileCSS
    ) )
    cb()
}

function watchJS(cb) {
    watch('src/js/**/*.js', series( 
        cleanJS, 
        compileJS,
        minifyJS,
        postCompileJSClean
    ) )
    cb()
}

exports.default = parallel( watchCSS, watchJS )