// Button Digit Event Handlers

export class ButtonDigitEventHandlers {
  onButtonDigitClick(buttonDigit, textDisplay) {
    textDisplay.value += buttonDigit.innerText;
  }
}
