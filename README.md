# **Hashed Media Uploads**  

**Hashed Media Uploads** is a **WordPress plugin** that automatically renames uploaded media files using a **secure SHA-256 hash**, ensuring **privacy, uniqueness, and filename conflict prevention**.  

---

## **Disclaimer**  

This plugin is provided **"as is"** without warranties or guarantees of any kind. The author disclaims all implied warranties, including but not limited to merchantability, fitness for a particular purpose, and non-infringement of third-party rights. **Use of this plugin is at the user's own risk.**  

---

## **Description**  

By default, WordPress preserves the original file names of uploaded media, which may pose **privacy risks** and **naming conflicts**.  

This plugin **automatically renames** all uploaded media files using a **cryptographically secure SHA-256 hash**, ensuring that:  
✔ **File names remain anonymous** and do not expose user-uploaded content.  
✔ **No duplicate filenames** occur, preventing conflicts.  
✔ **Uploads remain private** by removing identifiable filenames.  

---

## **Installation**  

1. **Upload & Install**  
   - Upload the plugin folder to `/wp-content/plugins/hashed-media-uploads/`,  
   - Or install it directly via the **WordPress Plugin Repository**.  

2. **Activate the Plugin**  
   - Go to **Plugins → Installed Plugins** and activate **Hashed Media Uploads**.  

3. **The plugin starts working automatically**  
   - All **newly uploaded media files** will be **renamed with a SHA-256 hash**.  

---

## **Usage**  

✔ **No configuration needed** – The plugin works automatically upon activation.  
✔ **Every uploaded media file** is **securely renamed** before being saved.  

Example:  
- Uploaded file: `my-photo.jpg`  
- Renamed to: `e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855.jpg`  

---

## **Features**  

✔ **Automatic File Renaming** – No manual action required.  
✔ **Cryptographically Secure Hashing** – Uses **SHA-256** for stronger security.  
✔ **Prevents Filename Conflicts** – No duplicate filenames in media uploads.  
✔ **Enhances Privacy** – Removes identifiable filenames.  
✔ **Lightweight & Optimized** – Minimal performance impact.  

---

## **Function Reference**  

### **`pixovoid_hash_uploaded_filename($file)`**  
Renames an uploaded file using a **SHA-256 hash**.  

- **Parameter:**  
  - `$file` *(array)* – The uploaded file data.  
- **Returns:**  
  - *(array)* – Modified file data with a hashed filename.  

Example usage:  
```php
add_filter('wp_handle_upload_prefilter', 'pixovoid_hash_uploaded_filename');
```

---

## **License**  

This plugin is licensed under the **MIT License**. See the [LICENSE](LICENSE) file for details.  

---

## **Author**  

Developed by **[PixoVoid.net](https://pixovoid.net/)**.  

---

### 🚀 **Secure and anonymize your media uploads with Hashed Media Uploads!** 🚀  