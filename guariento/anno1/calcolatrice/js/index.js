function main() {
  
  // CONTROLLI GRAFICI

  // Ottengo i riferimenti ai nodi HTML usati dall'applicazione
  const textDisplay = document.querySelector(".display");
  const buttonKeyList = document.querySelectorAll(".key");
  const buttonClear = document.querySelector(".clear");
  const buttonEqual = document.querySelector(".equal");

  // VARIABILI GLOBALI DELLA FUNZIONE

  // Espressione algebrica corrente
  let expr = "";

  // Lunghezza massima di caratteri di un'espressione
  const MAX_EXPR_LENGTH = 16;

  // Simboli degli operatori
  const htmlEntitiesMap = new Map();
  htmlEntitiesMap.set("\u002B", "+");
  htmlEntitiesMap.set("\u002D", "-");
  htmlEntitiesMap.set("\u0078", "*");
  htmlEntitiesMap.set("\u00F7", "/");

  // FUNZIONI PER MANIPOLARE LE VARIABILI GLOBALI

  function initExpression() {
    expr = "";
  }

  function getExpression() {
    return expr;
  }

  function updateExpression(chr) {
    if (expr.length < MAX_EXPR_LENGTH) {
      expr += chr;
    }
  }

  function processExpression(doOperationCallback) {
    try {
      const strFirstOperation = getFirstOperation();
      const calculatorDataObject = getOperandsAndOperator(strFirstOperation);
      doOperation(calculatorDataObject, doOperationCallback);
    } catch {
      textDisplay.value = "Errore: sintassi non valida!";
    }
  }

  function getFirstOperation() {
    const expression = getExpression();
    const re = new RegExp(`^\\d+[${[...htmlEntitiesMap.keys()].join("")}]\\d+`);
    const arrResultMatch = expression.match(re);
    if (!arrResultMatch) throw new Error();
    return arrResultMatch[0];
  }

  function getOperandsAndOperator(strOperation) {
    let oprd1 = "";
    let oprd2 = "";
    let oprt = "";

    [...strOperation].forEach((chr) => {
      if (Number.isNaN(parseInt(chr))) {
        oprt = htmlEntitiesMap.get(chr);
      } else {
        if (!oprt) {
          oprd1 += chr;
        } else {
          oprd2 += chr;
        }
      }
    });

    return { oprd1, oprd2, oprt };
  }

  // Gestisco l'esecuzione di un'operazione
  function doOperation(calcData, doOperationCallback) {
    const serverUrl = "http://localhost/turing5/guariento";

    const formData = new FormData();
    formData.append("oprd1", calcData.oprd1);
    formData.append("oprd2", calcData.oprd2);
    formData.append("oprt", calcData.oprt);

    fetch(`${serverUrl}/calcolatrice/ajax/doOperation.php`, {
      method: "POST",
      body: formData,
    })
      .then((doOperationResponse) => {
        return doOperationResponse.text();
      })
      .then((operationResult) => {
        doOperationCallback(operationResult);
      });
  }

  function doOperationCallback(operationResult) {
    initExpression();
    updateExpression(operationResult);
    updateDisplay();
  }

  // INTERFACCIA GRAFICA

  function updateDisplay() {
    textDisplay.value = getExpression();
  }

  // GESTORI DI EVENTO

  // Associo la funzione da eseguire al click di un pulsante del tastierino
  buttonKeyList.forEach((buttonKey) => {
    buttonKey.addEventListener("click", () => {
      updateExpression(buttonKey.innerText);
      updateDisplay();
    });
  });

  // Associo la funzione da eseguire al click del pulsante speciale Clear
  buttonClear.addEventListener("click", () => {
    initExpression();
    updateDisplay();
  });

  // Associo la funzione da eseguire al click del pulsante speciale Equal
  buttonEqual.addEventListener("click", () => {
    processExpression(doOperationCallback);
  });
}

// Registro l'evento DOMContentLoaded sul documento HTML
// così da intercettare l'evento di quando il DOM è stato
// completamente caricato in memoria del browser. A quel
// punto, invoca la funzione main().

document.addEventListener("DOMContentLoaded", () => {
  main();
});
