var webpack = require('webpack');
var path = require('path');

module.exports = {
    entry: './resources/js/main.js',
    output: {
        path: path.resolve(__dirname, './public/js'),
        filename: 'app.js'
    },
    resolve: {
        alias: {
        'vue$': 'vue/dist/vue.esm.js' // 'vue/dist/vue.common.js' for webpack 1
        }
    }
}