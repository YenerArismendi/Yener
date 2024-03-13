document.addEventListener("DOMContentLoaded", function() {
    const addProductBtn = document.getElementById("addProductBtn");
    const inventoryTableBody = document.querySelector("#inventoryTable tbody");

    addProductBtn.addEventListener("click", function() {
        const productId = prompt("Ingrese el ID del Producto:");
        const productName = prompt("Ingrese El Nombre:");
        const productQuantity = prompt("Ingrese La Cantidad:");
        const productPrice = prompt("Ingrese el Precio:");
        const productShop = prompt("Ingrese el numero almacen:");
        const productAlertLevel = prompt("Ingrese nivel alerta:");

        if (productId && productName && productQuantity && productPrice
             && productShop && productAlertLevel) {
            const newRow = document.createElement("tr");
            newRow.innerHTML = `
                <td>${productId}</td>
                <td>${productName}</td>
                <td>${productQuantity}</td>
                <td>$${productPrice}</td>
                <td>${productShop}</td>
                <td>${productAlertLevel}</td>
            `;
            inventoryTableBody.appendChild(newRow);
        } else {
            alert("Por favor, complete todos los campos.");
        }
    });
});
