# php-uno

Step-by-step beginner PHP lessons for **WampServer** on Windows. It's a phone-friendly mini course where each lesson is small, with numbered steps, copyable code and a quick check at the end.

## View the lessons

- **Online:** https://php-uno.vercel.app
- **GitHub Pages:** turn on *Settings → Pages → Deploy from branch → `main` / root*.
- **Offline:** download the repo and open `index.html` in any browser.

## Lessons

| # | Lesson | Project folder |
|---|--------|----------------|
| 00 | What you need & how this works | – |
| 01 | Install WampServer | – |
| 02 | Start it & check localhost | – |
| 03 | The www folder & your first project | – |
| 04 | Hello World | `projects/04-hello-world` |
| 05 | Variables & echo | `projects/05-variables` |
| 06 | Joining text & simple maths | `projects/06-text-and-maths` |
| 07 | If / else decisions (even or odd) | `projects/07-even-odd` |
| 08 | Your first form: add two numbers (POST) | `projects/08-addition` |
| 09 | Calculator with switch | `projects/09-calculator` |
| 10 | Loops: times table | `projects/10-times-table` |
| 11 | GET forms: greeting by time of day | `projects/11-greeting` |
| 12 | Troubleshooting | – |
| 13 | What next | – |

## What's inside

```
php-uno/
├── index.html      # course home with the lesson list and progress
├── lessons/        # one page per lesson (00–13)
├── assets/         # shared styles and script (progress ticks, copy buttons)
└── projects/       # finished, ready-to-run PHP for lessons 04–11
```

## Run the projects

1. Install [WampServer](https://www.wampserver.com/en/) and start it (wait for the green tray icon).
2. Copy the folders inside `projects/` into `C:\wamp64\www`.
3. Open them in your browser, e.g. `http://localhost/04-hello-world/`.

Using XAMPP? It works the same way. Just copy the folders into `C:\xampp\htdocs` instead.

## License

[MIT](LICENSE) © 2026 Asasira Arthur
