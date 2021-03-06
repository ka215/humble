<h1><img src="https://ka2.org/sloth/assets/sloth.svg" height="32"> Sloth</h1>

Mobile-first lightweight CSS Framework that has reduced styling coding costs to a minimum with non-BEM and simpler naming conventions than OOCSS.

<div align="center">
  <table border="0"><tbody><tr>
  <td width="20%" align="center"><img alt="Sloth Pickup Styles: Forms" src="https://ka2.org/sloth/assets/sloth_ss1.jpg"></td>
  <td width="20%" align="center"><img alt="Sloth Pickup Styles: Toggle Buttons" src="https://ka2.org/sloth/assets/sloth_ss2.jpg"></td>
  <td width="20%" align="center"><img alt="Sloth Pickup Styles: Buttons" src="https://ka2.org/sloth/assets/sloth_ss3.jpg"></td>
  <td width="20%" align="center"><img alt="Sloth Pickup Styles: CSS Grids" src="https://ka2.org/sloth/assets/sloth_ss4.jpg"></td>
  <td width="20%" align="center"><img alt="Sloth Pickup Extensions: Dialog" src="https://ka2.org/sloth/assets/sloth_ss5.jpg"></td>
  </tr></tbody></table>
</div>

The Sloth is lightweight as it saves the effort to rely on the legacy browser. Also, the Sloth can use advanced styling technology that utilizes flexbox, grid, CSS variables, and limited vendor prefixes.

The Sloth supports SCSS and postCSS, and you can customize your build with the included gulp file. Then the Sloth is providing at only distributed css file without dependenting JavaScript.

**19.8kB gzipped** at the latest version.

Also since version 1.0.3, it has been added the sloth extensions script that enhances your mark-up the components on the HTML. By using this extension, you get usable the advanced validation form or the popping dialog window, etc.

**I support the Black Lives Matter movement, so I changed the default branch name to main since version 1.5.0.**

![GitHub release](https://img.shields.io/github/release/ka215/sloth.svg)
![GitHub All Releases](https://img.shields.io/github/downloads/ka215/sloth/total.svg)
![npm download](https://img.shields.io/npm/dt/sloth-css?label=npm%20download)
[![Packagist](https://img.shields.io/packagist/l/doctrine/orm.svg)](https://raw.githubusercontent.com/ka215/sloth/main/LICENSE)

<br>

## Installation

You can install via bower:
```sh
bower install --save sloth-css
```

Or, you can install via npm:
```sh
npm install --save sloth-css
```

Or, you can clone the source:
```gitattributes
git clone https://github.com/ka215/sloth.git
```

Or, you can load via CDN:
```html
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/ka215/sloth@main/dist/sloth.min.css">
<script async src="https://cdn.jsdelivr.net/gh/ka215/sloth@main/dist/sloth.extension.min.js"></script>
```

## Usage

The Sloth provides one CSS file `sloth.min.css` that minified. In order to use one, you can add a `<link>` in your `<head>`.
```html
<!doctype html>
<html>
<head>
  ︙
  <link rel="stylesheet" href="/path/to/sloth/dist/sloth.min.css">
  ︙
</head>
<body>
  ︙
</body>
</html>
```

### Markup

Marking up in the Sloth style is very easy. Basically, you can complete most of your work simply by declaring the `.sloth` class to the parent element you want to apply style to.

You can apply the Sloth style on the entire page by assigning the `.sloth` class to the `<body>` element.
```html
<body class="sloth">
 ︙
</body>
```

Alternatively, it is possible to apply the Sloth style only within a specific element as shown below.

```html
<div class="sloth">
 ︙
</div>
```

Also, by using the `.nons` class in the element to which the Sloth style is applied, it is possible to exclude only a specific element from the Sloth style application.
```html
<body class="sloth">
   ︙
  <h1 class="nons">Not Sloth Styled headline</h1>
   ︙
</body>
```

## Documentation & Demo

You would prefer to see the following URL for a list of all elements and components expressed in the Sloth style.

<https://ka2.org/sloth/>

## Supported Browsers

<https://ka2.org/sloth/?p=support>

## Contributions

1. Fork it
2. Welcome new pull request

## Creators

**ka2 (Katsuhiko Maeno)**

-   <https://ka2.org/>

Your donations for supporting the Sloth style will help me.

Donate URL:  <https://ka2.org/sloth/donation.html>

## Special Thanks

Thanks to Our Contributors and Sponsors.

- "[Normalize.css](https://github.com/necolas/normalize.css)" and "[Bootstrap-reboot.css](https://github.com/twbs/bootstrap/blob/v4-dev/dist/css/bootstrap-reboot.css)" for the foundation.
- Inspired by the "[Furtive](https://github.com/johno/furtive)".
- Inspired by the "[@mallendeo](https://codepen.io/mallendeo/pen/eLIiG)".

## Copyright and license

Code and documentation copyright 2019 - 2020 the  [ka2](https://ka2.org/). Code released under the  [MIT License](https://raw.githubusercontent.com/ka215/sloth/master/LICENSE).
