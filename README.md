# Colors
Colors is a small package that contains 22 color palettes. Each palette has ten shades from light to dark. The colors are based on the [TailwindCSS](https://tailwindcss.com/docs/customizing-colors#default-color-palette) colors. 

## Installation
```bash
composer require ypho/colors
```

## Usage
```php
// Return given color, default ShadeIndex 3
$color = Color::getSingleColor('red'); // #fee2e2

// Return given color, but a darker shade of red
$color = Color::getSingleColor('red', 7); // #b91c1c

// Returns a palette of 10 shades of the given color
$palette = Color::getColorPalette('teal'); // ['#f0fdfa' ... '#134e4a']

// Returns all colors, but only ShadeIndex = 2 (light)
$lightColors = Color::getColorsByShade(2); // ['#e2e8f0' ... '#fecdd3']

// Same as above, only ShadeIndex = 8 (darker shade), and exclude red
$darkColorsExceptRed = Color::getColorsByShade(8, ['red']);
```

## Donations
![BTC](https://img.shields.io/badge/BTC-bc1qaf590wa6gvgzhq60pwez9jp2nup643laasj7yl-blue)
![ETH](https://img.shields.io/badge/ETH-0x4B5cA9188A55d2CEb6E7765B7f23EceF3530531B-red)
