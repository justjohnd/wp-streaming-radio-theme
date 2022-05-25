Welcome to the **Streaming Radio** theme. The first part of this document is for developers; the second part is for users. Finally, developers will find the **Underscores** starter theme README at the end of the document, kept as a reference. This theme was built using Underscores.

# Developer Information

## This theme has been built with the XAMPP stack on top of the **/s** starter theme. It also uses **gulp** as a task runner.

To start up the site in developer mode:

- Be sure to start Apache and your mySQL database
- Navigate to the `ssr990/wp-content/themes/boostrap-theme` directory
- From the command line, run `npm start`

Site will load up locally at `localhost:3000/ssr990`. To access admin panel, got to localhost:3000/ssr990/wp-admin. To login, use "admin".

To build for production, run `npm run build`.

## Template Overview

- DJ pages: `author.php`
- DJs and Shows page: `page-authors.php`
- Blog posts (aka "Recent Playlists"): `page-blog.php`
- News: `page-blog.php`

## blog-page.php

This file uses javascript to change the format of the page, depending on whether author images or author background images have been added to the user section.

# Client Information

Here you will find basic information on how to set up and maintain the content of your site. Before making any siginificant changes, please make sure you have a saved backup of the site in case anything goes wrong and you need to reinstate a previous version.

There are many places in the Wordpress Dashboard where your content can be changed. Depending on the page/post, most of the visible page content can either be changed directly in native editor--Gutenberg--or in custom fields at the bottom of the edit page. Custom fields are sometimes referred to as ACF (advanced custom fields) in this document.

## Accessing the Dashboard

- Go to my-site.com/wp-admin
- Login using your login/password credentials
- If you have any issues logging in, request a new password or contact your Administrator

## Important Security Notes

Currently all plugins have auto-updates disabled. It is very important to update plugins regularly and this can be done easily by going to Plugins -> Installed Plugins and toggling the plugins to "Enable Auto-Update". However, I recommend not using auto-updates, because there are some cases when updates can break your site. However, it is critically important to keep your plugins updated. You can read more about the pros and cons of enabling auto-updates [here](https://www.wordfence.com/blog/2020/08/wordpress-auto-updates-what-do-you-have-to-lose/).

Before doing so, however, make sure you have a site backup system in place. Updates can sometimes have unintended, site-breaking consequences so have a backup ready.

## Set Up Your Site Description (Tagline)

Setting your site's tagline is essential to helping search engines better index and rank your site. Do this by going to Settings -> General -> Tagline. Enter your description in the Tagline field and save.

## Set Up Your Metadata

Metadata is information about a website, which helps search engines index and rank it, making your site easier to find on the web. This site uses AIOSEO, a plugin that helps manage that information. AIOSEO does not recognize content in custom fields (used throughout this site). Hence, the plugin shows numerous unnecessary warnings in the Basic SEO and Readibility sections of the page or post. Please disregard these warnings.

Note that all pages and posts are set up to automatically generate appropriate metadata by default, so you do not need to set it up. You may however tailor any page/post name and meta description to your liking using the AIOSEO fields:

1. Go to any page or post and click Edit
2. If you do not see the AIOSEO tool bar, click the three dots in the top right corner and then select AIOSEO from the Plugins section
3. Click Edit Snippet. Here you can manually change the title and description for any page.

## Images

Large images can slow your site way down. Here are some tips for image optimization.

- Crop your images to the desired shape (square or rectangle). This can be done in Wordpress, but I recommend doing before hand before moving to media library. You can crop images [here](https://bulkresizephotos.com/en).
- Resize your images to the minimum pixel size require for the largest screen. To determine this size, on a Chrome browser, go to your website. Then right click -> Inspect. You should see a Developer Tools section open up over part of the page. Make sure that the tools are located across the bottom of the page so that the page itself is still full width. Then at the far left end of the Developer Tools toolbar, click the Element Selector icon. Now hover your mouse over the desired image. You will see the dimensions displayed. Take not of the width. This is what you will set your minimum width to for that image.

![image](https://user-images.githubusercontent.com/55176130/128441885-312970bc-9ab8-436c-afee-a66fd2cd9601.png)

You can use Wordpress to resize images, but I recommend doing so before moving to media library. [Here](https://bulkresizephotos.com/en) is an online tool you can use.

- Compress your images prior to using. [Here] is a good online tool.
- In Wordpress, always add alt text to your image. If using WMPL, also add a translation.

## Categories

Categories are used to index posts based on the category applied to the post.

**SSR990 Theme Notes**

- This them is set up already with the following categories for posts: DJs, Blog, and News. DJ's category aggregates DJ bio pages. Blog category is to be used for "Recent Playlists". News is intended for blog posts related to SSR990 as an organization. All other categories are to be used for music genres and will be shown in the side bar on various other pages.

Note that at this time, creating a new catetory is possible, but that category name will also appear under the "Music Genres" section of the sidebar.

## Posts and Pages

Posts and pages here work just like in any typical wordpress setup. Pages are intended for static pages, such as your Contact page. The front page of the site is set to "static" as well, meaning new blog posts do not appear on it, and it will not change unless you change the content of the page.

Posts have two purposes in this theme: one is to create and show blog posts; the other is to house indivual informational pages for your authors. "Blog Posts" refers to any post other than an author page. Your theme has already been tailored so that blog posts will be displayed in various pages on the site based on their categories, for example "News," or "Recent Playlists", i.e.: the post category determines where you will see the post on the site. The methods for adding, editing, and deleting posts is the same for any post type, with any exceptions listed below. See more information in the categories section below.

## Add and Edit Blog Posts

Posts are used to create both Playlist or News posts. Where a post is shown on the site is determined by whether the category "Blog" is chosen (for Playlists) or "News". Posts are also shown on the appropriate author page, regardless of the category chosen.

- Go to Posts → Add New to create a new post page.
- Title the post
- Add any text or image content directly into the Wordpress editor

In the side panel under Posts:

- Verify the Author matches the author name
- Under Categories, check the appropriate categories relevent to the music. Also select **Blog** for Playlist posts or **News** for News posts.
- When satisfied with all changes, click Update, then Publish
- From the main Posts or Pages panel, add a translation per the instructions below in Translate Post or Page
- **Be sure to check your actual post online and make sure all images are showing on the translated page** If they are not, see the WPML Troubleshooting secitn below.

## Deleting Pages, Posts

Note that deleting a page will remove it from the menus. It will need to be re-added, once a new page is created.

## DJs Sections and Front Page "OUR DJS" section

This information comes entirely from fiels in the **Users** section of the dashboard.

Recommended user roles for the site are: Administrator and Author. All DJ’s may be assigned an Author role, allowing them to create, publish, and edit their own posts. (They may not edit other authors’ pages).

- **Important**: "Role" must be set to "Author"
- "Display name publically as" field displays the DJ name
- "Website" sets the external link to SoundCloud or MixCloud is from the
- "Biographical Info" sets the DJ bio, as shown on the DJ page
- "Background Image" set by the background banner image on the DJ page
- "Streaming Icon" set the image for the "Listen Now" button on DJ and Playlist pages
- "Author Image" sets the DJ image

## Edit Menu

- You should not have to change your site menu, but it is possible to add or remove pages from the navigation bar. Please note that this is limited to the desktop only, and not mobile.
- Changes to the Contact, Donate, Events, and More buttons, as well as any changes to the mobile menu must be made by a developer.
- You can add / remove pages from the desktop menu under Appearance → Menus. Menu name is Menu 1

## How to Use WPML

### Installation and Setup (Developer)

- Refer to ----- for general insallation instructions
- Under settings, click "Use WPML's Advanced Translation Editor"
- When using ACF be sure to set all images to "Copy" (not "Translate") under WMPL settings

### Translate Post or Page

- Go to WPML -> Translation Management.
- Select Posts or Pages you wish to translate. Note that you can send multiple posts/pages at the same time.
- Click **_Add Selected Content to Translation Basket_** button at bottom of page.
  ![image](https://user-images.githubusercontent.com/55176130/126728839-48acde91-b814-45b0-9ced-84f91ed18343.png)
- Click on the Translation Basket tab.
- Under number 3, "Choose translator or Translation Service" choose the name of the person you wish to assign translation duties to.
- Click **_Send all items for translation_** at the bottom of the screen
  ![image](https://user-images.githubusercontent.com/55176130/126729060-93af5c53-f99c-4678-a42e-e0117dfdad1c.png)
- Click WMPL -> Translations and click the **_Translate_** button for the page/post you wish to translate
  ![image](https://user-images.githubusercontent.com/55176130/126729175-6bcb7be0-28d3-407b-9185-c56a2c55d3f3.png)
- You will now be on the Advanced Translation Editor page. Note that original-language text may appear in individual boxes, depending on whether text was entered into the Wordpress editor in separate blocks or not. To combine sections (for instance, if you adding a large transalation for multiple sentences or pragraphs), click the small, round link button that appears on the dividing line between Source and Target areas. This will combine the blocks into one section.
- Click **_Click to edit translation_**
- In the translation field on the write add or edit translated material
- When complete click the Checkbox
- Note that all sections of the page/post must be translated in order to save
- Once finished, click the **_Complete_** button -![image](https://user-images.githubusercontent.com/55176130/126729583-99c5b898-9053-4ea7-b36f-5b01a00cdea7.png)
- Note that once any pages have been flagged for translation, they can also be accessed by the Pages or Posts page by clicking on the icon for the page in its Foreign Language Column. You can add, edit, or update pages, depending on current translation status, through these icons
  ![image](https://user-images.githubusercontent.com/55176130/126730407-fad61350-fd8a-41df-aa93-8716dfdd6662.png)
- Note that other items may appear in the Advanced Translation Editor screen for elements that are not readable on the site (but some which can be seen in the pages source code). Element may include image names, alternate text for images, field names or messagges viewable from the Wordpress Dashboard, or short codes. Image names and alternate text for images are good to translate, however if you do not know what an item is (such as a field name), DO NOT translate it. Doing so could break aspects of the site.

### Editing or Deleting Translations

- Translations can be edited following the instructions above.
- If you make changes to any page/post in the original post, you will need to update the foreign language translation
- Note that you must delete translated pages separately. Do this by going to posts or pages, selecting the language at the top and selecting the pages you wish to delete.

### Translate Contact Form 7

- Under WPML -> Translation Management, under the number 1, "Select items for translation" dropdown, select Contact Form and then the **Filter** button
- From here, follow the typical instructions for translation.

### Translate Forms

All forms are made with the Contact Form 7 plugin. To access form content for editing and translation, from the WP dashboard:

- Go to Contact -> Contact Forms, and select the form you wish to edit.
- Under the Form tab, edit any of the titles of your form fields
- In the righthand column, under Translations, click the icon next to the language name
  ![image](https://user-images.githubusercontent.com/55176130/127945379-4bbb0c11-fd2c-43c0-a8a7-f1eaa2501dcc.png)
- Make and save any translations. See **Translate Post or Page** section of this document for more information.
- If you do not know what the field is, leave the translation the same as it originally was in English.

### Translate Menus

Menu items may come either from actual posts or pages accessible in Wordpress, or they may be custom links created by the developer

#### Translate Menus accessible inside Wordpress

- Go to Appearance -> Menu
- Click the language link next to "Translations:" on the far right
- Drag items to add to translate menu
- Note that page and post names shown on the Page and Post pages will be in whatever language that is being shown on Appearance -> Menu.

### Translate Custom links

Custom links may include external links or links to specific areas on a page or post in Wordpress

- Go to WPML -> Theme and plugins localization
- Under Strings in the themes, check your theme name ("Boostrap Theme")
- Click **Scan selected themes for strings**
  ![image](https://user-images.githubusercontent.com/55176130/126735173-51bfdede-0e00-45ae-b523-9b59d8ce83bc.png)
- Go to WPML -> String translation
- In the Search for box, type the word or phrase you are looking to translate
- Add the translation
  ![image](https://user-images.githubusercontent.com/55176130/126735206-124a1ae6-3248-480f-9262-444db8477017.png)

## WPML Troubleshooting

- If page does not appear translated, has missing images, or missing content, first verify that a page/post translation exists
- If images appear as broken links on pages: Go to WPML -> Settings -> Media Translation, and click **Start**. Once complete, refresh page and check again.

## General Troubleshooting

1. If content has disappeared from the page, go back to the page or post edit screen and click Update.
2. If you receive a strange message from Google Translate on your page, some custom fields are not showing correctly, or the LANGUAGES link is broken, check to make sure you have the appropriate tag ('english' for English pages) assigned to the page

# README from the Underscores (\_s) starter theme:

[![Build Status](https://travis-ci.org/Automattic/_s.svg?branch=master)](https://travis-ci.org/Automattic/_s)

# \_s

Hi. I'm a starter theme called `_s`, or `underscores`, if you like. I'm a theme meant for hacking so don't use me as a Parent Theme. Instead try turning me into the next, most awesome, WordPress theme out there. That's what I'm here for.

My ultra-minimal CSS might make me look like theme tartare but that means less stuff to get in your way when you're designing your awesome theme. Here are some of the other more interesting things you'll find here:

- A modern workflow with a pre-made command-line interface to turn your project into a more pleasant experience.
- A just right amount of lean, well-commented, modern, HTML5 templates.
- A custom header implementation in `inc/custom-header.php`. Just add the code snippet found in the comments of `inc/custom-header.php` to your `header.php` template.
- Custom template tags in `inc/template-tags.php` that keep your templates clean and neat and prevent code duplication.
- Some small tweaks in `inc/template-functions.php` that can improve your theming experience.
- A script at `src/js/navigation.js` that makes your menu a toggled dropdown on small screens (like your phone), ready for CSS artistry. It's enqueued in `functions.php`.
- 2 sample layouts in `src/sasslayouts/` made using CSS Grid for a sidebar on either side of your content. Just uncomment the layout of your choice in `src/sassstyle.scss`.
  Note: `.no-sidebar` styles are automatically loaded.
- Smartly organized starter CSS in `style.css` that will help you to quickly get your design off the ground.
- Full support for `WooCommerce plugin` integration with hooks in `inc/woocommerce.php`, styling override woocommerce.css with product gallery features (zoom, swipe, lightbox) enabled.
- Licensed under GPLv2 or later. :) Use it to make something cool.

## Installation

### Requirements

`_s` requires the following dependencies:

- [Node.js](https://nodejs.org/)
- [Composer](https://getcomposer.org/)

### Quick Start

Clone or download this repository, change its name to something else (like, say, `megatherium-is-awesome`), and then you'll need to do a six-step find and replace on the name in all the templates.

1. Search for `'_s'` (inside single quotations) to capture the text domain and replace with: `'megatherium-is-awesome'`.
2. Search for `_s_` to capture all the functions names and replace with: `megatherium_is_awesome_`.
3. Search for `Text Domain: _s` in `style.css` and replace with: `Text Domain: megatherium-is-awesome`.
4. Search for <code>&nbsp;\_s</code> (with a space before it) to capture DocBlocks and replace with: <code>&nbsp;Megatherium_is_Awesome</code>.
5. Search for `_s-` to capture prefixed handles and replace with: `megatherium-is-awesome-`.
6. Search for `_S_` (in uppercase) to capture constants and replace with: `MEGATHERIUM_IS_AWESOME_`.

Then, update the stylesheet header in `style.css`, the links in `footer.php` with your own information and rename `_s.pot` from `languages` folder to use the theme's slug. Next, update or delete this readme.

### Setup

To start using all the tools that come with `_s` you need to install the necessary Node.js and Composer dependencies :

```sh
$ composer install
$ npm install
```

### Available CLI commands

`_s` comes packed with CLI commands tailored for WordPress theme development :

- `composer lint:wpcs` : checks all PHP files against [PHP Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/php/).
- `composer lint:php` : checks all PHP files for syntax errors.
- `composer make-pot` : generates a .pot file in the `languages/` directory.
- `npm run compile:css` : compiles SASS files to css.
- `npm run compile:rtl` : generates an RTL stylesheet.
- `npm run watch` : watches all SASS files and recompiles them to css when they change.
- `npm run lint:scss` : checks all SASS files against [CSS Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/css/).
- `npm run lint:js` : checks all JavaScript files against [JavaScript Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/javascript/).
- `npm run bundle` : generates a .zip archive for distribution, excluding development and system files.
