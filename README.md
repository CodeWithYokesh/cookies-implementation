# Cookies Implementation in PHP

## Objective
This project demonstrates how to use cookies in PHP to store, retrieve, display, and delete user preference data such as a username.

## Features
- Store username in a cookie
- Retrieve and display cookie value
- Set cookie expiry time
- Delete cookie

## Files
- `index.php` - Main PHP file for cookie operations

## How It Works
1. User enters a username.
2. When "Set Cookie" is clicked, the username is stored in a cookie for 1 hour.
3. The stored cookie value is displayed on the page.
4. When "Delete Cookie" is clicked, the cookie is removed.

## Output
- Displays form to enter username
- Shows confirmation message after setting cookie
- Displays stored cookie data
- Deletes cookie and shows no cookie found

## Run the Program
1. Place the folder inside `htdocs`
2. Start Apache in XAMPP
3. Open browser and run:

   http://localhost/8-cookies-implementation/index.php

## Sample Use
- Enter username: `Yokesh`
- Click `Set Cookie`
- Refresh page to see stored cookie
- Click `Delete Cookie` to remove it
