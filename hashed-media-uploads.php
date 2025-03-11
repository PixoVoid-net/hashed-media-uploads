<?php
/**
 * Plugin Name: Hashed Media Uploads
 * Plugin URI: https://pixovoid.net/
 * Description: Automatically renames uploaded media files using a SHA-1 hash to ensure privacy and avoid conflicts.
 * Version: 1.0.0
 * Author: PixoVoid.net
 * Author URI: https://pixovoid.net/
 * License: MIT
 * License URI: https://opensource.org/licenses/MIT
 * Text Domain: hashed-media-uploads
 */

if (!defined('ABSPATH')) {
    exit; // Prevent direct access
}

/**
 * Rename uploaded file using a secure SHA-1 hash.
 *
 * @param array $file The uploaded file data.
 * @return array Modified file data with hashed name.
 */
function pixovoid_hash_uploaded_filename($file)
{
    // Extract and sanitize file extension
    $file_info = pathinfo($file['name']);
    $extension = isset($file_info['extension']) ? strtolower($file_info['extension']) : '';

    // Ensure only allowed file types are processed
    $allowed_mime_types = get_allowed_mime_types();
    $mime_type = mime_content_type($file['tmp_name']);
    if (!in_array($mime_type, $allowed_mime_types)) {
        return $file; // Skip renaming if the file type is not allowed
    }

    // Generate a unique SHA-1 hash for the filename
    $hashed_name = sha1(uniqid(mt_rand(), true));

    // Construct the new filename and sanitize
    $new_filename = sanitize_file_name($hashed_name . ($extension ? '.' . $extension : ''));
    $file['name'] = $new_filename;

    return $file;
}

// Apply filter to rename uploaded files
add_filter('wp_handle_upload_prefilter', 'pixovoid_hash_uploaded_filename');
