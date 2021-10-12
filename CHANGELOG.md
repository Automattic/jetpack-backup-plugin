# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/)
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## 0.3.0-alpha - unreleased

This is an alpha version! The changes listed here are not final.

### Added
- Added link to the plugins list table for "Settings" to match other Jetpack plugins.
- Plugin now disconnects Jetpack on deactivation if it's the last plugin using the connection
- Soft-fail if Jetpack is active and not version 10 or higher
- Update Backup plugin readme text and remove dummy tag
- Update readme.md installation instructions
- Uses admin-ui to register the admin menu

### Changed
- Allow Node ^14.17.6 to be used in this project. This shouldn't change the behavior of the code itself.
- Bump the RNA API version.
- Changed menu label
- Janitorial: start new release cycle
- Switched the connection screen to withConnectionScreen HOC for pulling connection status.
- Tests: update PHPUnit polyfills dependency (yoast/phpunit-polyfills).
- Update components version number
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
- Updated styles for bbuttons in backup panel and spacing for sections below
- Update package dependencies
- Update to latest webpack, webpack-cli and calypso-build
- Use Node 16.7.0 in tooling. This shouldn't change the behavior of the code itself.
- Use the "withConnectionStatus" HOC for ConnectScreen component.

### Removed
- Removed unused method

### Fixed
- Adjust dashboard styling.
- Bring back the disappeared connection screen image.
- Updated scss files for sass division deprecation.

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
