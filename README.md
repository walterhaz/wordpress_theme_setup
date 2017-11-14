Wordpress Theme Setup
---------------------
This is a workflow setup for Wordpress theme development.
Wordpress version 4.8.3
Underscores theme (_s) sass version 1.0.0

Requirements
------------
Minimum requirements:
- Node.js
- Gulp: run `npm install -g gulp`
- BrowserSync: run `npm install -g browser-sync`
- Local server (MAMP/XAMPP/etc.)

Start development
-----------------
- Make database for Wordpress
- Run Wordpress install
- (optional) Find and replace _s theme name (instructions in _s readme)
- Update gulpfile.js to correct paths
    - Change themeName to current theme dir `var themeName = '_s'`
    - Change wordpress install location to current directory name: `var wordpressLocation = "localhost/wordpress_theme_setup";`
    
Use Gulp
----------
- Open directory in command line, run `gulp`
- To stop watch/browsersyc task, press ctrl+C and choose Y


Add packages
------------
If you want to add more packages or plugins, run the following: (this will add to devDependecies in package.json + install dependencies in node_modules):

`npm install ---save-dev package` (replace package with name of package or plugin)

