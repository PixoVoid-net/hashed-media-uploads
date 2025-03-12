<?php

/**
 * Plugin Name: Hashed Media Uploads
 * Plugin URI: https://pixovoid.net/
 * Description: Automatically renames uploaded media files using a SHA-256 hash to ensure privacy and avoid conflicts.
 * Version: 1.1.0
 * Author: PixoVoid.net
 * Author URI: https://pixovoid.net/
 * License: MIT
 * License URI: https://opensource.org/licenses/MIT
 * Text Domain: hashed-media-uploads
 */

if (!defined('ABSPATH')) {
    exit; // Prevent direct access.
}

/**
 * Securely rename uploaded file using a SHA-256 hash.
 *
 * @param array $file The uploaded file data.
 * @return array Modified file data with hashed name.
 */
function pixovoid_hash_uploaded_filename($file)
{
    // Extract and validate file extension
    $file_info = pathinfo($file['name']);
    $extension = isset($file_info['extension']) ? strtolower($file_info['extension']) : '';

    // Validate file type using WordPress' built-in function
    $file_type = wp_check_filetype($file['name']);
    if (!$file_type['ext'] || !$file_type['type']) {
        return $file; // Skip renaming if the file type is not allowed
    }

    // Generate a secure unique hash (SHA-256)
    $hashed_name = hash('sha256', random_bytes(32));

    // Construct the new filename
    $file['name'] = $hashed_name . ($extension ? '.' . $extension : '');

    return $file;
}

// Apply filter to rename uploaded files
add_filter('wp_handle_upload_prefilter', 'pixovoid_hash_uploaded_filename');
