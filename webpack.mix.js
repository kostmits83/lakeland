const mix = require('laravel-mix');
require('laravel-mix-purgecss');
const argv = require('minimist')(process.argv.slice(2));

const src = {
  user: {
    js: 'resources/js/app.js',
    sass: 'resources/sass/app.scss'
  },
  admin: {
    js: 'resources/js/admin.js',
    sass: 'resources/sass/admin.scss'
  }
}
const dest = {
  js: 'public/js',
  sass: 'public/css'
}
// For User
if (argv.user) {
    mix.js(src.user.js, dest.js) // Output: public/js/app.js
       .sass(src.user.sass, dest.sass); // Output: public/css/app.css
}
// For Admin
else if (argv.admin) {
    mix.js(src.admin.js, dest.js) // Output: public/js/admin.js
      .sass(src.admin.sass, dest.sass); // Output: public/css/admin.css
}
// Both
else {
    mix.js(src.user.js, dest.js)
       .sass(src.user.sass, dest.sass)
       .sass(src.admin.sass, dest.sass);
}
