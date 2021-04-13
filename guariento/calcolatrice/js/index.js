document.addEventListener("DOMContentLoaded", () => {
  // Input controls
  const textDisplay = document.querySelector(".display");
  const buttonDigitList = document.querySelectorAll(".digit");
  const buttonOperationList = document.querySelectorAll(".operation");
  const buttonSeparator = document.querySelector(".separator");
  const buttonEqual = document.querySelector(".equal");

  // Event handlers

  function onButtonDigitClick(buttonDigit) {
    textDisplay.value += buttonDigit.innerText;
  }

  function onButtonOperationClick(buttonOperation) {
    buttonOperation.classList.toggle("selected");
  }

  function onButtonSeparatorClick(buttonSeparator) {
    textDisplay.value += buttonSeparator.innerText;
  }

  function onButtonEqualClick() {
    console.log("Equal Button Click Event");
  }

  // Event handlers attachment

  function attachButtonClickEvents(buttonList, callback) {
    buttonList.forEach((button) => {
      button.addEventListener("click", () => {
        callback(button);
      });
    });
  }

  function attachButtonClickEvent(button, callback) {
    button.addEventListener("click", () => {
      callback(button);
    });
  }

  function attachEvents() {
    attachButtonClickEvents(buttonDigitList, onButtonDigitClick);
    attachButtonClickEvents(buttonOperationList, onButtonOperationClick);
    attachButtonClickEvent(buttonSeparator, onButtonSeparatorClick);
    attachButtonClickEvent(buttonEqual, onButtonEqualClick);
  }

  attachEvents();
});
