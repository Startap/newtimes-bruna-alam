/** Functions declarations that we need */
onInputFormFocus = function (el) {
    // Get input label linked with current input
    inputLabel = el.originalTarget.labels[0]
    inputValue = el.originalTarget.value.trim()

    // If we have some value on our input, the label must be
    // moved to top, otherwise it will be placed over input again
    if (inputValue !== '') { 
        inputLabel.classList.add('input-filled')
     } else { 
        inputLabel.classList.remove('input-filled')
     }
}


/** Deal with ready state from document */
document.onreadystatechange = function() {
    if (document.readyState === 'complete') {
        inputElements = document.querySelectorAll('form input')

        inputElements.forEach(elInput => {
            elInput.addEventListener('input', (el) => { onInputFormFocus(el) })
        })
    }
}