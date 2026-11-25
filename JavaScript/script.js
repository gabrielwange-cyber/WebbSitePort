const contactButtons = document.querySelectorALL('[data-js-action="send-contact"]');
const InfoContent = document.querySelector('[data-js-target="contact-info"]');

contactButtons.forEach(function(button){
    // addEventListener: "när någon klickar på knappen, kör den här funktionen"
    button.addEventListener('click', function () {

        // 2. DATA: VAD behöver actionen veta? Vilken pizza!
        // Datan läses från SAMMA knapp som klickades.
        // data-pizza-name i HTML blir dataset.pizzaName i JS
        // (bindestrecket försvinner och nästa bokstav blir stor).
        const Namn = button.form.elements.namn.value;
        const Email = button.form.elements.email.value;
        const Tel = button.form.elements.tel.value;
        // 3. TARGET: visa resultatet i varukorgen.
        // textContent byter ut texten i elementet.
        InfoContent.textContent = 'Du har angivit: ' + Namn + ', ' + Tel + ' och ' + Email + '. Jag hör av mig snarast möjligt!';
        });
    });