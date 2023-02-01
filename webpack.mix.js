const mix = require('laravel-mix');
mix
  .js(['src/js/app.js', 'src/js/lucide.js'], 'js')
  .js('src/js/splide.js', 'js')
  .sass('src/sass/app.scss', 'css')
  // .sass('src/sass/woocommerce.scss', 'css')
  .sourceMaps(false, 'inline-source-map')
  // .webpackConfig({ devtool: 'source-map' })
  .disableSuccessNotifications()
  .setPublicPath('./build')
  .browserSync({
    https: true,
    proxy: 'oxhu160123.local',
    files: [
      './**/*.php',
      './**/*.js',
      './**/*.scss',
      './**/*.jpg',
      './**/*.png',
      './**/*.svg',
    ] /* Reload if any file with one of these extensions is changed */,
    ignore: ['./.git', './node_modules', './build', './vendor'],
    browser: 'Firefox',
  });
