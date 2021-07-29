# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/)
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## 0.2.0-alpha - unreleased

This is an alpha version! The changes listed here are not final.

### Added
- Add backup package dependency.
- Added Backup UI, placeholders, and supporting end points.
- Added design for No Backup Capabilities view. Removed unused CSS. Minor styling fixes.
- Adds Jetpack header and footer
- Integrate ConnectionStatusCard component for managing the site/user connection.

### Changed
- Adjusted the RNA connection usage as per its recent backward-incompatible changes.
- Changed backup storage and heartbeat info blocks to only display with a backup plan
- Connection: replace ConnectButton with ConnectScreen
- Init 0.2.0-alpha cycle.
- Manually adjust Monorepo package version refs for 10.0 release.
- Reorganized Admin.js to facilitate integration
- Updated all external links to use redirect service
- Updated package dependencies
- Updated styles wrapping ConnectScreen
- Update lock file
- Update node version requirement to 14.16.1

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
