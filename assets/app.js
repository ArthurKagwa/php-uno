// Completed lessons are remembered in this browser
const KEY = "php-uno-done";
const getDone = () => {
  try { return JSON.parse(localStorage.getItem(KEY)) || []; } catch (e) { return []; }
};
const setDone = (list) => {
  try { localStorage.setItem(KEY, JSON.stringify(list)); } catch (e) {}
};

// Lesson page: "Mark as done" button
const lesson = document.querySelector("main.lesson");
const doneBtn = document.querySelector(".done-btn");
if (lesson && doneBtn) {
  const id = lesson.dataset.lesson;
  const render = () => {
    const isDone = getDone().includes(id);
    doneBtn.classList.toggle("is-done", isDone);
    doneBtn.textContent = isDone ? "✓ Done! (tap to undo)" : "Mark as done";
  };
  doneBtn.addEventListener("click", () => {
    const list = getDone();
    setDone(list.includes(id) ? list.filter((x) => x !== id) : [...list, id]);
    render();
  });
  render();
}

// Index page: ticks, progress bar and "Continue" button
const cards = document.querySelectorAll(".lesson-card");
if (cards.length) {
  const done = getDone();
  let next = null;
  cards.forEach((card) => {
    const isDone = done.includes(card.dataset.lesson);
    card.classList.toggle("done", isDone);
    if (!isDone && !next) next = card;
  });
  const count = [...cards].filter((c) => c.classList.contains("done")).length;
  const label = document.getElementById("done-count");
  const bar = document.getElementById("overall-bar");
  if (label) label.textContent = `${count} of ${cards.length} done`;
  if (bar) bar.style.width = `${Math.round((count / cards.length) * 100)}%`;
  const cont = document.getElementById("continue");
  if (cont && count > 0 && next) {
    cont.href = next.getAttribute("href");
    cont.textContent = `Continue: ${next.querySelector("strong").textContent} →`;
    cont.hidden = false;
  }
}

// Copy buttons on code blocks
document.querySelectorAll(".code-wrap").forEach((wrap) => {
  const btn = document.createElement("button");
  btn.className = "copy-btn";
  btn.type = "button";
  btn.textContent = "Copy";
  btn.addEventListener("click", async () => {
    const text = wrap.querySelector("code").innerText;
    try {
      await navigator.clipboard.writeText(text);
    } catch (e) {
      const ta = document.createElement("textarea");
      ta.value = text;
      document.body.appendChild(ta);
      ta.select();
      document.execCommand("copy");
      ta.remove();
    }
    btn.textContent = "Copied!";
    btn.classList.add("done");
    setTimeout(() => {
      btn.textContent = "Copy";
      btn.classList.remove("done");
    }, 1500);
  });
  wrap.appendChild(btn);
});
