# GetWellGamers.org.uk

## Compiling styles

The styles for this project are generated using SASS. The working SASS files are found in `src/sass` and compile into `gwg/`. In order to compile the SASS into CSS you must first install Node and Gulp.

### Install Node.js

You will need to have [homebrew](http://brew.sh/) installed before running this command

    brew install node

### Install [Gulp](http://gulpjs.com/) as global task manager

    npm install -g gulp

### Install the project node depedencies

cd to `src` and run the following:

    npm install

### Development

    gulp watch #or just 'gulp styles' to compile them
