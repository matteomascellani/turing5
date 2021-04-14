// Event Handlers Binder

import { UIControls } from "../UIControls.js";
import { ButtonDigitEventHandlers } from "./ButtonDigitEventHandlers.js";
import { ButtonOperationEventHandlers } from "./ButtonOperationEventHandlers.js";
import { ButtonClearEventHandlers } from "./ButtonClearEventHandlers.js";
import { ButtonEqualEventHandlers } from "./ButtonEqualEventHandlers.js";

export class EventHandlersBinder {
  
  constructor() {
    this.uiControls = new UIControls();
    this.buttonDigitEventHandlers = new ButtonDigitEventHandlers();
    this.buttonOperationEventHandlers = new ButtonOperationEventHandlers();
    this.buttonClearEventHandlers = new ButtonClearEventHandlers();
    this.buttonEqualEventHandlers = new ButtonEqualEventHandlers();
  }

  attachOnButtonDigitClickEvents(buttonDigitList, textDisplay, cb) {
    buttonDigitList.forEach((buttonDigit) => {
      buttonDigit.addEventListener("click", () => {
        cb(buttonDigit, textDisplay);
      });
    });
  }

  attachOnButtonOperationClickEvents(buttonOperationList, cb) {
    buttonOperationList.forEach((buttonOperation) => {
      buttonOperation.addEventListener("click", () => {
        cb(buttonOperationList, buttonOperation);
      });
    });
  }

  attachOnButtonClearEvent(buttonClear, textDisplay, cb) {
    buttonClear.addEventListener("click", () => {
      cb(textDisplay);
    });
  }

  attachOnButtonEqualEvent(buttonEqual, textDisplay, cb) {
    buttonEqual.addEventListener("click", () => {
      cb(textDisplay);
    });
  }

  attachEvents() {
    this.attachOnButtonDigitClickEvents(
      this.uiControls.digits,
      this.uiControls.display,
      this.buttonDigitEventHandlers.onButtonDigitClick
    );

    this.attachOnButtonOperationClickEvents(
      this.uiControls.operations,
      this.buttonOperationEventHandlers.onButtonOperationClick
    );

    this.attachOnButtonClearEvent(
      this.uiControls.clear,
      this.uiControls.display,
      this.buttonClearEventHandlers.onButtonClearClick
    );

    this.attachOnButtonEqualEvent(
      this.uiControls.equal,
      this.uiControls.display,
      this.buttonEqualEventHandlers.onButtonEqualClick
    );
  }
}
