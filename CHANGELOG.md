# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/)
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## 1.1.0-alpha - unreleased

This is an alpha version! The changes listed here are not final.

### Added
- Add consumer_slug config to webpack
- Redirect to Jetpack Backup plugin page when the plugin is activated.
- Use monorepo `validate-es` script to validate Webpack builds.

### Changed
- Bump the RNA API version.
- Change initial screen for first backup.
- Detect when a backup will retry and update error screen content.
- Import RNA styles from base styles package.
- Make the plugin use RNA Connection for connection state.
- Package version bump.
- Readme: update descriptions to match the Backup plugin more accurately.
- Set `convertDeprecationsToExceptions` true in PHPUnit config.
- The Admin page now promotes the new real-time Backup products.
- Updated package dependencies
- Updated package dependencies
- Updated package dependencies
- Updated package dependencies
- Updated package dependencies
- Updated package dependencies
- Updated package dependencies
- Updated package dependencies.
- Updated package dependencies.
- Updated package dependencies.
- Updated package dependencies.
- Updated package dependencies.
- Updated package dependencies.
- Updated package dependencies.
- Updated package dependencies.
- Updated package dependencies.
- Updated package dependencies.
- Updated package dependencies.
- Updated package dependencies.
- Updated package dependencies.
- Updated package dependencies.
- Updated package dependencies.
- Updated package dependencies.
- Updated package dependencies.
- Updated package dependencies.
- Updated package dependencies.
- Updated package dependencies.
- Updated package dependencies.
- Updated package dependencies.
- Updated package dependencies.
- Updated package dependencies.
- Updated package dependencies.
- Updated package dependencies.
- Updated package dependencies.
- Updated package dependencies.
- Updated package dependencies.
- Updated package dependencies.
- Updated package dependencies.
- Updated package dependencies.
- Updated package dependencies.
- Updated package dependencies.
- Updated version numbers and Stable Tag
- Update PHPUnit configs to include just what needs coverage rather than include everything then try to exclude stuff that doesn't.
- Update upgrade button link target to point to checkout
- Update webpack build config.
- Use `Assets::register_script()` to load Webpack-built script.

### Removed
- Remove use of `gulp` in build, all it was doing was wrapping `webpack`.

### Fixed
- Backup: removed backup-in-progress animation on small viewports

## 1.0.1 - 2021-11-22
### Removed
- Remove the Connection UI activation.

### Fixed
- Fix a bug that prevented the IDC UI from displaying when the site is in an identity crisis.

## 1.0.0 - 2021-10-13
### Added
- Added link to the plugins list table for "Settings" to match other Jetpack plugins.
- Plugin now disconnects Jetpack on deactivation if it's the last plugin using the connection.
- Updated Backup plugin readme text and remove dummy tag.
- Updated readme.md installation instructions.
- Updated plugin menu structure.

### Changed
- Changed menu label.
- Updated package dependencies.
- Updated styles for buttons in backup panel and spacing for sections below.

### Fixed
- Adjust dashboard styling.

## 0.2.0 - 2021-08-18
### Added
- Added Backup UI, placeholders, and supporting end points.
- Added design for No Backup Capabilities view. Removed unused CSS. Minor styling fixes.
- Added Jetpack header and footer
- Added UI options to manage your Jetpack connection

### Changed
- Changed backup storage and heartbeat info blocks to only display with a backup plan
- Updated all external links to use jetpack redirect service
- Updated Jetpack Backup menu item title and icon

### Fixed
- Added a state to display before a first backup starts
- Fix minor styling issue for the "no plan" page.

## 0.1.0-beta - 2021-06-15
### Added
- Added RNA connection to the plugin.
- Initial wire frame for the Jetpack Backup plugin.

### Changed
- Changes associated with plugin release process.
- Updated package dependencies.
- Update RNA Connection usage based on Automattic/jetpack/pull/19837.
- Utilize the config package for sync and connection.

### Fixed
- Use `absoluteRuntime` in babel JS build to avoid module not found errors.
