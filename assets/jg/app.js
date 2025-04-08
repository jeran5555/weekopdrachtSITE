function winkelWagenAdd() {
    let winkelmandItems = document.getElementById("winkelmandItems");
    let currentCount = parseInt(winkelmandItems.textContent);
    winkelmandItems.textContent = currentCount + 1;
}
