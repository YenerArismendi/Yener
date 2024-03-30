document.addEventListener("DOMContentLoaded", function () {
    const addProductForm = document.querySelector("#miModal form");
    const inventoryTableBody = document.querySelector("#inventoryTable tbody");
    const pageNumButtonsContainer = document.querySelector(".pagination");

    const productsPerPage = 10;
    let currentPage = 1;

    addProductForm.addEventListener("submit", function (event) {
        event.preventDefault(); // Evitar que el formulario se envíe automáticamente

        // Obtener los valores de los campos de entrada
        const productId = document.getElementById("id_producto").value;
        const productName = document.getElementById("nombre").value;
        const productQuantity = document.getElementById("cantidad").value;
        const productPrice = document.getElementById("precio_unitario").value;
        const productShop = document.getElementById("almacen").value;
        const productAlertLevel = document.getElementById("nivel_alerta").value;

        if (
            productId &&
            productName &&
            productQuantity &&
            productPrice &&
            productShop &&
            productAlertLevel
        ) {
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

            updatePagination();
        } else {
            alert("Por favor, complete todos los campos.");
        }
    });

    // Resto del código...



        function updatePagination() {
            const totalProducts = inventoryTableBody.children.length;
            const totalPages = Math.ceil(totalProducts / productsPerPage);

            pageNumButtonsContainer.innerHTML = "";

            for (let i = 1; i <= totalPages; i++) {
                const pageNumBtn = document.createElement("button");
                pageNumBtn.textContent = i;
                pageNumBtn.classList.add("pageNumBtn");
                pageNumBtn.addEventListener("click", function () {
                    currentPage = i;
                    updatePage();
                });
                pageNumButtonsContainer.appendChild(pageNumBtn);
            }

            updatePage();
        }

        function updatePage() {
            const startIdx = (currentPage - 1) * productsPerPage;
            const endIdx = startIdx + productsPerPage;
            const rows = Array.from(inventoryTableBody.children);

            rows.forEach((row, index) => {
                if (index >= startIdx && index < endIdx) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            });
        }

        document.getElementById("prevPageBtn").addEventListener("click", function () {
            if (currentPage > 1) {
                currentPage--;
                updatePage();
            }
        });

        document.getElementById("nextPageBtn").addEventListener("click", function () {
            const totalProducts = inventoryTableBody.children.length;
            const totalPages = Math.ceil(totalProducts / productsPerPage);
            if (currentPage < totalPages) {
                currentPage++;
                updatePage();
            }
        });

        updatePagination();
    });