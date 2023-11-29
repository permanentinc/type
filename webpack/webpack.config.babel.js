import path from 'path';
import MiniCssExtractPlugin from 'mini-css-extract-plugin';
import WebpackMessages from 'webpack-messages';

const stats = {
    colors: true,
    hash: false,
    version: false,
    timings: false,
    assets: false,
    chunks: false,
    modules: false,
    reasons: false,
    children: false,
    source: false,
    errors: false,
    errorDetails: false,
    warnings: false,
    publicPath: false,
};

module.exports = {
    entry: [
        path.resolve(__dirname, '../js/app.js')
    ],
    stats,
    output: {
        // publicPath: '_resources/themes/mercury/dist/scripts/',
        path: path.resolve(__dirname, '../dist/scripts'),
        filename: '[name].js',
        chunkFilename: '[name].js',
    },
    module: {
        rules: [
            {
                test: /\.s[ac]ss$/i,
                use: [MiniCssExtractPlugin.loader, 'css-loader', 'sass-loader'],
            },
        ]
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: '../styles/[name].css',
        }),
        new WebpackMessages({
            name: 'client',
            logger: str => console.log(`>> ${str}`)
        })
    ],
} 
