# Comicus <small>in development</small>

> Development/Implementaion Notes:

## Features (and Ideas)

- Site is a SPA (Single Page Application) built with Flux/React.
- Comics JSON built with PHP (or statically and uploaded) from image filenames.
- Use History for pretty URLs (include htaccess for that support).
- Commentary: Support for markdown commentary per comic.

## Eventually
- Web admin -- A lot that goes with this... May not ever happen (PHP sucks).
- Might have an offline app that uploads the images to the `comics/` folder, automatically encoding the filename. Perhaps using node-webkit.


## Config Options
- Start at: `beginning` or `end`
- Archive: `thumbnail` or `list` or `cover` (no archive, show cover/first page)

## Image Filename Format

Encode most info in filename:

0001_i2zukxyp_Storyline+or+Comic+Name_Comic+or+Issue+Title.jpg

> SORT_ORDER '_' PUBLISH_TIMESTAMP '_' STORYLINE '_' TITLE

Commentary would need the same first two segments?

0001_i2zukxyp.md

or

0001_i2zukxyp_Commentary+Title.md
