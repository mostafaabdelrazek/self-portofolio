# Favicon Generation Instructions

I've created `favicon.svg` with your MS-CODE branding. Now you need to generate PNG versions for better browser compatibility.

## Option 1: Use Online Tool (Easiest)
1. Go to https://realfavicongenerator.net/
2. Upload your `favicon.svg` file
3. Download the generated package
4. Extract and copy these files to your project root:
   - `favicon.ico` (for older browsers)
   - `favicon.png` (32x32 or 192x192)
   - `apple-touch-icon.png` (180x180)

## Option 2: Use ImageMagick (Command Line)
```bash
# Install ImageMagick first
# Ubuntu/Debian: sudo apt-get install imagemagick
# macOS: brew install imagemagick

# Then run:
convert favicon.svg -resize 32x32 favicon.png
convert favicon.svg -resize 192x192 favicon-192.png
convert favicon.svg -resize 180x180 apple-touch-icon.png
```

## Option 3: Use Online SVG to PNG Converter
1. Go to https://cloudconvert.com/svg-to-png
2. Upload `favicon.svg`
3. Download and rename to appropriate sizes

## Files Needed:
- ✅ `favicon.svg` - Already created!
- ⏳ `favicon.png` - Generate this (32x32)
- ⏳ `apple-touch-icon.png` - Generate this (180x180)

## Quick Fix (Temporary):
If you want the site live immediately, the SVG favicon will work in modern browsers. The PNG versions are optional but recommended for wider compatibility.

## Current Favicon Design:
- White circular background
- Big "M" in black (bold and prominent)
- Black Ops One font (matching your logo)
- Clean, minimalist look
- High contrast for better visibility

