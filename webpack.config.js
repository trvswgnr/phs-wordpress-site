// webpack v4
const path = require('path');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');

module.exports = {
	entry: {
		main: './src/js/main.js'
	},
	output: {
		path: path.resolve(__dirname, 'dist'),
		filename: '[name].js'
	},
	module: {
		rules: [
			{
				test: /\.js$/,
				exclude: /node_modules/,
				use: {
					loader: "babel-loader"
				}
      },
			{
				test: /\.s[c|a]ss$/,
				use: ['style-loader', MiniCssExtractPlugin.loader, 'css-loader', 'postcss-loader', 'sass-loader']
      }
    ]
	},
	plugins: [
    new MiniCssExtractPlugin({
			filename: 'main.css',
		}),
		 new BrowserSyncPlugin({
				host: 'localhost',
				port: 3000,
				// @NOTE: make sure this proxy matches the folder name of your wordpress installation
				proxy: 'http://localhost/premier',
				files: ['**/*.php'],
				ghostMode: {
					clicks: false,
					forms: false
				},
				snippetOptions: {
					ignorePaths: "wp-admin/**"
				}
			})
	]
};
