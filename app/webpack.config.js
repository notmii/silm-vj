// webpack.config.js
const { VueLoaderPlugin } = require('vue-loader');
const path = require('path');

module.exports = {
  entry: path.resolve(__dirname, 'asset-src/app.js'),
  output: {
    filename: 'app.js',
    path: path.resolve(__dirname, 'public/assets/js'),
  },
  mode: 'development',
  module: {
    rules: [
      {
        test: /\.vue$/,
        loader: 'vue-loader'
      },
      {
        test: /\.js$/,
        loader: 'babel-loader'
      },
      {
        test: /\.css$/,
        use: [
          'vue-style-loader',
          'css-loader'
        ]
      }
    ]
  },
  plugins: [
    new VueLoaderPlugin()
  ],
  resolve: {
    alias: {
      'vue$': 'vue/dist/vue.esm.js',
      '@modules': path.resolve(__dirname, 'asset-src/modules')
    }
  }
}
