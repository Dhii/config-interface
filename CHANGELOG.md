# Change log
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/)
and this project adheres to [Semantic Versioning](http://semver.org/).

## [[*next-version*]] - YYYY-MM-DD
### Removed
- All exception classes. PSR Container exceptions will suffice.

### Changed
- `ConfigInterface` now only extends the PSR Container interface.

### Added
- `ConfigInterface::KEY_SEPARATOR` now exposes the key separator.
- `ConfigFactoryInterface`.

## [0.1-alpha1] - 2018-04-17
Initial version.
