# Hashed Media Uploads

Hashed Media Uploads is a WordPress plugin that automatically renames uploaded media files using a SHA-1 hash to ensure privacy and avoid conflicts.

## Disclaimer

This plugin is provided "as is" without any guarantees or warranty. In association with the product, the author makes no warranties of any kind, either express or implied, including but not limited to warranties of merchantability, fitness for a particular purpose, of title, or of noninfringement of third-party rights. Use of the product by a user is at the user’s risk.

## Description

This plugin automatically renames uploaded media files using a secure SHA-1 hash. This ensures that file names are unique, preventing conflicts and enhancing privacy.

## Installation

1. Upload the plugin files to the `/wp-content/plugins/hashed-media-uploads` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress.

## Usage

Once activated, the plugin will automatically rename uploaded media files using a SHA-1 hash.

## Functions

### `pixovoid_hash_uploaded_filename($file)`

Renames the uploaded file using a secure SHA-1 hash.

- **Parameters:**
  - `$file` (array): The uploaded file data.
- **Returns:**
  - (array): Modified file data with hashed name.

## License

This plugin is licensed under the MIT License. See the [LICENSE](LICENSE) file for more information.

## Author

[PixoVoid.net](https://pixovoid.net/)

## Changelog

### 1.0.0

- Initial release.