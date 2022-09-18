const path = require('path');
const webpack = require('webpack');

module.exports = {
    target: 'web',
    mode: 'development',

    entry: {
        appScript: './app/scripts/app.js',
        public: './app/scripts/views/public-views.js'
    },

    output: {
        filename: '[name].js',
        path: path.resolve(__dirname, './app/dist')
    },

    resolve: {
        modules: [
            "node_modules",
            path.resolve(__dirname, 'node_modules')
        ],
        alias: {
            'handlebars': '../../node_modules/handlebars/dist/handlebars',
            'app': path.resolve(__dirname, 'app') + '/scripts/app.js',
        },
        extensions: ['.js']
    },

    plugins: [
        new webpack.ProvidePlugin({
            _: 'underscore'
        })
    ],

    module: {
        rules: [
            {
                test: /\.handlebars$/,
                exclude:/(node_modules)/,
                loader:"handlebars-loader"
            }
        ]
    }
};


const mix = require('laravel-mix');
require('laravel-mix-tailwind');

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
    ])
    .tailwind()
    .vue({version: 3});
    
mix.override(webpackConfig => {
        // BUG: vue-loader doesn't handle file-loader's default esModule:true setting properly causing
        // <img src="[object module]" /> to be output from vue templates.
        // WORKAROUND: Override mixs and turn off esModule support on images.
        // FIX: When vue-loader fixes their bug AND laravel-mix updates to the fixed version
        // this can be removed
    webpackConfig.module.rules.forEach(rule => {
        if (rule.test.toString() === '/(\\.(png|jpe?g|gif|webp)$|^((?!font).)*\\.svg$)/') {
            if (Array.isArray(rule.use)) {
                rule.use.forEach(ruleUse => {
                    if (ruleUse.loader === 'file-loader') {
                        ruleUse.options.esModule = false;
                }
                });
            }
            }
        });
        });