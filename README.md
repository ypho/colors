# Colors

![License](https://img.shields.io/github/license/ypho/colors)
![GitHub Workflow Status](https://img.shields.io/github/workflow/status/ypho/colors/Installation%20&%20Tests)
![Code Size](https://img.shields.io/github/languages/code-size/ypho/colors)
![Latest Release](https://img.shields.io/github/v/release/ypho/colors)

Colors is a small package that contains 22 color palettes. Each palette has ten shades from light to dark. The colors
are based on the [TailwindCSS](https://tailwindcss.com/docs/customizing-colors#default-color-palette) colors.

## Installation

```bash
composer require ypho/colors
```

## Usage

```php
// Return given color
$regularRed = Color::getSingleColor('red'); // #ef4444

// Return given color, but a darker shade of red
$amazonGreen = Color::getSingleColor('green', 8); // #166534

// Returns a palette of 10 shades of the given color
$teal = Color::getColorPalette('teal'); // ['#f0fdfa' ... '#134e4a']

// Returns all colors, in a light shade
$lightColors = Color::getColorsByShade(2); // ['#e2e8f0' ... '#fecdd3']

// Same as above, but take only three colors
$trafficLight = Color::getColorsByShade(6, ['red', 'orange', 'green']); // ['#dc2626', '#f97316', '#22c55e']
```

## Donations

![BTC](https://img.shields.io/badge/BTC-bc1qaf590wa6gvgzhq60pwez9jp2nup643laasj7yl-blue)
![ETH](https://img.shields.io/badge/ETH-0x4B5cA9188A55d2CEb6E7765B7f23EceF3530531B-red)
