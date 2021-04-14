// main.js

import { EventHandlersBinder } from "./Classes/EventHandlers/EventHandlersBinder.js";

document.addEventListener("DOMContentLoaded", () => {
  const eventHandlersBinder = new EventHandlersBinder();
  eventHandlersBinder.attachEvents();
});
