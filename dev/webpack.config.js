//https://hackernoon.com/a-tale-of-webpack-4-and-how-to-finally-configure-it-in-the-right-way-4e94c8e7e5c1
//https://github.com/webpack-contrib/mini-css-extract-plugin/issues/37
var glob = require("glob");
const path = require('path');
const CleanWebpackPlugin = require('clean-webpack-plugin');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const ImageminPlugin = require('imagemin-webpack-plugin').default;
const CopyWebpackPlugin = require('copy-webpack-plugin');
var OptimizeCssAssetsPlugin = require('optimize-css-assets-webpack-plugin');
const basePath = __dirname;
const targetPath = '../';
const targetFolder = 'assets';
var SpritesmithPlugin = require('webpack-spritesmith');
module.exports = {
  entry: {
   // 'js/vendor': './src/js/plugins/entry.js',
    'js/scripts': glob.sync('./src/js/*.js')
  },
  output: {
    path: path.resolve(__dirname, '../assets/'),
    filename: '[name].js'
  },
  node: false,
  devtool: 'source-map',
   module: {
        rules: [
         {
            test: /\.js$/,
            exclude: /node_modules/,
            use: {
              loader: 'babel-loader'}
        },
          {
            test: /\.scss$/,
            use: [ 'style-loader', MiniCssExtractPlugin.loader, 'css-loader?url=false', 'sass-loader']
        },
          {
            test: /\.css$/,
            use: [ 'style-loader', 'css-loader?url=false']
          },
        {test: /\.png$/, use: [
                'file-loader?name=[path][name].[ext]'
            ]}
        ]
    },
  resolve: {
        modules: ["node_modules", "src"]
    },
  plugins: [
   
  new CleanWebpackPlugin([targetFolder], {
        root: basePath + '/' + targetPath
      }),

    new CopyWebpackPlugin([{
      from: 'src/',
      to: '../assets/',
      ignore: ["js/**/*", "sass/**/*"]
    },
      {
        from: 'src/fonts/',
        to: '../assets/fonts/'
      }]),
     new ImageminPlugin({ test: /\.(jpe?g|png|gif|svg)$/i,
                         optipng: {
        optimizationLevel: 9
      }}),
    new SpritesmithPlugin({
      src :{
       cwd: path.resolve(__dirname, 'src/img/sprites'),
                glob: '*.png'
    },
                 target: {
                image: path.resolve(__dirname, 'src/img/blocks/spritessheet.png'),
                css: path.resolve(__dirname, 'src/sass/_sprite.scss')
            },
            apiOptions: {
               cssImageRef: '../img/blocks/spritessheet.png'
            }
    }),
    new MiniCssExtractPlugin({
      filename: 'css/main.min.css',
    }),
    new OptimizeCssAssetsPlugin({
      assetNameRegExp: /\.optimize\.css$/g,
      cssProcessor: require('cssnano'),
      cssProcessorOptions: { safe: true, discardComments: { removeAll: true } },
      canPrint: true
    })
    
   ]
};
