// console.log('test');

const addNewAssessmentBtn = document.getElementById('add-new-row-risk-assessment');

let i = 2; // Start at 1 or the number of existing rows minus one

addNewAssessmentBtn.addEventListener('click', () => {
    const group = document.querySelector('.assessment-container'); // your template
    const container = document.getElementById('risk-assessment-group');

    const clone = group.cloneNode(true); // deep clone

    // Clear the text input
    const textInput = clone.querySelector('input[type="text"]');
    textInput.value = '';
    textInput.name = 'risk_assessment_affected[]'; // PHP array

    // Reset radio buttons and update their names
    const radios = clone.querySelectorAll('input[type="radio"]');
    radios.forEach(radio => {
        radio.checked = false;
        radio.name = `risk_assessment_area[${i}]`; // Grouped per row
    });

    i++; // Increment counter for unique radio group name

    container.appendChild(clone);
});


document.getElementById("dummy-submit").addEventListener("click", function () {
    const form = document.getElementById("test-form");

    // Create a FormData object from the form
    const formData = new FormData(form);

    // Convert it into a plain object
    const formValues = {};
    formData.forEach((value, key) => {
        // If the key already exists (like with radio buttons), turn it into an array
        if (formValues[key]) {
            if (!Array.isArray(formValues[key])) {
                formValues[key] = [formValues[key]];
            }
            formValues[key].push(value);
        } else {
            formValues[key] = value;
        }
    });

    console.log("Form values:", formValues);
});
