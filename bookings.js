let services = ["hotels", "trains", "buses", "flights", "downloads"]
function getservice(index) {
    for (let i = 0; i < 5; i++) {
        const element = services[i];
        let servId = document.getElementById(element);
        if (i != index) {
            servId.style.display = "none";
        }
        else{
            servId.style.display = "flex";
        }
    }
}
