# Tasks - Simple PHP To-Do List

## Overview

Tasks is a simple PHP project designed to refresh basic PHP concepts through a minimal to-do list application. This
project does not include authentication or a database. It consists of a main page (`index.php`), additional PHP files to
manage task deletion and status updates, and some frontend resources (CSS and JavaScript).

## Features

- Add tasks with a unique ID generated using `time()`.
- Mark tasks as completed or not completed (boolean `isDone` value).
- Delete tasks.
- Store tasks in a JSON file (`tasks.json`).

## Project Structure

```plaintext
/tasks
│── data/
│   ├── tasks.json          # Stores tasks in JSON format
│
│── includes/
│   ├── footer.php         # Footer template
│   ├── head.php           # Head section template
│   ├── header.php         # Header template
│
│── public/
│   ├── css/
│   │   ├── style.css      # Stylesheet
│   ├── js/
│   │   ├── index.js       # JavaScript file
│
│── .gitignore             # Git ignore file
│── delete_task.php        # Handles task deletion
│── edit_task.php          # Handles task updates
│── index.php              # Main page displaying tasks
│── README.md              # Project documentation
```

## How It Works

1. **Adding Tasks**: Tasks are created and assigned a unique ID using the `time()` function and stored in `tasks.json`.
2. **Marking as Done/Not Done**: Clicking an action button updates the `isDone` boolean value.
3. **Deleting Tasks**: A delete option removes tasks from the JSON file.

## Requirements

- PHP 7+.
- A local or online PHP server (e.g., Apache with XAMPP, WAMP, or MAMP).

## Installation

1. Clone or download this repository.
2. Place the project folder in your web server directory (e.g., `htdocs` for XAMPP).
3. Start your local server and open `http://localhost/tasks/index.php` in your browser.

## License

This project is free to use and modify as needed.

---

Enjoy coding with PHP! 🚀

