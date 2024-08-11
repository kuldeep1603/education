interact('.draggable')
.draggable({
    listeners: {
        move(event) {
            var target = event.target;
            // Keep the dragged position in the data-x/data-y attributes
            var x = (parseFloat(target.getAttribute('data-x')) || 0) + event.dx;
            var y = (parseFloat(target.getAttribute('data-y')) || 0) + event.dy;
           
            target.style.transform = 'translate(' + x + 'px, ' + y + 'px)';
            // Update the position attributes
            target.setAttribute('data-x', x);
            target.setAttribute('data-y', y);
        },
    },
})
.resizable({
    edges: { left: true, right: true, bottom: true, top: true },
});

interact.maxInteractions(Infinity); 


const display = document.querySelector(".cal-display");
const buttons = document.querySelectorAll("button");
const specialChars = ["%", "*", "/", "-", "+", "="];
let output = "";
let memory = 0;

// Define function to calculate based on button clicked.
const calculate = (btnValue) => {
    display.focus();
    if (btnValue === "=" && output !== "") {
        output = eval(output.replace("%", "/100"));
    } else if (btnValue === "square") {
        output = Math.pow(parseFloat(output), 2).toString();
    } else if (btnValue === "sqrt") {
        const inputValue = parseFloat(output);
        output = Math.sqrt(inputValue).toString();
    } else if (btnValue === "%") {
        output = (parseFloat(output) / 100).toString();
    } else if (btnValue === "MC") {
        memory = 0;
    }else if (btnValue === "1/x") {
        output = ( 1/parseFloat(output)).toString();
    } 
    else if (btnValue === "MR") {
        output = memory.toString();
    } else if (btnValue === "M+") {
        memory += parseFloat(output);
    } else if (btnValue === "M-") {
        memory -= parseFloat(output);
    } else if (btnValue === "AC") {
        output = "";
    } else if (btnValue === "DEL") {
        output = output.toString().slice(0, -1);
    } else {
        if (output === "" && specialChars.includes(btnValue)) return;
        output += btnValue;
    }
    display.value = output;
};

// Add event listener to buttons, call calculate() on click.
buttons.forEach((button) => {
    button.addEventListener("click", (e) => calculate(e.target.dataset.value));
});

const Calculator = document.querySelector(".Calculator");
const fa_Calculator = document.querySelector(".fa-calculator");

fa_Calculator.addEventListener('click', () => {
    Calculator.classList.toggle("cal-hide")
});
