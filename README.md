![Alcof](img/logo-alcof-web.svg)

## About

Le spécialiste de la sécurité pour les particuliers et les professionnels


## Installation
A few steps to get started with setup


### Installing Dependencies
- Make sure you have installed Node.js and Browser-Sync (optional) on your computer globally
- Then open your terminal and browse to the location of your local repository copy
- Run: `$ npm install`
- This is already installed in the theme folder and works by ignoring core files
- To add plugins and folders, don't forget to check the .gitignore files to enable tracking of the plugins folder or whichever folder you are working in

### DO NOT TOUCH THEME FILES (OUTSIDE OF GIT)
I am consistently working in the theme directory. Please try not to touch it unless you have a local setup and can compile the files.
No edits of theme from Wordpress dashboard.

### Running
To work with and compile your Sass files on the fly start:

- `$ gulp watch`

Or, to run with Browser-Sync:

- First change the browser-sync options to reflect your environment in the file `/gulpconfig.json` in the beginning of the file:
```javascript
{
    "browserSyncOptions" : {
        "proxy": "localhost/alcof/", //Or name of your local installation folder
        "notify": false
    },
    ...
};
```
- then run: `$ gulp watch-bs`
