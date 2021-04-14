// Button Operation Event Handlers

export class ButtonOperationEventHandlers {
  onButtonOperationClick(buttonOperationList, clickedButtonOperation) {
    buttonOperationList.forEach((buttonOperation) => {
      buttonOperation.classList.remove("selected");
    });
    clickedButtonOperation.classList.add("selected");
  }
}
