<p align="center">
  <a href="https://www.utk.edu/">
    <img src="https://images.utk.edu/designsystem/2020/assets/i/icon-114x114.png" alt="Power T">
  </a>
</p>

<h3 align="center">University of Tennessee, Knoxville Design System Theme</h3>

---

**Version 0.0.6**

The Official UT Digital Design System Theme (UTKSDS) was made to help UT web developers build interfaces that match UT's visual identity and make consistent the user interface of a variety of digital products.

---

## Installing this project

### Step 1, Installing the requirements:

The UTKSDS uses Node and Gulp to compile and compress Javascript and CSS from source files. To modify this project, you must use Node 14 and Gulp.

1. Not required, but highly recommended. [Install NVM by following these instructions](https://github.com/nvm-sh/nvm#installing-and-updating). **Mac Users**: If you get an "nvm: command not found" error after running the install script (and you likely will), be sure to [follow the troubleshooting steps](https://github.com/nvm-sh/nvm#troubleshooting-on-macos).
2. Install Node.js **Important**: _You must use version 14 of Node with this project. Newer versions will not work_. [Install using NVM (recommended)](https://www.linode.com/docs/guides/how-to-install-use-node-version-manager-nvm/#using-nvm-to-install-node).
3. [Install the Gulp Command Line Utility](https://gulpjs.com/docs/en/getting-started/quick-start#install-the-gulp-command-line-utility).


### Step 2, Installing the this project:

1. Download or `git clone` this project by typing `git clone git@github.com:utkwdn/utksds-framework.git`.
2. In your terminal, change to the new `/utksds-framework/` directory.
3. Ensure you are running Node.js 14 prior to installation, by typing `node -v`
4. Type `npm install` to install dependencies.


### Step 3, Development configuration

To test or develop this project locally, install WordPress locally, but do not install this theme. Instead, create symlink to the `build` directory in this project and place that symlink in your WordPress installation's theme directory.

---

## Developing or building the theme

This project uses the task runner [Gulp](https://gulpjs.com/) to compile and compress PHP files and images. All you need to do to edit is to use terminal to run the command `gulp` in the project's directory.

Gulp will watch the `/src/` directory for changes and creates files in `/build/`. As you make changes to the files in `/src/`, compiled and compressed files will be created in `/build/`.

The Gulp commands are:

- `gulp` runs continually and watches the `\src\` directory for changes. When you change a file, it rebuilds the theme in the `\build\` directory.
- `gulp build` will build a testing theme.
- `gulp dist` will minimize all images and css and javascript for production and place a production ready version of the theme in the `\dist\` directory.

The NPM commands are:

- `npm run dev` runs continually and watches the `\src\` directory for changes. When you change a file, it rebuilds the theme in the `\build\` directory.
- `npm run build` will build a testing theme.
- `npm run dist` will minimize all images and css and javascript for production and place a production ready version of the theme in the `\dist\` directory.

**Note**: The JS and CSS is edited in the framework project. The theme references [javascript](https://images.utk.edu/designsystem/v1/latest/assets/js/utk.js) and [css](https://images.utk.edu/designsystem/v1/latest/assets/css/style.css) files on the images server.
