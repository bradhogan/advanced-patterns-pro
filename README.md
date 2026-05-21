# Advanced Patterns Pro

Advanced Patterns Pro is a WordPress block pattern plugin focused on flexible layouts and native block editor patterns.

## Version
Current plugin version: **1.0.1**

## Clickable Cover and Group blocks
Version 1.0.1 adds a **Link settings** panel for **Cover** and **Group** blocks.

When **Make block clickable** is enabled:
- the block uses the **first valid inner link** as its destination
- block-wide click behavior is handled with **JavaScript click delegation**
- nested interactive elements such as links and buttons are allowed to keep their expected behavior

## Recommended QA checklist
Before releasing updates, test the following:

- Group block with a normal inline text link
- Group block with a button link
- Cover block with a normal inline text link
- Cover block with a button link
- Block with no links inside it
- Block with multiple links inside it
- Link with `target="_blank"`
- Keyboard navigation with Tab and Enter
- Mobile tap behavior

## Notes for maintenance
- The plugin version is defined in `advanced-patterns-pro.php`
- Clickable block render markers are added in `advanced-patterns-pro.php`
- Editor controls and frontend click delegation live in `build/appro.js`
- Shared styles live in `build/styles.scss` and `build/styles.css`
