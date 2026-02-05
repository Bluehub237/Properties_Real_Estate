// srcipt property-detail
// srcipt property-detail
document.addEventListener("DOMContentLoaded", function () {
    // Gestion du compteur de personnes
    const personCount = document.getElementById("personCount");
    const decreaseBtn = document.getElementById("decreaseBtn");
    const increaseBtn = document.getElementById("increaseBtn");

    decreaseBtn.addEventListener("click", function () {
        let count = parseInt(personCount.value);
        if (count > 1) {
            personCount.value = count - 1;
        }
    });

    increaseBtn.addEventListener("click", function () {
        let count = parseInt(personCount.value);
        if (count < 3) {
            personCount.value = count + 1;
        }
    });

    // Gestion de la sélection des créneaux horaires
    const timeSlots = document.querySelectorAll(".time-slot");

    timeSlots.forEach((slot) => {
        slot.addEventListener("click", function () {
            // Retirer la classe active de tous les créneaux
            timeSlots.forEach((s) => {
                s.classList.remove("btn-primary", "active");
                s.classList.add("btn-outline-secondary");
                const badge = s.querySelector(".badge");
                if (badge) badge.remove();
            });

            // Ajouter la classe active au créneau cliqué
            this.classList.remove("btn-outline-secondary");
            this.classList.add("btn-primary", "active");

            // Ajouter le badge "Sélectionné"
            const badge = document.createElement("span");
            badge.className = "badge bg-white text-primary ms-2";
            badge.textContent = "Sélectionné";
            this.appendChild(badge);
        });
    });
});
// srcipt property-detail
// srcipt property-detail

// srcipt portefeuille-client
// srcipt portefeuille-client
// Toggle visibility du solde
document.querySelector(".fa-eye").addEventListener("click", function () {
    const dots = document.querySelector(".balance-dots");
    if (this.classList.contains("fa-eye")) {
        this.classList.remove("fa-eye");
        this.classList.add("fa-eye-slash");
        dots.innerHTML =
            '<p style="font-size: 1.5rem; font-weight: 600;">0 FCFA</p>';
    } else {
        this.classList.remove("fa-eye-slash");
        this.classList.add("fa-eye");
        dots.innerHTML = `
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                `;
    }
});
// srcipt portefeuille-client
// srcipt dashboard-client
// srcipt dashboard-client
