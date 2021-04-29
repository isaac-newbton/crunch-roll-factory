const { watch } = require('gulp')
const { src, dest } = require('gulp')
const minify = require('gulp-minify')

function minifyJS(){
    return src('src/js/*.js', { allowEmpty: true })
        .pipe(minify({noSource: true}))
        .pipe(dest('assets/js'))
}

exports.default = function() {
    watch('src/js/*.js', minifyJS)
};