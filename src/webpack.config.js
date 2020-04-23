var webpack = require('webpack');
var path = require('path');

module.exports = {
    entry: './resources/js/main.js',
    output: {
        path: path.resolve(__dirname, './public/js'),
        filename: 'app.js'
    },
    module: {
        rules: [
          {
            test: /\.css$/,
            use: ['style-loader', 'css-loader']
          },
          {
            test: /\.(svg|eot|woff|woff2|ttf)$/,
            use: ['file-loader']
          }
        ]
    },
    resolve: {
        alias: {
        'vue$': 'vue/dist/vue.esm.js' // 'vue/dist/vue.common.js' for webpack 1
        }
    }
}