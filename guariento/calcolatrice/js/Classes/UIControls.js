export class UIControls {
  constructor() {
    this.textDisplay = document.querySelector(".display");
    this.buttonDigitList = document.querySelectorAll(".digit");
    this.buttonOperationList = document.querySelectorAll(".operation");
    this.buttonClear = document.querySelector(".clear");
    this.buttonEqual = document.querySelector(".equal");
  }

  get display() {
    return this.textDisplay;
  }

  get digits() {
    return this.buttonDigitList;
  }

  get operations() {
    return this.buttonOperationList;
  }

  get clear() {
    return this.buttonClear;
  }

  get equal() {
    return this.buttonEqual;
  }
}
