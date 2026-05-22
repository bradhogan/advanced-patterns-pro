# Changelog

## 1.0.1
- Added a new **Link settings** panel for **Cover** and **Group** blocks.
- Added a **Make block clickable** toggle for Cover and Group blocks.
- Updated block-wide click behavior to use **JavaScript click delegation** instead of overlay markup.
- Fixed clickable behavior for Group and Cover blocks so nested buttons and links behave more predictably.
- Removed overlay-based rendering that could interfere with Cover block visuals and colors.
- Added supporting editor controls, render markers, and styles for clickable block behavior.
- Split shared block behavior into dedicated editor and frontend scripts for better Gutenberg compatibility.
- Scoped pricing toggle interactions so editor and frontend toggles can target the correct block wrapper.
- Improved Site Editor pricing toggle detection by listening on toggle items instead of only nested buttons.
