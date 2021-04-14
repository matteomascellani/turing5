// Button Equal Event Handlers

import { Utilities } from "../Utilities.js";

export class ButtonEqualEventHandlers {
  onButtonEqualClick(textDisplay) {
    const utilities = new Utilities();
    const strNumber = textDisplay.value;

    if (utilities.isAValidIntegerNumber(strNumber)) {
      console.log("Giusto!");
    } else {
      console.log("Errore: sintassi non valida!");
    }
  }
}
