// COUNTER NUMBER----------
document.addEventListener('DOMContentLoaded', function() {
    function createRotatingEffect(digitClass, finalNumber) {
        const digits = document.querySelectorAll('.' + digitClass);
        if (digits.length === 0) return; // Evita erro se não houver elementos

        const targetDigits = finalNumber.toString().padStart(3, "0").split(""); 
        let currentDigits = new Array(targetDigits.length).fill(0);

        function rotateDigit(digitElement, targetDigit, index) {
            let currentDigit = currentDigits[index];
            let rotations = Math.floor(Math.random() * 15) + 25; // Mais giros antes de parar

            let interval = setInterval(() => {
                currentDigit = (currentDigit + (Math.random() > 0.5 ? 1 : -1) + 10) % 10;
                digitElement.textContent = currentDigit;
                currentDigits[index] = currentDigit;

                rotations--;
                if (rotations <= 0 && currentDigit === targetDigit) {
                    clearInterval(interval);
                    digitElement.textContent = targetDigit; // Garante que pare no número certo
                }
            }, 50);
        }

        function startRotation() {
            for (let i = 0; i < digits.length; i++) {
                const targetDigit = parseInt(targetDigits[i], 10);
                setTimeout(() => rotateDigit(digits[i], targetDigit, i), i * 300);
            }
        }

        startRotation();
    }

    // Definir os valores finais exatos
    createRotatingEffect('digitA', 550);
    createRotatingEffect('digitB', 700);
    createRotatingEffect('digitC', 320);
    createRotatingEffect('digitD', 150);
});

