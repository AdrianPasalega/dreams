
UnderStrap WordPress Theme Framework
===
Basic Features
=
- Combines the _s WordPress Starter Theme PHP/JS files and Bootstrap´s HTML/CSS/JS
- Comes with Bootstrap (3.3.6) SASS source files and additional scss files. Nicely sorted and ready to add your own variables/customize the Bootstrap variables.
- Uses a single and minified CSS file for all the basic stuff
- Font Awesome Icon Font integrated (V 4.5.0): http://fortawesome.github.io/Font-Awesome/
- Comes with extra slider script - By owl.carousel (V 2.0.0-beta.2.4): http://www.owlcarousel.owlgraphic.com/
- Simple RTL file
- Jetpack ready
- WooCommerce support
- Child Theme ready (A basic starter Child Theme will be released in the future as a separate Repository)
- Translation ready

Confused by all the CSS and SCSS files?
=
Some basics about the SCSS and CSS files comes with UnderStrap:
- The theme itself uses the style.css in the root directory just to identify the theme inside of WordPress. The file is not loaded by the theme and did not include any styles
- The theme.css file in /css/ subdirectory provides all styles. It is composed by five different SCSS sets and one variables file from /sass/theme.scss:

                  - 1 "theme/theme_variables";  // <--------- Add your variables into this file. Also add variables to overwrite Bootstrap or UnderStrap variables here
                  - 2 "../src/bootstrap-sass/assets/stylesheets/bootstrap";  // <--------- All the Bootstrap stuff - Don´t edit this!
                  - 3 "understrap/understrap"; // <--------- Some basic WordPress stylings and needed styles to combine Boostrap and Underscores
                  - 4 "../src/fontawesome/scss/font-awesome"; // <--------- Font Awesome Icon styles

                  // Any additional imported files //
                  - 5 "theme/theme";  // <--------- Add your styles into this file

- Don´t edit the files no. 2-4 files/filesets or you aren´t able to update it without overwriting your own work!
- Your design goes into: /sass/theme directory. Add your styles to the theme.scss file and your variables to the _theme_variables.scss. Or add other scss files into it and @import it into theme.scss

Installation
=
- Download the understrap folder
- Upload it into your WordPress installation subfolder here: /wp-content/themes/
- Login to your WordPress backend 
- Go to Appearance -> Themes
- Activate the UnderStrap theme

Developing with NPM, Bower, Gulp and SASS
=
- Make sure you have installed Node.js and Bower on your computer globally
- Then open your terminal and browse to the location of your UnderStrap copy
- Run:
$ npm install
than:
$ bower install
and finally:
$ gulp copy-assets

To work and compile your SASS files on the fly start:
$ gulp watch


How to use the build-in Widget Slider?
=
The frontpage slider is widget driven. Simply add more than one widget to widget position "Hero".
- Click on Appearance -> Widgets 
- Add two or more widgets of any kind to widget area "Hero"
- Thats it
