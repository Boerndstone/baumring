const Encore = require("@symfony/webpack-encore");
const ImageMinimizerPlugin = require("image-minimizer-webpack-plugin");

// Manually configure the runtime environment if not already configured yet by the "encore" command.
// It's useful when you use tools that rely on webpack.config.js file.
if (!Encore.isRuntimeEnvironmentConfigured()) {
  Encore.configureRuntimeEnvironment(process.env.NODE_ENV || "dev");
}

Encore
  // directory where compiled assets will be stored
  .setOutputPath("public/build/")
  // public path used by the web server to access the output path
  .setPublicPath("/build")
  // only needed for CDN's or subdirectory deploy
  //.setManifestKeyPrefix('build/')

  .copyFiles([
    {
      from: "./assets/images",
      to: "images/[path][name].[ext]",
    },
  ])

  .addLoader({
    test: /\.(gif|png|jpg|jpe?g|svg|webp)$/i,
    loader: "image-webpack-loader",
    options: {
      mozjpeg: {
        progressive: true,
      },
      // optipng.enabled: false will disable optipng
      optipng: {
        enabled: false,
      },
      pngquant: {
        quality: [0.65, 0.9],
        speed: 4,
      },
      gifsicle: {
        interlaced: false,
      },
      // the webp option will enable WEBP
      webp: {
        quality: 75,
      },
    },
  })

  /*.copyFiles({
    from: "./assets/images",

    // optional target path, relative to the output dir
    to: "images/[path][name].[ext]",

    // if versioning is enabled, add the file hash too
    //to: 'images/[path][name].[hash:8].[ext]',

    // only copy files matching this pattern
    pattern: /\.(png|jpg|jpeg|svg)$/,
  })*/

  /*
  .addLoader({
    test: /\.(jpg|jpe?g|png)$/i,
    loader: ImageMinimizerPlugin.loader,
    enforce: "pre",
    options: {
      generator: [
        {
          preset: "webp",
          implementation: ImageMinimizerPlugin.sharpGenerate,
          options: {
            plugins: ["sharp-webp"],
            encodeOptions: {
              webp: {
                quality: 80,
              },
            },
          },
          // Annoyingly, file URLs that are altered (e.g. PNG to WebP) by this
          // loader appear to incorrectly generate paths using the platform's path
          // separator. This means that if built on Windows, the URLs will use a
          // backslash (\), which is not a path separator in an HTTP URL but rather
          // an escape character, meaning that the URL will be incorrect and a 404.
          filename: function (file) {
            return file.filename.replaceAll("\\", "/");
          },
        },
      ],
    },
  })
*/
  /*
   * ENTRY CONFIG
   *
   * Each entry will result in one JavaScript file (e.g. app.js)
   * and one CSS file (e.g. app.css) if your JavaScript imports CSS.
   */
  .addEntry("app", "./assets/app.js")
  .addEntry("map", "./assets/map.js")

  // enables the Symfony UX Stimulus bridge (used in assets/bootstrap.js)
  .enableStimulusBridge("./assets/controllers.json")

  // When enabled, Webpack "splits" your files into smaller pieces for greater optimization.
  .splitEntryChunks()

  // will require an extra script tag for runtime.js
  // but, you probably want this, unless you're building a single-page app
  .enableSingleRuntimeChunk()

  // enables Sass/SCSS support
  .enableSassLoader()

  /*
   * FEATURE CONFIG
   *
   * Enable & configure other features below. For a full
   * list of features, see:
   * https://symfony.com/doc/current/frontend.html#adding-more-features
   */
  .cleanupOutputBeforeBuild()
  .enableBuildNotifications()
  .enableSourceMaps(!Encore.isProduction())
  // enables hashed filenames (e.g. app.abc123.css)
  .enableVersioning(Encore.isProduction())

  // configure Babel
  // .configureBabel((config) => {
  //     config.plugins.push('@babel/a-babel-plugin');
  // })

  // enables and configure @babel/preset-env polyfills
  .configureBabelPresetEnv((config) => {
    config.useBuiltIns = "usage";
    config.corejs = "3.23";
  });

// uncomment if you use TypeScript
//.enableTypeScriptLoader()

// uncomment if you use React
//.enableReactPreset()

// uncomment to get integrity="..." attributes on your script & link tags
// requires WebpackEncoreBundle 1.4 or higher
//.enableIntegrityHashes(Encore.isProduction())

// uncomment if you're having problems with a jQuery plugin
//.autoProvidejQuery()

module.exports = Encore.getWebpackConfig();
