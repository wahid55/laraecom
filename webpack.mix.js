let theme = process.env.npm_config_theme;
if(theme) {
    require(`${__dirname}/themes/${theme}/webpack.mix.js`);
} else {
    require(`${__dirname}/themes/default/webpack.mix.js`);
}